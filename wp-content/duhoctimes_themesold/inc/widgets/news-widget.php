<?php
// news at home
class shownews_home extends WP_Widget {
	function shownews_home() {
		$widget_ops = array('classname' => 'ht-news', 'description' => __( 'Show News','fom') );
		$this->WP_Widget('shownews_home', __('Show News','fom'), $widget_ops, array('width' => 400));	
	}
	function widget( $args, $instance ) {
		extract( $args );
		$title_li = apply_filters(widget_title, empty( $instance['title_li'] ) ? '' : $instance['title_li']);
		$nice_cats = (is_array($instance['category']) && !empty( $instance['category']) )? $instance['category']:array();
		$hm = empty( $instance['hm'] ) ? ( $instance['hm'] == '0')? '0': 'auto' : esc_attr($instance['hm']);
		$h = empty( $instance['h'] ) ? ( $instance['h'] == '0')? '0': 'auto' : esc_attr($instance['h']);
		$wm = empty( $instance['wm'] ) ? ( $instance['wm'] == '0')? '0': 'auto' : esc_attr($instance['wm']);
		$w = empty( $instance['w'] ) ? ( $instance['w'] == '0')? '0': 'auto' : esc_attr($instance['w']);
		$num = empty( $instance['num'] ) ? '0' : esc_attr($instance['num']);
		$more = esc_attr($instance['more'])+$num;
		$how = empty($instance['how'])? 'large':esc_attr( $instance['how'] );
		$col = empty($instance['col'])? 'full-width':esc_attr( $instance['col'] );
		$tag_title = isset($instance['tag_title'])? $instance['tag_title']:'[h3]';
		$orderby = isset($instance['orderby'])? $instance['orderby']:'title';
		$level = isset($instance['level'])? $instance['level']:'1';
		$class_level='level'.$level;
		$type_tax = isset($instance['type_tax'])? $instance['type_tax']:'category';
		$post_type = isset($instance['post_type'])? $instance['post_type']:'post';
		$show_if_meta = isset($instance['show_if_meta'])? $instance['show_if_meta']:'';
		if($how=='video'){
			$how = 'columns video';
			$col_video = empty($instance['col_video'])? '3':esc_attr( $instance['col_video'] );
			$class_col_video = 'col-'.$col_video;
		} else $col_video = '';
		$link_header = isset($instance['link_header'])? $instance['link_header']:'';
		$add_header = isset($instance['add_header'])? $instance['add_header']:'';
		$array_tag = array();
		$tag_title = explode('][',$tag_title);
		foreach($tag_title as $tag){
			$tag = trim($tag,'[] ');
			$tag = explode(':',$tag);
			$new_item = array();
			if(isset($tag[0])) {
				$new_item['tag'] = $tag[0];
				$new_item['number'] = isset($tag[1])? $tag[1]:'';
			}
			$array_tag[] = $new_item;
		}
		if(empty($link_header) && isset($instance['category'][0])){
			$link_header = $link_cat = get_term_link((int)$instance['category'][0],$type_tax);
			if ( is_wp_error( $link_header ) ) $link_header = '#';
		} else $link_header = '#';
		$array_add_header = explode("\n",$add_header);
		if(is_array($array_add_header)){
			$add_header = '<ul class="more-header">';
			foreach($array_add_header as $link){
				$link = explode('|',$link);
				if(is_array($link) && isset($link[0]) && isset($link[1])){
					$add_header .= '<li>';						
					$add_header .= '<a href="'.$link[1].'" title="'.$link[0].'">'.$link[0].'</a>';
					$add_header .= '</li>';
				}
			}
			$add_header .= '</ul>';
		}
		echo '<!-- start widget -->';
		if($instance['border_content']) $col .= ' border'; 
		$col .= ' '.$class_level;
		$before_widget = str_replace('$added_class',$col,$before_widget);
		echo $before_widget;
		if(!empty($title_li)){
			echo $before_title.'<a href="'.$link_header.'" title="'.$title_li.'">'.$title_li.'</a></span>'.$add_header;
			$after_title = str_replace('</span>','',$after_title);
			echo $after_title;
		}
		if($instance['show_more']) echo '<a class="more" href="'.$link_header.'" title="'.__('Xem Thêm','fom').'"><i class="fa fa-angle-double-right"></i>'.__('Xem Thêm','fom').'</a>';
		 ?>
              <div class="widget-content content-news <?php echo $how; echo ($hm >0)? '':' no-thumb-more'; ?>">
					<?php
					global $post; 
					$i_tag = 1; 
					$count = 0;
					$args = array('showposts' => $more, 'post_type' => $post_type,'tax_query' => array(
							array(
								'taxonomy'=>$type_tax,
								'field' => 'id',
								'terms' => $nice_cats
							 ))
						 );
					if(in_array($orderby,array('title','ID','date','name'))){
						$args['orderby'] = $orderby;
					} /*else {
						$args['orderby'] = 'meta_value';
						$args['meta_key'] = $orderby;
					}*/
					if(!empty($show_if_meta)) $args['meta_key'] = $show_if_meta;
					
					$recent = new WP_Query( $args );
					if($how === 'timeline'){
                    	while($recent->have_posts()) : $recent->the_post();
							if(isset($array_tag[0]) && !empty($array_tag[0])){
								$tag = (isset($array_tag[0]['tag']) && !empty($array_tag[0]['tag']))? $array_tag[0]['tag']:'h3';
								if(isset($array_tag[0]['number']) && !empty($array_tag[0]['number'])){
									if($i_tag >= (int)$array_tag[0]['number']){
										array_shift($array_tag);
										$i_tag = 1;
									} else $i_tag++;
								}
							} else $tag = 'h3'; ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('entry '.$class_col_video); ?>>				            
						        <a class="thumb" href="<?php the_permalink(); ?>" style="height: <?php echo $h; ?>; width: <?php echo $w; ?>;">
						         	<img src="<?php echo get_thumb($POST->ID); ?>" alt="<?php the_title(); ?>" />
						        </a>
						        <div class="entry-content" style="margin-left: <?php echo ($w/2); ?>px; padding-left: <?php echo ($w/2) + 10; ?>px; ">
						            <<?php echo $tag; ?> class="entry-title post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></<?php echo $tag; ?>><!--<span class="comment-count"><i class="fa fa-comment"></i><?php echo get_comments_number( $post->ID ); ?></span>-->
						            <?php if($instance['featured_excerpt']){ echo '<div class="excerpt">'; ht_content_limit(180); echo '</div>'; } ?>
						            <span class="cd-date"></span>
						           	<ul class="entry-meta">
						           		<li class="author"><span class="fa-user fa"></span><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="me"><?php the_author(); ?></a></li>
						           		<li class="date-time"><span class="fa-calendar fa"></span><span class="date"><?php echo get_the_date(); ?></span></li>
										<?php if($instance['show_more']){ ?><li class="read-more right"><a href="<?php the_permalink(); ?>"><span class="fa-angle-right fa"></span><?php _e('Read more','fom'); ?></a></li><?php } ?>
										<?php
										    if ( comments_open() ) { 
										    	$num_comments = get_comments_number();	
										    ?>
										    	<li class="comment right">
										    		<span class="fa-comment-o fa"></span>
										    		<span><?php echo $num_comments; ?></span>
										    	</li>
										    <?php
										    }
										?> 
										<li class="thanks right">
										<?php
											//echo getPostLikeLink( $post->ID );
										?> 
										</li>
						           	</ul>
						        </div> <!-- cd-timeline-content -->
							</article>
					<?php
						endwhile; 
                    }else{
                    	if($how === 'slider'){
                    	echo '<div class=" list-sliderside flexslider">';
							echo '<ul class="slides">';
                    	while($recent->have_posts()) : $recent->the_post();
							if(isset($array_tag[0]) && !empty($array_tag[0])){
								$tag = (isset($array_tag[0]['tag']) && !empty($array_tag[0]['tag']))? $array_tag[0]['tag']:'h3';
								if(isset($array_tag[0]['number']) && !empty($array_tag[0]['number'])){
									if($i_tag >= (int)$array_tag[0]['number']){
										array_shift($array_tag);
										$i_tag = 1;
									} else $i_tag++;
								}
							} else $tag = 'h3'; ?>
							<li id="post-<?php the_ID(); ?>" <?php post_class('entry slide '.$class_col_video); ?>>				            
						        <a class="thumb" href="<?php the_permalink(); ?>" style="height: <?php echo $h; ?>; width: <?php echo $w; ?>;">
						         	<img src="<?php echo get_thumb($POST->ID); ?>" alt="<?php the_title(); ?>" />
						        </a>
						            <<?php echo $tag; ?> class="entry-title post-title">
						            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						           </<?php echo $tag; ?>>
						            <!-- <span class="comment-count"><i class="fa fa-comment"></i><?php echo get_comments_number( $post->ID ); ?></span>-->
						     <!-- cd-timeline-content -->
							</li>
					<?php
						endwhile; 
							echo '</ul>';
						echo '</div>';
                    }else
                    	{
                    	$class_thumb = $class_thumb_more = 'thumb';
						if($w && $h){
							if($w == '100%'){
								$class_thumb .= ' full';
							}elseif($w != 'auto'){
								$class_thumb .= ' small';
							}
						}
						$class_thumb_more = 'thumb';
						if($wm && $hm){
							if($wm == '100%'){
								$class_thumb_more .= ' full';
							}elseif($wm != 'auto'){
								$class_thumb_more .= ' small';
							}
						}
                    	if($wm && $hm){
                    		$more_has_thumb = true;
							$class_col_video .= ' has-thumb';
                    	} else {
                    		$more_has_thumb = false;
                    	}
						
						while($recent->have_posts()) : $recent->the_post();
							if(isset($array_tag[0]) && !empty($array_tag[0])){
								$tag = (isset($array_tag[0]['tag']) && !empty($array_tag[0]['tag']))? $array_tag[0]['tag']:'h3';
								if(isset($array_tag[0]['number']) && !empty($array_tag[0]['number'])){
									if($i_tag >= (int)$array_tag[0]['number']){
										array_shift($array_tag);
										$i_tag = 1;
									} else $i_tag++;
								}
							} else $tag = 'h3';
	                    if($count < $num){ 
							if($count == 0) echo '<div class="featured">';?>
							<article id="post-<?php the_ID(); ?>" <?php post_class('entry '.$class_col_video); ?> itemscope itemtype="http://schema.org/article">
						        <a class="<?php echo $class_thumb;  ?>" href="<?php the_permalink(); ?>" style="height: <?php echo $h; ?>; width: <?php echo $w; ?>;">
						         	<img itemprop="image" src="<?php echo get_thumb($POST->ID); ?>" alt="<?php the_title(); ?>" />
						         	
						        <?php
						         		if($class_thumb =="thumb full"){
						         			if(get_post_meta($post->ID,'ht_post_gallery',true))
											echo '<div class="btn-slideshow"></div>';
						         		}
										if(get_post_meta($post->ID,'ht_post_video', true))
										echo '<div class="btn-video"></div>';
						         ?>
						          </a>	
						          <?php
						         	 if($class_thumb =="thumb full")?>
								<<?php echo $tag; ?> class="entry-title post-title">
									<a href="<?php the_permalink(); ?>" rel="bookmark" itemprop="name"><?php the_title(); ?></a>
								<!--	<?php $num_cm = get_comments_number( $post->ID ); if(comments_open() && $num_cm > 0) { ?>
										<a href="<?php the_permalink(); ?>/#comment" class="comment-count"><i class="fa fa-comment"></i><?php echo $num_cm ?></a>
									<?php } ?>-->
								</<?php echo $tag; ?>>
								
								<?php if(get_post_meta($post->ID,'ht_product_price',true)){
									echo '<meta itemprop="priceCurrency" content="VND" />';
									echo '<p class="product-price meta"><span class="label">'.__('Price: ','ht').'</span><span itemprop="price" class="value">'.get_post_meta($post->ID,'ht_product_price',true).'</span> VND</p>';
								} ?>
								<?php if($instance['featured_excerpt']){ echo '<div class="excerpt" itemprop="description">'; ht_content_limit(180); echo '</div>'; } ?>
							</article>
							<?php if($count+1 == $num) echo '</div><div class="readmore">';
	                    } else { ?>
		                    <article id="post-<?php the_ID(); ?>" <?php post_class('entry '.$class_col_video); ?>>
		                        <?php if($more_has_thumb){?>
		                        <a style="height: <?php echo $hm; ?>; width: <?php echo $wm; ?>;" class="<?php echo $class_thumb_more; ?>" href="<?php the_permalink(); ?>"><img src="<?php echo get_thumb($POST->ID); ?>" alt="<?php the_title(); ?>" /></a>
		                        <?php } ?>
		                        <<?php echo $tag; ?> class="entry-title post-title">
		                        	<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		                        	<!--<?php $num_cm = get_comments_number( $post->ID ); if(comments_open() && $num_cm > 0) { ?>
										<a href="<?php the_permalink(); ?>/#comment" class="comment-count"><i class="fa fa-comment"></i><?php echo $num_cm ?></a>
									<?php } ?>-->
		                        </<?php echo $tag; ?>>
	                            <?php if($instance['more_excerpt']){ echo '<div class="excerpt">'; ht_content_limit(180); echo '</div>'; } ?>
	                            <?php if($instance['time']) { echo '<span class="time">('; the_time('g:i a, d/m/y'); echo ')</span>';}?>
		                    </article>
	                    <?php } ?>
	                    <?php $count++;
						endwhile; 
						if($count > 0) echo '</div>';}
					}
					wp_reset_query(); ?>
               </div>
               <?php if($how === 'timeline'){ ?>
               <style type="text/css">
               		#<?php echo $this->id; ?> > .content-news:before{
               			left: <?php echo ($w/2); ?>px;
               		}
               		#<?php echo $this->id; ?> .content-news .entry{
               			min-height: <?php echo $h; ?>;
               		}
               </style>  
               <?php } ?>                                      
<?php
		echo $after_widget;
		echo '<!-- end widget -->';
	}
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['type_tax'] = $new_instance['type_tax'];
		$instance['post_type'] = $new_instance['post_type'];
		$instance['show_if_meta'] = $new_instance['show_if_meta'];
		$instance['category'] = $new_instance['category']; //select category
		$instance['title_li'] = esc_attr($new_instance['title_li']); //title widget
		$instance['hm'] = esc_attr($new_instance['hm']); //height smaill thumb
		$instance['h'] = esc_attr($new_instance['h']); //height large thumb
		$instance['wm'] = esc_attr($new_instance['wm']); //width small thumb
		$instance['w'] = esc_attr($new_instance['w']); //width large thumb
		$instance['num'] = esc_attr($new_instance['num']); //number large post
		$instance['featured_excerpt'] = esc_attr($new_instance['featured_excerpt']); //character of description
		$instance['more'] = esc_attr($new_instance['more']); //number small post
		$instance['more_excerpt'] = esc_attr($new_instance['more_excerpt']); //character of description for small post
		$instance['how'] = esc_attr($new_instance['how']); //show type
		$instance['time'] = esc_attr($new_instance['time']); //show time
		$instance['col'] = esc_attr($new_instance['col']); //type col to show
		$instance['tag_title'] = esc_attr($new_instance['tag_title']); //tag html for title
		$instance['link_header'] = esc_attr($new_instance['link_header']); //link for title widget
		$instance['add_header'] = trim(trim(esc_attr($new_instance['add_header'])),"\n"); //add multi title
		$instance['show_more'] = esc_attr($new_instance['show_more']); //show more button
		$instance['orderby'] = esc_attr($new_instance['orderby']); //order by
		$instance['level'] = esc_attr($new_instance['level']); //level
		$instance['col_video'] = esc_attr($new_instance['col_video']); //column show of video
		$instance['show_if_meta'] = esc_attr($new_instance['show_if_meta']);
		$instance['border_content'] = esc_attr($new_instance['border_content']); //show more button
		return $instance;
	}
	function form( $instance ) {
		//Defaults
		$instance = wp_parse_args( (array) $instance, array( 
		'type_tax' => 'category',
		'post_type' => 'post',
		'show_if_meta' =>'',
		'category' => 0,
		'title_li' => '', 
		'hm' => '60px',
		'h' => '220px',
		'w' => '100%',
		'wm' => '20%',
		'num' => '1',
		'more' => '5',
		'how' => '',
		'time' => '',
		'col' => '',
		'featured_excerpt' => '',
		'more_excerpt' => '',
		'tag_title' => '',
		'link_header' => '',
		'add_header' => '',
		'show_more' => '',
		'orderby' => '',
		'level'=> '1',
		'col_video'=>'',
		'show_if_meta' =>'',
		'border_content' => '') );
		$title_li = esc_attr( $instance['title_li'] );
		$h = esc_attr( $instance['h'] );
		$hm = esc_attr( $instance['hm'] );
		$w = esc_attr( $instance['w'] );
		$wm = esc_attr( $instance['wm'] );
		$more = esc_attr( $instance['more'] );
		$num = esc_attr( $instance['num'] );
		$how = esc_attr( $instance['how'] );
		$col = esc_attr( $instance['col'] );
		$featured_excerpt = esc_attr( $instance['featured_excerpt'] );
		$more_excerpt = esc_attr( $instance['more_excerpt'] );
		$tag_title = esc_attr( $instance['tag_title'] );
		$link_header = esc_attr( $instance['link_header'] );
		$add_header = esc_attr($instance['add_header']);
		$show_more = esc_attr( $instance['show_more'] );
		$orderby = esc_attr( $instance['orderby'] );
		$level = esc_attr( $instance['level'] );
		$col_video = esc_attr( $instance['col_video'] );
		$type_tax = esc_attr( $instance['type_tax'] );
		$post_type = esc_attr( $instance['post_type'] );
		$show_if_meta = esc_attr( $instance['show_if_meta'] );
		if (!is_array($instance['category'])) $instance['category'] = array(0);
		//get data
		$post_types = get_post_types( '' , 'objects' );
		$taxonomies = get_taxonomies( '' , 'objects' );
	?>	
		<p>
			<label for="<?php echo $this->get_field_id('title_li'); ?>"><?php _e( 'Title:', 'fom' ); ?></label> <input type="text" value="<?php echo $title_li; ?>" name="<?php echo $this->get_field_name('title_li'); ?>" id="<?php echo $this->get_field_id('title_li'); ?>" class="widefat" />
			<br />
			<small><?php _e( 'Default: Recent Posts.', 'fom' ); ?></small>
		</p>
		<p style="float: left;margin-right: 5px;">
        	<label for="<?php echo $this->get_field_name('post_type') ?>"><?php _e( 'Select Post Type:', 'fom' ); ?></label>
            <select id="post_type_<?php echo $this->id; ?>" name="<?php echo $this->get_field_name('post_type') ?>">
				<?php
                    foreach($post_types as $custom_post_type=>$obj){
						if(!in_array($custom_post_type,array('attachment','revision','nav_menu_item','page'))){
							//$list_tax = get_object_taxonomies( $custom_post_type , 'names' );
							$selected = ($post_type == $custom_post_type)? 'selected="selected"':'';
							echo '<option value="'. $custom_post_type. '" '.$selected.'>'. $obj->labels->name. '</option>';
						}
                        
                    }
                ?>
            </select>
        </p>
        <p style="float: right;">
			<label for="<?php echo $this->get_field_name('type_tax') ?>"><?php _e( 'Select Type:', 'fom' ); ?></label>
            <select id="type_tax_<?php echo $this->id; ?>" name="<?php echo $this->get_field_name('type_tax') ?>">
            	<?php 
					foreach ($taxonomies as $taxonomy=>$obj ) {
						if(!in_array($taxonomy,array('post_tag','nav_menu','link_category','post_format'))){
							$selected = ($type_tax == $taxonomy)? 'selected="selected"':'';
							$class_selected = ($selected)? 'selected':'';
							echo '<option value="'. $taxonomy. '" class="'.$class_selected.' '.implode(' ',$obj->object_type).'" '.$selected.'>'. $obj->labels->name. '</option>';
						}
					}
				?>
            </select>
		</p>
        <div style="clear: both;"></div>
		<p>
			<label style="vertical-align: top;" for="<?php echo $this->get_field_id('category'); ?>"><?php _e( 'Select Category:', 'fom' ); ?></label>
			<select id="select_tax_<?php echo $this->id; ?>" multiple="multiple" style="width: 220px; height: 105px" name="<?php echo $this->get_field_name('category') ?>[]">
				 <option<?php if (is_array($categorys) && in_array(0, $categorys)) echo ' selected="selected" ' ?> value="0"><?php _e('All Categories', 'fom') ?></option>
			<?php
				foreach ($taxonomies as $taxonomy=>$obj ) {
					if(!in_array($taxonomy,array('post_tag','nav_menu','link_category','post_format')))
						echo get_list_product_cat(array('taxonomy' => $taxonomy, 'parent' => 0, 'array_current' => $instance['category']));
				}
				
			?>
			</select>
			<br />
			<small><?php _e( 'Hold down <strong>Ctrl</strong> key to select multiple categories.', 'fom'  ); ?></small>
		</p>
        <div class="block" style="overflow: hidden; margin-top: 5px;">
            <p class="title" style="font-weight: bold; margin-bottom: 5px;"><?php _e('Setting featured','fom'); ?></p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <label for="<?php echo $this->get_field_id('w'); ?>"><?php _e( 'Width of thumb:', 'fom' ); ?></label> 
                <input type="text" style="width: 50px;" value="<?php echo $w; ?>" name="<?php echo $this->get_field_name('w'); ?>" id="<?php echo $this->get_field_id('w'); ?>" class="widefat" />
            </p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <label for="<?php echo $this->get_field_id('h'); ?>"><?php _e( 'Height of thumb:', 'fom' ); ?></label> 
                <input type="text" style="width: 50px;" value="<?php echo $h; ?>" name="<?php echo $this->get_field_name('h'); ?>" id="<?php echo $this->get_field_id('h'); ?>" class="widefat" />
            </p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <label for="<?php echo $this->get_field_id('num'); ?>"><?php _e( 'Number to Display:', 'fom' ); ?></label> 
                <input type="text" style="width: 50px;" value="<?php echo $num; ?>" name="<?php echo $this->get_field_name('num'); ?>" id="<?php echo $this->get_field_id('num'); ?>" class="widefat" />
            </p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
            	<label for="<?php echo $this->get_field_id('featured_excerpt'); ?>"><?php _e( 'Character excerpt:', 'fom' ); ?></label>
            	<input type="text" style="width: 50px;" value="<?php echo $featured_excerpt; ?>" name="<?php echo $this->get_field_name('featured_excerpt'); ?>" id="<?php echo $this->get_field_id('featured_excerpt'); ?>" class="widefat" />
            </p>          
		</div>
        <div class="block" style="overflow: hidden; margin-top: 5px;">
            <p class="title" style="font-weight: bold; margin-bottom: 5px;"><?php _e('Setting more news','fom'); ?></p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <label for="<?php echo $this->get_field_id('wm'); ?>"><?php _e( 'Width of thumb:', 'fom' ); ?></label> 
                <input type="text" style="width: 50px;" value="<?php echo $wm; ?>" name="<?php echo $this->get_field_name('wm'); ?>" id="<?php echo $this->get_field_id('wm'); ?>" class="widefat" />
            </p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <label for="<?php echo $this->get_field_id('hm'); ?>"><?php _e( 'Height of thumb:', 'fom' ); ?></label> 
                <input type="text" style="width: 50px;" value="<?php echo $hm; ?>" name="<?php echo $this->get_field_name('hm'); ?>" id="<?php echo $this->get_field_id('hm'); ?>" class="widefat" />
            </p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <label for="<?php echo $this->get_field_id('more'); ?>"><?php _e( 'Number to Display:', 'fom' ); ?></label> <input type="text" style="width: 50px;" value="<?php echo $more; ?>" name="<?php echo $this->get_field_name('more'); ?>" id="<?php echo $this->get_field_id('more'); ?>" class="widefat" />
            </p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
            	<label for="<?php echo $this->get_field_id('more_excerpt'); ?>"><?php _e( 'Character excerpt:', 'fom' ); ?></label>
            	<input type="text" style="width: 50px;" value="<?php echo $more_excerpt; ?>" name="<?php echo $this->get_field_name('more_excerpt'); ?>" id="<?php echo $this->get_field_id('more_excerpt'); ?>" class="widefat" />
            </p>  
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <input type="checkbox" style="width: 20px;" name="<?php echo $this->get_field_name('time'); ?>" id="<?php echo $this->get_field_id('time'); ?>" <?php checked( (bool) $instance["time"], true ); ?> class="widefat" />
                <label for="<?php echo $this->get_field_id('time'); ?>"><?php _e( 'Show time?', 'fom' ); ?></label>            
            </p>
        </div>
        <div class="block" style="overflow: hidden; margin-top: 5px;">
            <p class="title" style="font-weight: bold; margin-bottom: 5px;"><?php _e('Setting general','fom'); ?></p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <label for="<?php echo $this->get_field_id('how'); ?>"><?php _e( 'Select type display:', 'fom' ); ?></label> 
                <select name="<?php echo $this->get_field_name('how'); ?>" id="<?php echo $this->get_field_id('how'); ?>" class="widefat">
                    <option value="large" <?php if($how == 'large') echo 'selected="selected"'; ?>><?php _e('Large Image','fom'); ?></option>
                    <option value="small" <?php if($how == 'small') echo 'selected="selected"'; ?>><?php _e('Small Image','fom'); ?></option>
                    <option value="video" <?php if($how == 'video') echo 'selected="selected"'; ?>><?php _e('Video','fom'); ?></option>
                    <option value="timeline" <?php if($how == 'timeline') echo 'selected="selected"'; ?>><?php _e('Timeline','fom'); ?></option>
					<option value="sidebar" <?php if($how == 'sidebar') echo 'selected="selected"'; ?>><?php _e('On Sidebar','fom'); ?></option>
					<option value="slider" <?php if($how == 'slider') echo 'selected="selected"'; ?>><?php _e('Slider','fom'); ?></option>
                </select>
            </p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <label for="<?php echo $this->get_field_id('col'); ?>"><?php _e( 'Width of Content:', 'fom' ); ?></label> 
                <select name="<?php echo $this->get_field_name('col'); ?>" id="<?php echo $this->get_field_id('col'); ?>" class="widefat">
                    <option value="full-width" <?php if($col == 'full-width') echo 'selected="selected"'; ?>><?php _e('Full width','fom'); ?></option>
                    <option value="col-2" <?php if($col == 'col-2') echo 'selected="selected"'; ?>><?php _e('Part Two','fom'); ?></option>
                    <option value="col-3" <?php if($col == 'col-3') echo 'selected="selected"'; ?>><?php _e('Part Three','fom'); ?></option>
                </select>
            </p>
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <label for="<?php echo $this->get_field_id('col_video'); ?>"><?php _e( 'Column of Video:', 'fom' ); ?></label> 
                <select name="<?php echo $this->get_field_name('col_video'); ?>" id="<?php echo $this->get_field_id('col_video'); ?>" class="widefat">
                    <option value="1" <?php if($col_video == '1') echo 'selected="selected"'; ?>><?php _e('Full width','fom'); ?></option>
                    <option value="2" <?php if($col_video == '2') echo 'selected="selected"'; ?>><?php _e('2 Column','fom'); ?></option>
                    <option value="3" <?php if($col_video == '3') echo 'selected="selected"'; ?>><?php _e('3 Column','fom'); ?></option>
                    <option value="4" <?php if($col_video == '4') echo 'selected="selected"'; ?>><?php _e('4 Column','fom'); ?></option>
                    <option value="5" <?php if($col_video == '5') echo 'selected="selected"'; ?>><?php _e('5 Column','fom'); ?></option>
                </select>
            </p>
			<div style="clear: both;"></div>
			<p style="clear:both; float: none">
                <label for="<?php echo $this->get_field_id('link_header'); ?>"><?php _e( 'Link for header:', 'fom' ); ?></label>
                <input id="<?php echo $this->get_field_id('link_header'); ?>" type="text" name="<?php echo $this->get_field_name('link_header') ?>" value="<?php echo $link_header; ?>" />
				<br />
				<small><?php _e('If set empty, link of first category choose above will be set for link header','fom'); ?></small>
            </p>
			<p style="clear:both; float: none">
                <label for="<?php echo $this->get_field_id('add_header'); ?>"><?php _e( 'Add header:', 'fom' ); ?></label>
                <textarea id="<?php echo $this->get_field_id('add_header'); ?>" name="<?php echo $this->get_field_name('add_header') ?>"><?php echo $add_header; ?></textarea>
            </p>
            <div style="clear: both;"></div>
			<p style="width: 48%; margin: 0 1%;  float: left;">
                <input type="checkbox" style="width: 20px;" name="<?php echo $this->get_field_name('show_more'); ?>" id="<?php echo $this->get_field_id('show_more'); ?>" <?php checked( (bool) $instance["show_more"], true ); ?> class="widefat" />
                <label for="<?php echo $this->get_field_id('show_more'); ?>"><?php _e('Hiển thị nút "xem thêm"','fom'); ?></label>
            </p>
            
            <p style="width: 48%; margin: 0 1%;  float: left;">
                <input type="checkbox" style="width: 20px;" name="<?php echo $this->get_field_name('border_content'); ?>" id="<?php echo $this->get_field_id('border_content'); ?>" <?php checked( (bool) $instance["border_content"], true ); ?> class="widefat" />
                <label for="<?php echo $this->get_field_id('border_content'); ?>"><?php _e( 'Add border?', 'fom' ); ?></label>            
            </p>
            <div style="clear: both;"></div>
            <p>
                <label for="<?php echo $this->get_field_id('tag_title'); ?>"><?php _e( 'Tag of title:', 'fom' ); ?></label>
                <input id="<?php echo $this->get_field_id('tag_title'); ?>"" type="text" name="<?php echo $this->get_field_name('tag_title') ?>" value="<?php echo $tag_title; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('show_if_meta'); ?>"><?php _e( 'Only show post with meta:', 'fom' ); ?></label>
                <input id="<?php echo $this->get_field_id('show_if_meta'); ?>"" type="text" name="<?php echo $this->get_field_name('show_if_meta') ?>" value="<?php echo $show_if_meta; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('orderby'); ?>"><?php _e( 'Order by:', 'fom' ); ?></label>
                <input id="<?php echo $this->get_field_id('orderby'); ?>"" type="text" name="<?php echo $this->get_field_name('orderby') ?>" value="<?php echo $orderby; ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('level'); ?>"><?php _e( 'Độ ưu tiên:', 'fom' ); ?></label>
                <select name="<?php echo $this->get_field_name('level'); ?>" id="<?php echo $this->get_field_id('level'); ?>" class="widefat">
                    <option value="0" <?php if($level == '0') echo 'selected="selected"'; ?>><?php _e('Cao','fom'); ?></option>
                    <option value="1" <?php if($level == '1') echo 'selected="selected"'; ?>><?php _e('Bình thường','fom'); ?></option>
                    <option value="2" <?php if($level == '2') echo 'selected="selected"'; ?>><?php _e('Thấp','fom'); ?></option>
                    
                </select>
            </p>
        </div>
        <script type="text/javascript">
			jQuery(document).ready(function($){
				//xu ly hien thi taxonomy theo post type
				$('select#type_tax_<?php echo $this->id; ?> option').css('display','none');
				$('select#type_tax_<?php echo $this->id; ?> option.'+$('select#post_type_<?php echo $this->id; ?>').val()).css('display','block');
				
				$('select#post_type_<?php echo $this->id; ?>').on('change',function(){
					$('select#type_tax_<?php echo $this->id; ?> option').css('display','none').removeClass('show').addClass('hide');
					$('select#type_tax_<?php echo $this->id; ?> option.'+$(this).val()).css('display','block').removeClass('hide').addClass('show');
					if($('select#type_tax_<?php echo $this->id; ?> option.show.selected').length == 0)
						$('select#type_tax_<?php echo $this->id; ?> option.show:first').prop('selected', true);
					else $('select#type_tax_<?php echo $this->id; ?> option.show.selected').prop('selected', true);
					
					//thay doi hien thi chuyen muc
					$('select#select_tax_<?php echo $this->id; ?> option').css('display','none');
					$('select#select_tax_<?php echo $this->id; ?> option.'+$('select#type_tax_<?php echo $this->id; ?>').val()).css('display','block');
				});
				//xu ly hien thi chuyen muc theo taxonomy
				$('select#select_tax_<?php echo $this->id; ?> option').css('display','none');
				$('select#select_tax_<?php echo $this->id; ?> option.'+$('select#type_tax_<?php echo $this->id; ?>').val()).css('display','block');
				$('select#type_tax_<?php echo $this->id; ?>').on('change',function(){
					$('select#select_tax_<?php echo $this->id; ?> option').css('display','none');
					$('select#select_tax_<?php echo $this->id; ?> option.'+$(this).val()).css('display','block');
				});		
				
				//xu ly hien thi thuoc tinh theo post types
				/*$('select#fields_show_<?php echo $this->id; ?> option').css('display','none');
				$('select#fields_show_<?php echo $this->id; ?> option.'+$('select#post_type_<?php echo $this->id; ?>').val()).css('display','block');
				$('select#post_type_<?php echo $this->id; ?>').on('change',function(){
					$('select#fields_show_<?php echo $this->id; ?> option').css('display','none');
					$('select#fields_show_<?php echo $this->id; ?> option.'+$(this).val()).css('display','block');
				});*/
			});
		</script>
<?php
	}
}
function shownews_home_init() {
	register_widget('shownews_home');
}
add_action('widgets_init', 'shownews_home_init');
?>