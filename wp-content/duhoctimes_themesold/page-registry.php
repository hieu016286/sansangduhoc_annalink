<?php 
/* Template Name: Page Registry */
//If the form is submitted
/*if(isset($_POST['submitted'])) {
	//Check to see if the honeypot captcha field was filled in
	$error = array();
	/*if(trim($_POST['captcha']) === '') 
	 {
	  	$error['captcha'] = __('Không được để trống Mã xác nhận.','ht');
	}
	else
	{
	  if($_POST['captcha'] != $_SESSION['security_code'])
		  {
		  $error['captcha'] = __('Mã xác nhận sai.','ht');
		  }
	 } */
	//Check to make sure that the name field is not empty
	/*if(trim($_POST['yourname']) === '') {
		$error['name'] = __('Không được để trống tên.','ht');
	} else {
		$name = trim($_POST['yourname']);
	}
	/*if(trim($_POST['age']) === '') {
		$error['age'] = __('Không được để trống tuổi.','ht');
	} 
	else if(!is_numeric($_POST['age']))
		{
			$error['age'] = __('Tuổi phải nhập số.','ht');
		}
		else		
			 {
			 	if(!($_POST['age']>0 && $_POST['age']<=100)){
			 		$error['age'] = __('Tuổi không đúng.','ht');
			 	}
			$age = trim($_POST['age']);
		}	
	if(trim($_POST['ad']) === '') {
		$error['ad'] = __('Không được để trống địa chỉ.','ht');
	} else {
		$ad = trim($_POST['ad']);
	}	*/	
	//Check to make sure sure that a valid email address is submitted
	/*	if(trim($_POST['tel']) === '') {
		$error['tel'] = __('Không được để trống điện thoại.','ht');
	} 
	else if(!preg_match("/[0-9]{10,11}/", trim($_POST['tel'])))
		{
			$error['tel'] = __('Điện thoại sai định dạng.','ht');
		}
	else		
		 {
		$tel = trim($_POST['tel']);
	}	
	if(trim($_POST['email']) === '')  {
		$error['email'] = __('Không được để trống email.','ht');
	} 
	else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) 
		{
			$error['email'] = __('Email sai định dạng.','ht');
		} 
		else 
		{
		$email = trim($_POST['email']);
		}	
	//Check to make sure that the subject field is not empty

	/*if(trim($_POST['job']) === '') {
		$error['job'] = __('Không được để trống nghề nghiệp.','ht');
	} else {
		$job = trim($_POST['job']);
	}*/
	//Check to make sure comments were entered	
	/*if(trim($_POST['comments']) === '') {
		$error['comments'] = __('Không được để trống Nội dung.','ht');
	} else {
		if(function_exists('stripslashes')){
			$comments = stripslashes(trim($_POST['comments']));
		}else{
			$comments = trim($_POST['comments']);
		}
	}
	
	//If there is no error, send the email
	if(empty($error)) {
		$mail = trim(of_get_option('ht_option_email'));
		$emailTo = empty($mail)? 'lehoanghonghoa@gmail.com':$mail;
		$subject = __('Yêu cầu từ ','ht').$name;
		$sendCopy = trim($_POST['sendCopy']);
		$body = '<html><body>';
		$body .= __('Từ: ','ht').$name . __(' ( Email: ','ht').$email .' ) <br />';
		/*$body .= (isset($_POST['age']))? __(' Tuổi: ','ht').esc_attr($_POST['age']).'<br />':'';
		$body .= (isset($_POST['ad']))? __(' Địa chỉ: ','ht').esc_attr($_POST['ad']).'<br />':''; */
	/*	$body .= (isset($_POST['tel']))? __(' Điện Thoại: ','ht').esc_attr($_POST['tel']).'<br />':'';
		//$body .= (isset($_POST['job']))? __(' Nghề nghiệp: ','ht').esc_attr($_POST['job']).'<br />':'';
		$body .= __(' Yêu Cầu: ','ht').$comments.'<br />';
		$body .= '</body></html>';
		$headers = __('From: ','ht').get_bloginfo('name').' <'.$emailTo.'>' . __('\r\n Reply-To: ','ht') . $email;
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

		$mainmail = wp_mail( $emailTo, $subject, $body, $headers);
		$submail = true;
		if($sendCopy == true) {
			$subject = __('Chào ','ht').$name.__('Cảm ơn bạn đã liên hệ với chúng tôi!','ht');
			$headers = __('From: ','ht').bloginfo('name').' <'.$emailTo.'>';
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
			$submail = wp_mail($email, $subject, $body, $headers);
		}

		if($mainmail && $submail) $emailSent = true; else $emailSent = false;
	}
} */
get_header(); ?>
<!--HEADER END-->  
   <div id="primary" class="content-area">
			<?php if(function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
					
					<?php if(have_comments() || comments_open()){ ?>
					<div id="comment" class="clear"></div> 
					<div class="cmt-facebook">
						
						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;s
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="685px" data-height="90px" data-numposts="10" data-colorscheme="light"></div>
					</div> 
					<div class="comments_template"><?php comments_template('',true); ?></div>
				<?php } ?>

			<?php endwhile; // end of the loop. ?>
			
        <?php 
           
			/*if(is_page('dang-ky-hoc-bong')){?>
				
				<div class="frmegistry level1" style="width: 30%; float:none;">
					<?php
					// echo '<h3 class="widget-title">'.'Đăng ký học bổng'.'</h3>';
	   				if(isset($emailSent) && $emailSent == true) { ?>
        
            <div class="thanks">
                <?php _e('Cảm ơn, ','ht');?><h3><?php echo $name;?></h3>
                <p><?php _e('Email đăng ký của bạn đã được gửi đi, chúng tôi sẽ phản hồi cho bạn trong thời gian sớm!','ht'); ?></p>
            </div>
        
        <?php } else { ?>
            <?php if(isset($error) && !empty($error) && is_array($error)) { 
                    echo '<ul class="error">';
                    foreach($error as $e){
                        echo '<li>'. $e .'</li>';
                    }
                    echo '</ul>';
                }?>
				<form method="post" action="<?php echo get_bloginfo('url').'/dang-ky-hoc-bong'; ?>"> 
					<div class="groupfrm">
                        <input id="name" name="yourname" type="text" placeholder="<?php _e('Họ & tên:','ht'); ?>">
                       <!-- <input id="ad" name="age" type="text" placeholder="<?php _e('Tuổi:','ht'); ?>">
                        <input id="ad" name="ad" type="text" placeholder="<?php _e('Địa chỉ:','ht'); ?>">
                        <input id="job" name="job" type="text" placeholder="<?php _e('Nghề nghiệp:','ht'); ?>">-->
                        <input id="tel" name="tel" type="text" placeholder="<?php _e('Số điện thoại:','ht'); ?>">
                        <input id="email" name="email" type="text" placeholder="<?php _e('Địa chỉ email:','ht'); ?>">
                    </div>
                    <div class="submit" style="text-align: center">
                    	<button  type="submit" id="sendsubmit" value="fav_HTML" name="submitted">Gửi</button>
              			<!--<button  type="reset" id="reset" value="fav_HTML">Hủy</button> -->
                    </div>
                    <div class="clear"></div>
                    <textarea id="comments" name="comments"><?php _e('Nội dung quan tâm:','ht'); ?></textarea>
                       
                       
                    
				</form>		
            <?php } ?>
					</div> 
			<?php }*/
        ?>
      
        <section class="spec-page">	
			        <ul class="tool">
			            <?php // wp_list_pages( array('child_of'=> $idprent, 'title_li' => '' ) );
			             $parents = get_post_ancestors( $post->ID );
			            $idprent = ($parents) ? $parents[count($parents)-1]: $post->ID;
			            $parent = get_page( $idprent );
						 	$mypages = get_pages( array( 'child_of' => $idprent,'hierarchical' => 1,'sort_column'=>'post_date') );
					foreach( $mypages as $page ) {		
							$content = $page->post_content;
							if ( ! $content ) // Check for empty page
								continue;
							$content = apply_filters( 'the_content', $content );
						 ?>
						 <li>
						 	<div class="thumb">
							 	<h4 class="title"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h4>
							 	<? $trimmed_content = wp_trim_words( $content,20);
							?>
								<div class="icon"></div>
								 <div class="entry"><?php echo $trimmed_content; ?></div>
							</div>
						 </li>
						 <?php
							}	
						?>
			        </ul>
   		</section>
    </div><!-- #primary -->
	<?php 
do_action( 'before_sidebar' ); ?>

<div id="sidebar" class="widget-area" role="complementary">
<?php get_sidebar(); ?>
<?php get_footer(); ?>
