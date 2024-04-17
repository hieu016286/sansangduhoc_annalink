  <?php 
//If the form is submitted
if(isset($_POST['submitted'])) {
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
	if(trim($_POST['yourname']) === '') {
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
		if(trim($_POST['tel']) === '') {
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
	if(trim($_POST['comments']) === '') {
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
		$body .= (isset($_POST['tel']))? __(' Điện Thoại: ','ht').esc_attr($_POST['tel']).'<br />':'';
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
} ?>
<?php get_header(); ?>
	<div class="content-top">
		<?php include('inc/home-featured.php'); ?>
		<?php include('inc/home-latest.php'); ?>
		<div class="group_adv2">
	        	<?php echo apply_filters('the_content', of_get_option('ht_option_adv_content1')); ?>
        </div>
	</div>
	<div id="primary" class="home-left-below-content">
		<div class="part">
			<div class="group_adv3">
		        	<?php echo apply_filters('the_content', of_get_option('ht_option_adv_content2')); ?>
	        </div>
			<?php if ( is_active_sidebar( 'sidebar-home-left-below' ) ) : ?>	        
	     		<?php dynamic_sidebar( 'sidebar-home-left-below' ); ?>	
			<?php endif; // end sidebar widget area ?>
		</div>
		<div class="part">
				
				<div class="part_left">
					<div class="level1">
					<?php
					echo '<h3 class="widget-title"><a class="more" href="'.get_category_link(9).'">'.get_cat_name(9).'</a></h3>';
	   				$query= new WP_Query("posts_per_page=-1&cat=9");
					if($query->have_posts()){
						echo '<div id="list-oval" class="flexslider syn" style=" margin-bottom: 0px; box-shadow: none;">'; 
						echo '<ul class="menu slides">';
						while($query->have_posts()){
							$query->the_post(); 
								echo '<li class="slide">';
									echo '<a href="'.get_permalink().'"><img class="image_oval" src="'.get_post_thumbnail_url($POST->ID).'" alt="'. get_the_title().'"/></a>';
									
									echo '<a class="thumb" href="'.get_permalink().'"><div class="title">'.get_the_title().'</div></a>';
						
								echo '</li>';
							
						}
						echo '</ul>';
						echo '</div>';
						
					}?>
					</div>
					<?php 
						$list_cat=array(18,10,17);
						
					?>
					<div class="group3mobi level1">
						<div class="title flexslider">
							<ul class="slides">
								<?php 
								foreach ($list_cat as $cat) {
									?>
									<li><a href="<?php echo get_category_link($cat); ?>"><?php echo get_cat_name($cat); ?></a></li>
									<?php
								}
								?>
								
							</ul>
						</div>
						<div class="tip flexslider">
							<ul class="slides">
								<?php 
								foreach ($list_cat as $cat) {
									?>
									<li>
										<div class="wap">
											<?php 
												$news= new WP_Query('cat='.$cat);
												if($news->have_posts()){
													while($news->have_posts()){
														$news->the_post();
														echo '<div class="post">';
															echo '<a href="'.get_the_permalink().'" class="thumb">';
															echo '<img  title="'.get_the_title().'" src="'.get_thumb($post_ID,'full').'"/>';
															echo '</a>';
															echo '<a class="title" href="'.get_the_permalink().'">';
															echo get_the_title();
															echo '</a>';
															echo '<p>'.wp_trim_words(get_the_excerpt(),20,'...').'</p>';
														echo '</div>';
													}
												}
											?>
										</div>
									</li>
									<?php
								}
								?>
								
							</ul>
						</div>
					</div>
					<div class="frmegistry level1">
					<?php
					echo '<h3 class="widget-title">'.'Đăng ký học bổng'.'</h3>';
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
				<form method="post" action="<?php echo get_bloginfo('url'); ?>"> 
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
		            <div class="group_adv3">
				        	<?php echo apply_filters('the_content', of_get_option('ht_option_adv_content3')); ?>
			        </div>
					</div>
					<?php if ( is_active_sidebar( 'center_left' ) ) : ?>	        
			     		<?php dynamic_sidebar( 'center_left' ); ?>	
					<?php endif; // end sidebar widget area ?>
				</div>
				<div class="part_right">
					<?php if ( is_active_sidebar( 'center_right' ) ) : ?>	        
			     		<?php dynamic_sidebar( 'center_right' ); ?>	
					<?php endif; // end sidebar widget area ?>
				</div>
			
		</div>
		<div class="part">
				<div class="part_left bottom">
					<?php if ( is_active_sidebar( 'bottom_left' ) ) : ?>	        
			     		<?php dynamic_sidebar( 'bottom_left' ); ?>	
					<?php endif; // end sidebar widget area ?>
				</div>
				<div class="part_right bottom">
					<div class="level1">
						<?php
						echo '<h3 class="widget-title">'.'Trắc nghiệm'.'</h3>';
						echo apply_filters('the_content', of_get_option('ht_option_adv_test'));
						?>
						<div class="starting">
							<a target="_blank" href="<?php echo of_get_option('ht_option_adv_testlink'); ?>" >
								Bắt đầu
							</a>
						</div>
					</div>
					<?php if ( is_active_sidebar( 'bottom_right' ) ) : ?>	        
			     		<?php dynamic_sidebar( 'bottom_right' ); ?>	
					<?php endif; // end sidebar widget area
					 ?>
				</div>
			
		</div>
	</div>
	<div id="sidebar" class="home-right-below-content">
		<?php 
		echo apply_filters('the_content', of_get_option('ht_option_adv_banner'));
		if ( is_active_sidebar( 'sidebar-home' ) ) : dynamic_sidebar( 'sidebar-home' ); 
     		endif; // end sidebar widget area
			?>
	</div>
	<div class="clear"></div>
	<div class="frmegistry2 level1" style="">
					<?php
					echo '<h3 class="widget-title"><a href="#">'.'Đăng ký học bổng'.'</a></h3>';
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
				<form method="post" action="<?php echo get_bloginfo('url'); ?>"> 
					<div class="groupfrm">
                        <input id="name" name="yourname" type="text" placeholder="<?php _e('Họ & tên:','ht'); ?>">
                       <!-- <input id="ad" name="age" type="text" placeholder="<?php _e('Tuổi:','ht'); ?>">
                        <input id="ad" name="ad" type="text" placeholder="<?php _e('Địa chỉ:','ht'); ?>">
                        <input id="job" name="job" type="text" placeholder="<?php _e('Nghề nghiệp:','ht'); ?>">-->
                        <input id="tel" name="tel" type="text" placeholder="<?php _e('Số điện thoại:','ht'); ?>">
                        <input id="email" name="email" type="text" placeholder="<?php _e('Địa chỉ email:','ht'); ?>">
                        <textarea id="comments" name="comments"><?php _e('Nội dung:','ht'); ?></textarea>
                    </div>
                    
                    
                     <div class="submit" style="text-align: center">
                    	<button  type="submit" id="sendsubmit" value="fav_HTML" name="submitted">Gửi</button>
                    	<button  type="reset" value="fav_HTML">Hủy</button>
                    	<a target="_blank" href="<?php echo of_get_option('ht_option_adv_testlink'); ?>" >
								Làm bài test
							</a>
              			<!--<button  type="reset" id="reset" value="fav_HTML">Hủy</button> -->
                    </div>  
                       
                    
				</form>		
            <?php } ?>
		            <div class="group_adv3">
				        	<?php echo apply_filters('the_content', of_get_option('ht_option_adv_content3')); ?>
			        </div>
					</div>
	<div class="clear"></div>
	<div id="third">
		<div class="level1">
					<?php
					echo '<h3 class="widget-title"><a class="more" href="'.get_category_link(30).'">'.get_cat_name(30).'</a></h3>';
	   				$query= new WP_Query("posts_per_page=-1&cat=30");
					if($query->have_posts()){
						echo '<div id="list-thirdleft" class="flexslider syn" style=" margin-bottom: 0px; box-shadow: none;">'; 
						echo '<ul class="menu slides">';
						while($query->have_posts()){
							$query->the_post(); 
								echo '<li class="slide">';
									echo '<div class="thumbwap">';
										echo '<a href="'.get_permalink().'"><img class="image_oval" src="'.get_post_thumbnail_url($POST->ID).'" alt="'. get_the_title().'"/></a>';
										echo '<a class="thumb" href="'.get_permalink().'"><div class="readmore hvr-shutter-in-vertical">Xem tiếp</div></a>';
									echo '</div>';
									echo '<div class="title"><a href="'.get_permalink().'"><span>'.get_the_title().'</span></a></div>';
								echo '</li>';
							
						}
						echo '</ul>';
						echo '</div>';
						
					}?>
		</div>
		<div class="level1">
					<?php
					echo '<h3 class="widget-title"><a class="more" href="'.get_category_link(31).'">'.get_cat_name(31).'</a></h3>';
	   				$query= new WP_Query("posts_per_page=-1&cat=31");
					if($query->have_posts()){
						echo '<div id="list-thirdright" class="flexslider syn" style=" margin-bottom: 0px; box-shadow: none;">'; 
						echo '<ul class="menu slides">';
						while($query->have_posts()){
							$query->the_post(); 
								echo '<li class="slide">';
									echo '<div class="thumbwap">';
										echo '<a href="'.get_permalink().'"><img class="image_oval" src="'.get_post_thumbnail_url($POST->ID).'" alt="'. get_the_title().'"/></a>';
										echo '<a class="thumb" href="'.get_permalink().'"><div class="readmore hvr-shutter-in-vertical">Xem tiếp</div></a>';
									echo '</div>';
									echo '<div class="title"><a href="'.get_permalink().'"><span>'.get_the_title().'</span></a></div>';
								echo '</li>';
							
						}
						echo '</ul>';
						echo '</div>';
						
					}?>
		</div>
	</div>
	<!-- <section class="page-feel">
	     	 	<div class="ht-news fix-width">
	     	 			<h3 class="widget-title"><span class="name"><a href="<?php echo  get_post_type_archive_link('feel')?>">
	     	 				<?php
	     	 					$obj = get_post_type_object( 'feel' );
								echo $obj->labels->singular_name;
	     	 				?>
	     	 			</span></h3>
	     	 			
	     	 			<div class="flex-container">
			                <div id="list-feel" class="flexslider" style=" margin-bottom: 0px; box-shadow: none;">
			                	<ul class="content slides">
				    	<?php  
				    		$feel=new WP_query('post_type=feel&posts_per_page=-1');
							if($feel->have_posts()):while($feel->have_posts()):$feel->the_post();							
				    	?>
				    		<li class="slide">
				    			<div class="thumb"><img src="<?php echo get_post_thumbnail_url($post->ID); ?>"></div>
				    			<div class="group">
					    			<h4><a href="<?php echo get_permalink(); ?>"><?php echo the_title();?></a></h4>
					    			<?php
					    			echo '<span>';
									if(get_post_meta($post->ID,'ht_feel_result',true))
											$result = get_post_meta($post->ID, 'ht_feel_result', true);
									else $result='';
									echo $result.'</span>';
									
					    			?>
				    			</div>
				    			<?php
				    			echo '<p class="programme-text">';
									$content = get_the_content();
									$trimmed_content = wp_trim_words( $content, 20);
									echo $trimmed_content;
								echo '</p>';
								?>
				    		</li>
			            	 <?php endwhile; endif; wp_reset_postdata(); ?>
			                </ul>
			                </div>
			        </div>
	     	 	</div>
	     	 </section>-->
<?php get_footer(); ?>