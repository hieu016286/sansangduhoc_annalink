<?php
/*
Template Name: Upload
*/
?>
<?php
if( 'POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['newpost']) && !empty( $_POST['newpost'] ) ) {
	$error = array();
	// Do some minor form validation to make sure there is content
	if(!isset( $_POST['new_vigilance_nonce']) || !wp_verify_nonce( $_POST['new_vigilance_nonce'], 'new_vigilance' )){
		$error[] = __('We suspect sending your article is not valid with the regulations of the website, please contact the administrator if you are sure that you are submitting articles for eligibility.','fom');
	} else {			
		$post_status = '';
		if(current_user_can('publish_posts')) $post_status = 'publish';
		elseif(current_user_can('edit_posts')) $post_status = 'pending';
		else{
			$post_status = 'pending';
			if (!empty($_POST['your-name'])) {
				$name = $_POST['your-name'];
			} else {
				$error[] .= __('You must enter your name!','fom');
			}
			
			if (!empty($_POST['your-email'])) {
				$email = $_POST['your-email'];
				if ( !is_email($email , true) )
					$error['user_email'] = __('You must enter a valid email address.', 'fom');
				elseif ( email_exists($_POST['email']) )
					$error['user_email'] = sprintf(__('Sorry, that email address is already used! If it that you, please <a href="%s" title="Sign in">sign in at here</a>', 'fom'),'abc');
				else{
					$user_pass = wp_generate_password();
					$userdata = array(
						'user_pass' => $user_pass,
						'user_login' => sanitize_user( $email ),
						'last_name' => esc_sql( $name ),
						'user_email' => esc_sql( $email ),
						'role' => get_option( 'default_role' )
					);
					
					$new_user = wp_insert_user( $userdata );
					if($new_user){
						if(is_wp_error($new_user)){
							$error['user_exists'] = __('User login or email already exists! Please choose another email!','fom');
						} else
							wp_new_user_notification($new_user, $user_pass);
					} else $error['create_user'] = __('Sorry, have a problem when create user, please contact administrator to solve this problem!', 'fom');
				}
			} else {
				$error[] .= __('You must enter your email!','fom');
			}
			//$error[] = __('You can not create a new post!','fom');
		}
		if (isset($post_status) && !empty($post_status) && empty($error)){
			if (!empty($_POST['title'])) {
				$title = $_POST['title'];
			} else {
				$error[] .= __('Title can\'t be empty!','fom');
			}
			// IMAGE VALIDATION - CHECK IF THERE IS AN IMAGE AND THAT ITS THE RIGHT FILE TYPE AND RIGHT SIZE
			if ($_FILES && !empty($_FILE)) {
				foreach ($_FILES as $file => $array) {
					if(isset($_FILES[$file]) && ($_FILES[$file]['size'] > 0) && ($_FILES[$file]['size'] < 1050000)) {
						$tmpName = $_FILES[$file]['tmp_name'];
						// Get the type of the uploaded file. This is returned as "type/extension"
		            	$arr_file_type = wp_check_filetype(basename($_FILES[$file]['name']));
		            	$uploaded_file_type = $arr_file_type['type'];
		            	// Set an array containing a list of acceptable formats
		            	$allowed_file_types = array('image/png','image/jpeg','image/gif');
		             	// If the uploaded file is the right format
		                if(!in_array($uploaded_file_type, $allowed_file_types)) {
		   	 				$error[] .= __('You just can\'t upload image with types: .png, .jpg, jpeg and .gif','fom');
		                }
					} else $error[] = __('You just can\'t upload file with maximum size 1Mb','fom');
				} // end for each
			} // end if
			if (!empty($_POST['post-content'])) {
				$postcontent = $_POST['post-content'];
			} else {
				$error[] .= __('Content can\'t be empty!','fom');
			}
			$list_category = get_all_category_ids();
			if(!isset($_POST['post-category']) && is_numeric($_POST['post-category']) || !in_array($_POST['post-category'],$list_category))
				$error[] = __('Invalid value category','fom');
			else $postcategory = $_POST['post-category'];
			// ADD THE FORM INPUT TO $new_post ARRAY
			if (empty($error)) {
				$new_post = array(
					'post_title'	=>	$title,
					'post_content'	=>	$postcontent,
					'post_category'	=>	array($postcategory),  // Usable for custom taxonomies too
					'post_status'	=>	$post_status,           // Choose: publish, preview, future, draft, etc.
					'post_type'	=>	'post',  //'post',page' or use a custom post type if you want to
				);
				if(isset($new_user) && $new_user) $new_post['post_author'] = $new_user;
				//SAVE THE POST
				$pid = wp_insert_post($new_post);
				if ($_FILES && !empty($_FILE) && $pid) {
					// Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
					require_once(ABSPATH . "admin-fom/includes/image.php");
					require_once(ABSPATH . "admin-fom/includes/file.php");
					require_once(ABSPATH . "admin-fom/includes/media.php");		
					$attachment_id = media_handle_upload( 'postthumb', $pid );
					if(!isset($attachment_id['error'])) {
						//update_post_meta($pid, $key, wp_get_attachment_url( $attachment_id ));
						set_post_thumbnail( $pid, $attachment_id );			
					}			
				}
				
				$link = get_permalink( $pid );
				if($post_status == 'publish'){
					wp_redirect( $link );
				} else {
					$mes[] = sprintf(__('- Thank you for vigilance, we will review and publish your vigilance in soon time.','fom'));
					if(isset($new_user) && $new_user){
						$mes[] = sprintf(__('- We had created a account for you and send detail information of this account to your email: %s. Next time, you can sign in with this account!','fom'),esc_sql( $email ));
					}
					$mes[] = sprintf(__('<a href="%s" title="Go to home">Click here</a> to return home page!','fom'),get_bloginfo('url'));
					$hide_form = true;
				}
			} //check error 2
		} //check error 1
		elseif(empty($error)) {
			$error[] = __('Sorry, have a problem while process your request. Please try again, if this problem continues, contact with administrator!');
		}
	} //check nonce
}//check submit
do_action('wp_insert_post', 'wp_insert_post'); 
?>
<?php get_header(); ?>
<div id="primary" class="content-area">  
    <div id="content" class="site-content" role="main">
		<?php if(function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    	<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
			<?php		
			if(isset($error) && !empty($error) && is_array($error)){
				echo '<ul class="error">';
				foreach($error as $e)
					echo '<li>'.$e.'</li>';
				echo '</ul>';
			}
			if(isset($mes) && !empty($mes) && is_array($mes)){
				echo '<ul class="message">';
				foreach($mes as $m)
					echo '<li>'.$m.'</li>';
				echo '</ul>';
			}
			if(!isset($hide_form)){
				?>
				<?php
					require_once(ABSPATH.'admin-fom/includes/template.php');
				?>
				<form action="" method="post"enctype="multipart/form-data" class="publish-post">
					<?php
						if(!is_user_logged_in()){
							?>
							<div class="section">
								<h3 class="title"><?php _e('Authenticate','fom'); ?></h3>
								<p class="des">
									<?php printf(__('Please enter your name and your email into input below, if you had a account, you can <a href="%s" title="Login">sign in here</a>.','fom'),'abc'); ?><br />
									<?php printf(__('To be able to enjoy the benefits and incentives for members when you send post, you should <a href="%s" title="Sign Up">sign up here</a>.','fom'),'abc'); ?>
								</p>
								<p>
									<label for="your-name"><?php _e('Your Name','fom'); ?></label>
									<input type="text" id="your-name" name="your-name" />
								</p>
								<p>
									<label for="your-email"><?php _e('Your Email','fom'); ?></label>
									<input type="text" id="your-email" name="your-email" />
								</p>
							</div>
							<?php
						}
					?>
					<div class="section">
						<h3 class="title"><?php _e('New Vigilance','fom'); ?></h3>
						<p>
							<label for="post-title"><?php _e('Title','fom'); ?></label>
							<input type="text" id="post-title" name="title" />
						</p>
						<p>
							<label for="postthumb"><?php _e('Thumbnail','fom'); ?></label>
						    <input type="file" name="postthumb" id="postthumb" multiple="false"/><br />
							<span class="des"><?php _e('Allow types: .png, .jpg, .jpeg, .gif','fom'); ?></span>		    
					    </p>
					    <p>
							<label for="video-url"><?php _e('Video URL','fom'); ?></label>
							<input type="text" id="video-url" name="video-url" />
						</p>
					    <label for="post-content"><?php _e('Content','fom'); ?></label>
						<?php
							wp_editor( '', 'post-content', array(
											'media_buttons' => true,
										)); ?>
						<br />
						<p>
						<label for="post-category"><?php _e('Select Category:','fom'); ?></label>
						<?php
							$args = array(
								'show_option_all'    => '',
								'show_option_none'   => '',
								'orderby'            => 'ID', 
								'order'              => 'ASC',
								'show_count'         => 0,
								'hide_empty'         => 0, 
								'child_of'           => 0,
								'exclude'            => '',
								'echo'               => 1,
								'selected'           => 0,
								'hierarchical'       => 1, 
								'name'               => 'post-category',
								'id'                 => 'post-category',
								'class'              => 'postform',
								'depth'              => 0,
								'tab_index'          => 0,
								'taxonomy'           => 'category',
								'hide_if_empty'      => false,
							);
							wp_dropdown_categories( $args );
						?>
						</p>
					</div>
					<?php wp_nonce_field( 'new_vigilance', 'new_vigilance_nonce' ); ?>	
					<input type="submit" name="newpost" value="<?php _e('Send','fom'); ?>" />
				</form>
			<?php 
			} //end hide form
		endwhile; // end of the loop. ?>
	</div><!-- #content -->
</div><!-- #primary -->
        
<?php get_sidebar(); ?>
<?php get_footer(); ?>