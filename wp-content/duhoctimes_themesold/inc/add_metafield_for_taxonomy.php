<?php
class HT_CustomTaxFields {
    private $taxonomy;
	private $field;

    function __construct($taxonomy = 'category', $field = array()) {
    	$this->taxonomy = $taxonomy;
		$this->field = $field;
        // Add extra field(s) to the taxonomy
        $upload = false;
		foreach ($field as $f) {
			if ($f['type'] == 'file') {
				$upload = true;
				break;
			}
		}
		$current_page = substr(strrchr($_SERVER['PHP_SELF'], '/'), 1, -4);
		if ($upload && $current_page == 'edit-tags') {
			if (get_bloginfo('version') >= 3.5){
				add_action('admin_head', array(&$this, 'ht_admin_media'));
			} else {
				add_action('admin_print_scripts', array(&$this, 'ht_admin_scripts'));
				add_action('admin_print_styles', array(&$this, 'ht_admin_styles'));
			}
			add_action('admin_head', array(&$this, 'ht_script'));
		}
        add_action( $this->taxonomy . '_edit_form_fields', array( $this, 'extra_edit_tax_fields' ) );
        add_action( $this->taxonomy . '_add_form_fields', array( $this, 'extra_add_tax_fields' ));
		add_action('create_'. $this->taxonomy, array( $this, 'save_extra_taxonomy_fields' ), 10, 1);
        add_action( 'edit_' . $this->taxonomy, array( $this, 'save_extra_taxonomy_fields' ), 10, 1 );
		
    }
	function ht_admin_scripts() {
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
	}
	function ht_admin_styles() {
		wp_enqueue_style('thickbox');
	}	
	function ht_admin_media(){
		wp_enqueue_media();
	}	

	function ht_script() { ?>
		<script type="text/javascript">
		    jQuery(document).ready(function($) {
				var wordpress_ver = "<?php echo get_bloginfo("version"); ?>", upload_button;
				$(".ht_upload_media_button").click(function(event) {
					upload_button = $(this);
					var frame;
					if (wordpress_ver >= "3.5") {
						event.preventDefault();
						if (frame) {
							frame.open();
							return;
						}
						frame = wp.media();
						frame.on( "select", function() {
							// Grab the selected attachment.
							var attachment = frame.state().get("selection").first();
							frame.close();
							upload_button.parent().find("input.value-media").val(attachment.attributes.url);
							upload_button.parent().find(".img_select").attr("src", attachment.attributes.url).css("display","inline-block");
							upload_button.parent().find(".ht_remove_media_button").css("display","inline-block");
						});
						frame.open();
					}
					else {
						tb_show("", "media-upload.php?type=image&amp;TB_iframe=true");
						return false;
					}
				});
				
				$(".ht_remove_media_button").click(function() {
					$(this).parent().find("input.value-media").val("");
					$(this).parent().find(".img_select").attr("src","").css("display","none");
					$(this).css("display","none");
					$(".inline-edit-col :input[name=\'taxonomy_image\']").val("");
					return false;
				});
				$('.ht-customize').on('click', '.add-new', function(){
					var error = true;
					var parent = $(this).parents('.ht-customize');
					if(parent.find('.option:last-child').data('count')){
						count = parseInt( parent.find('.option:last-child').data('count') );        					
					} else count = 1;
					var html_row = '<div data-count="'+count+'" class="row option">';
						parent.find('.new-option .cell:not(.action)').each(function(){
							html_row += '<div class="cell">';
							$(this).find('input, textarea, select').each(function(){
								if($(this).hasClass('required') && $(this).val() == ''){
									error = false;
									return;
								}
								html_row += '<'+$(this).context.nodeName.toLowerCase()+' name="'+parent.data('name')+'['+count+']['+$(this).parent().data('name')+']" style="'+$(this).attr('style')+'"';
								if($(this).context.nodeName.toLowerCase() == 'input'){
									html_row += ' value="'+$(this).val()+'" type="'+$(this).context.type+'"';
									if($(this).context.checked) html_row += ' checked="checked"';
									html_row += ' />';
								} else if($(this).context.nodeName.toLowerCase() == 'select'){
									html_row += '>';
									$(this).find('option[value='+ $(this).val() +']').attr('selected','selected');
									html_row += $(this).context.innerHTML;
									html_row += '</select>';
									//console.log($(this).find('option[value='+ $(this).val() +']'));
									//console.log($(this).find('option[value='+ $(this).val() +']'));
								} else {
									html_row += '>'+$(this).val()+'</'+$(this).context.nodeName.toLowerCase()+'>';
								}
								html_row += '</div>';
							});
						});
							html_row += '<div class="action"><span class="remove-option button"><?php echo __('Xóa','ht'); ?></span></div>';
						html_row += '</div>';
					if(!error){
						alert('Chưa điền đủ thông tin bắt buộc');
						return false;
					}
					parent.find('.new-option').before(html_row);
					parent.find('.new-option').data('count', count+1);
					parent.find('.new-option').find('input, textarea').val('');
					parent.find('.new-option').find('option').prop('selected',false);
					parent.find('.new-option').find('input').prop('checked',false);
					return false;
				});
				$('.ht-customize').on('click','.option .remove-option', function(){
					$(this).parents('.option').remove();
					return false;
				});
				if (wordpress_ver < "3.5") {
					window.send_to_editor = function(html) {
						imgurl = $("img",html).attr("src");
						upload_button.parent().find("input.value-media").val(imgurl);
						upload_button.parent().find(".img_select").attr("src", imgurl).css("display","inline-block");
						tb_remove();
					}
				}				
				$(".editinline").live("click", function(){  
				    var tax_id = $(this).parents("tr").attr("id").substr(4);
				    var thumb = $("#tag-"+tax_id+" .thumb img").attr("src");
					if (thumb != "' . Z_IMAGE_PLACEHOLDER . '") {
						$(".inline-edit-col :input[name=\'taxonomy_image\']").val(thumb);
					} else {
						$(".inline-edit-col :input[name=\'taxonomy_image\']").val("");
					}
					$(".inline-edit-col .title img").attr("src",thumb);
				    return false;  
				});  
		    });
		</script>
		<?php
	}
	function show($field){
		if(isset($field['type'])){
			$val = isset($this->term_meta) && esc_attr($this->term_meta[$field['id']]) ? esc_attr($this->term_meta[$field['id']]) : '';
			switch($field['type']){
				case 'text': ?>
					<tr class="form-field">
			            <th scope="row" valign="top"><label for="<?php echo "{$this->taxonomy}_{$field['id']}"; ?>"><?php echo __($field['name']); ?></label></th>
			            <td>
			                <input type="text" name="<?php echo $field['id']; ?>" id="<?php echo "{$this->taxonomy}_{$field['id']}"; ?>" value="<?php echo $val ?>">
			            	<?php echo '<br />', $field['desc']; ?>
			            </td>
			        </tr>
				<?php
					break;
				case 'textarea': 
					$class = (isset($field['tran']) && $field['tran'])? ' class="multilanguage-input"':'';
				?>
					<tr class="form-field">
			            <th scope="row" valign="top"><label for="<?php echo "{$this->taxonomy}_{$field['id']}"; ?>"><?php echo __($field['name']); ?></label></th>
			            <td>
			                <textarea<?php echo $class; ?> name="<?php echo $field['id']; ?>" id="<?php echo "{$this->taxonomy}_{$field['id']}"; ?>"><?php echo $val; ?></textarea>
			            	<?php echo '<br />', $field['desc']; ?>
			            </td>
			        </tr>
				<?php
					break;
				case 'select':
					echo '<tr class="form-field">';
						echo '<th scope="row" valign="top"><label for="'.$this->taxonomy.'_'.$field['id'].'">'.__($field['name']).'</label></th>';
						echo '<td>';
							echo '<select name="'.$field['id'].'" id="'. $this->taxonomy.'_'.$field['id']. '">';
							foreach ($field['options'] as $option) {
								echo '<option value="', $option['value'], '"', $val == $option['value'] ? ' selected="selected"' : '', '>', $option['name'], '</option>';
							}
							echo '</select>';
							echo '<br />', $field['desc'];
						echo '<td>';
					echo '</tr>';
				break;
				case 'radio':
					echo '<tr class="form-field">';
						echo '<th scope="row" valign="top"><label for="'.$this->taxonomy.'_'.$field['id'].'">'.__($field['name']).'</label></th>';
						echo '<td>';
							foreach ($field['options'] as $option) {
								echo '<input type="radio" name="'. $field['id']. '" value="', $option['value'], '"', $val == $option['value'] ? ' checked="checked"' : '', ' />', $option['name'];
							}
						echo '<td>';
					echo '</tr>';
					break;
				case 'checkbox':
					echo '<tr class="form-field">';
						echo '<th scope="row" valign="top">'.__($field['name']).'</th>';
						echo '<td>';
							echo '<input type="checkbox" name="'. $field['id']. '" id="'.$this->taxonomy.'_'.$field['id'].'"', $val ? ' checked="checked"' : '', ' />';
							echo '<label for="'.$this->taxonomy.'_'.$field['id'].'">'.$field['desc'].'</label>';
						echo '<td>';
					echo '</tr>';
					break;
				case 'wysiwyg':
					echo '<tr class="form-field">';
						echo '<th scope="row" valign="top"><label for="'.$this->taxonomy.'_'.$field['id'].'">'.__($field['name']).'</label></th>';
						echo '<td>';
							if(isset($field['tran']) && $field['tran']){
								echo '<div class="ht-multilanguage-form">';
									echo '<ul class="switch-language-input"></ul>';
									echo '<textarea id="'.$field['id'].'" class="ht-multilanguage-input" name="' . $field['id'] . '">', $val ? $val : $field['std'],'</textarea>';
									if(function_exists('qtrans_getSortedLanguages')){
										global $q_config; 
										$first=true;
										$editor_settings = array(
											//'textarea_name' => esc_attr( $field['id'] ),
											'media_buttons' => true,
											'editor_height' => 200,
											'quicktags' => true								
										);
									
										if(function_exists('qtrans_split')){
											$data_content = qtrans_split($val);
										}
										foreach(qtrans_getSortedLanguages() as $language) {					
											$class = (isset($first))? 'current':'';
											echo '<img class="btn-language-form '.$class.'" data-languageform="'.$field['id'].'_'.$language.'" src="'.trailingslashit(WP_CONTENT_URL).$q_config['flag_location'].$q_config['flag'][$language].'" alt="'.$q_config['language_name'][$language].'" />';
											if(!isset($data_content[$language])){
												preg_match('/(<!--:'.$language.'-->)(.*)(<!--:-->)/U', $val, $matches);
												$matches = isset($matches[2])? $matches[2]:'';
											} else $matches = $data_content[$language];
											echo '<div class="language-form '.$field['id'].' '.$field['id'].'_'.$language.' '.$class.'">';
											$editor_settings['textarea_name']  = $language.'_'.$field['id'];
											echo wp_editor($matches,  $language.'_'.$field['id'] , $editor_settings);
											echo '</div>';
											unset($first);
										}
									}	
								echo '</div>';
							} else {
								$settings = array(
								    'wpautop' => true,
			                    	'media_buttons' => true,
									'textarea_rows' => 5,
									'textarea_name' => $field["id"],
								);
								wp_editor($val ? stripslashes(htmlspecialchars_decode($val)) : stripslashes(htmlspecialchars_decode($field['std'])), 'term_meta_'. $field["id"], $settings );
							}
							echo '<br />', $field['desc'];
					echo '<td>';
					echo '</tr>';
					break;
				case 'file':
					echo '<tr class="form-field">';
						echo '<th scope="row" valign="top"><label for="'.$this->taxonomy.'_'.$field['id'].'">'.__($field['name']).'</label></th>';
						echo '<td>';
							echo '<div class="ht-get-media">';
							$style_img = ($val)? '':'display: none;';
							echo '<img style="max-width: 80%; max-height: 150px; '.$style_img.'" class="img_select" src="'.$val.'"/><br />';
							echo '<input type="text" class="value-media" name="'. $field['id']. '" id="'.$this->taxonomy.'_'.$field['id'].'" value="', $val ? $val : $field['std'], '" size="30" style="width:97%" />';
							echo '<input class="button ht_upload_media_button" type="button" value="' . __( "Select/Upload Image", 'ht' ) . '" alt="' . __( "Select image from media or upload new image", 'ht' ) . '" />';
							echo '<input style="'.$style_img.'" class="button ht_remove_media_button" type="button" value="' . __( "Remove Image", 'ht' ) . '" alt="' . __( "Remove current image", 'ht' ) . '" />';
							echo '<br />', $field['desc'];
							echo '</div>';
						echo '<td>';
					echo '</tr>';
					break;
				case 'customize':
					echo '<tr class="form-field">';
						echo '<th scope="row" valign="top"><label for="'.$this->taxonomy.'_'.$field['id'].'">'.__($field['name']).'</label></th>';
						echo '<td>';
							echo '<div class="table ht-customize" data-name="term_meta['.$field['id'].']">';
								$fields = $field['fields'];
								$output = '';
								if($fields){
									/* row head */
									$output .= '<div class="row head">';
									foreach($fields as $f){
										$output .= '<span class="cell">'.$f['label'].'</span>';
									}
									$output .= '</div>';
									/* End row head */
									$i_row = 1;
									if($val && is_array($val)){
										foreach($val as $k=>$v){
											$output .= '<div class="row option" data-count="'.$i_row.'" data-name="'.$field['id'].'">';
											foreach($fields as $fo){
												$type = isset($fo['type'])? trim($fo['type']):'text';
												$output .= '<div class="cell">';
												if($type == 'select'){
													if(isset($fo['options']) && is_array($fo['options'])){
														$output .= '<select name="term_meta['.$field['id'].']['.$i_row.']['.$fo['id'].']">';
														foreach($fo['options'] as $op){
															$selected = ($op['value'] == $v[$fo['id']])? 'selected="selected"':'';
															$output .= '<option value="'.$op['value'].'" '.$selected.'>'.$op['name'].'</option>';
														}
														$output .= '</select>';
													}
												} else {
													$output .= '<input type="text" name="term_meta['.$field['id'].']['.$i_row.']['.$fo['id'].']" value="'.$v[$fo['id']].'" />';
												}
												$output .= '</div>';
											}
												$output .= '<div class="cell action"><span class="button del-option">'.__('Xóa','ht').'</span></div>';
											$output .= '</div>';
											$i_row++;
										}
									}
									/* Add new option */
									$output .= '<div class="row option new-option" data-count="'.$i_row.'" data-name="'.$field['id'].'">';
									foreach($fields as $fo){
										$type = isset($fo['type'])? trim($fo['type']):'text';
										$output .= '<div class="cell" data-name="'.$fo['id'].'">';
											if($type == 'select'){
												if(isset($fo['options']) && is_array($fo['options'])){
													$output .= '<select class="required">';
													foreach($fo['options'] as $op){
														$output .= '<option value="'.$op['value'].'">'.$op['name'].'</option>';
													}
													$output .= '</select>';
												}
											} else {
												$output .= '<input type="text" class="required" />';
											}
										$output .= '</div>';
									}
										$output .= '<div class="cell action"><span class="button add-new">'.__('Thêm','ht').'</span></div>';
									$output .= '</div>';
									/* End add new option */		
								}
								echo $output;
							echo '</div>';
							echo $field['desc'];
							echo '</div>';
						echo '<td>';
					echo '</tr>';
					break;
			}
		}
	}
    function extra_edit_tax_fields( $tag ) {
        if ( isset( $tag ) && is_object( $tag ) ) {
            $t_id = $tag->term_id;
            $this->term_meta = get_option( "taxonomy_{$t_id}" );
        }
		if($this->field && is_array($this->field)){
			foreach($this->field as $field){
				$this->show($field);
			}
		}
    }

    function extra_add_tax_fields($tag) {
        if (isset($tag) && is_object($tag)) {
            $t_id = $tag->term_id;
            $this->term_meta = get_option("taxonomy_{$t_id}");
        }
		if($this->field && is_array($this->field)){
			foreach($this->field as $field){
				$this->show($field);
			}
		}
    }

    function save_extra_taxonomy_fields($term_id) {
        if (isset($this->field) && $this->field) {
        	$t_id = $term_id;
        	$term_meta = get_option( "taxonomy_{$t_id}" );
        	foreach ($this->field as $f) {
				if (isset ( $_POST[$f['id']] )) {
					$term_meta[$f['id']] = $_POST[$f['id']];
				}
			}
			// Save the option array.
	        update_option( "taxonomy_{$t_id}", $term_meta );	
          /*  $t_id = $term_id;
	        $term_meta = get_option( "taxonomy_{$t_id}" );
	        $cat_keys = array_keys( $_POST['term_meta'] );
	        foreach ( $cat_keys as $key ) {
	            if ( isset ( $_POST['term_meta'][$key] ) ) {
	                $term_meta[$key] = $_POST['term_meta'][$key];
	            }
	        }
	        // Save the option array.
	        update_option( "taxonomy_{$t_id}", $term_meta );		*/
        }
    }
}
