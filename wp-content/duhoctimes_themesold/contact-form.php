<?php
/*
Template Name: Contact Form
*/
?>


<?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['contactName']) === '') {
			$nameError = __('You forgot to enter your name.','fom');
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = __('You forgot to enter your email address.','fom');
			$hasError = true;
		} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
			$emailError = __('You entered an invalid email address.','fom');
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['subject']) === '')  {
			$subjectError = __('You forgot to enter Subject.','fom');
			$hasError = true;
		} else {
			$subject = trim($_POST['subject']);
		}
		
		//Check to make sure comments were entered	
		if(trim($_POST['comments']) === '') {
			$commentError = __('You forgot to enter your comments.','fom');
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
			
		//If there is no error, send the email
		if(!isset($hasError)) {
			$mail = trim(get_option('fom_email'));
			$emailTo = empty($mail)? 'it@fom.vn':$mail;
			$subject = $subject.__(' from ','fom').$name;
			$sendCopy = trim($_POST['sendCopy']);
			$body = '<html><body>';
			$body .= __('From: ','fom').$name . __(' ( Email: ','fom').$email .' ) <br />';
			$body .= __(' Comments: ','fom').$comments.'<br />';
			$body .= '</body></html>';
			$headers = __('From: ','fom').bloginfo('name').__(' <','fom').$emailTo.__('>','fom') . __('\r\n Reply-To: ','fom') . $email;
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

			$mainmail = wp_mail( $emailTo, $subject, $body, $headers);
			$submail = true;
			if($sendCopy == true) {
				$subject = __('Hi ','fom').$name.__('Thank you for sending us mail!','fom');
				$headers = __('From: ','fom').bloginfo('name').__(' <','fom').$emailTo.__('>','fom');
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
				$submail = wp_mail($email, $subject, $body, $headers);
			}

			if($mainmail && $subject) $emailSent = true; else $emailSent = false;
		}
	}
} ?>


<?php get_header(); ?>
	
		<div id="content" class="page">
<?php function add_jquery_check(){ ?>
	$('form#contactForm').submit(function() {
		$('form#contactForm .error').remove();
		var hasError = false;
		$('.requiredField').each(function() {
			if(jQuery.trim($(this).val()) == '') {
				var labelText = $(this).prev('label').text();
				$(this).parent().append('<span class="error"><?php _e('You forgot to enter ','fom'); ?>'+labelText+'.</span>');
				hasError = true;
			} else if($(this).hasClass('email')) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test(jQuery.trim($(this).val()))) {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error"><?php _e('You entered an invalid ','fom'); ?>'+labelText+'.</span>');
					hasError = true;
				}
			}
		});
		if(!hasError) {
			$('form#contactForm div.buttons button').fadeOut('normal', function() {
				$(this).parent().append('<img src="<?php bloginfo('template_url'); ?>/images/loading.gif" alt="Loading&hellip;" height="31" width="31" />');
			});
			var formInput = $(this).serialize();
			$.post($(this).attr('action'),formInput, function(data){
				$('form#contactForm').slideUp("fast", function() {				   
					$(this).before('<?php _e('<p class="thanks"><strong>Thanks!</strong> Your email was successfully sent. I check my email all the time, so I should be in touch soon.</p>','fom'); ?>');
				});
			});
		}
		
		return false;
		
	});
<?php }
add_action( 'fom_jquery_footer' , 'add_jquery_check', 10);
 ?>
<?php 
	if(isset($emailSent) && $emailSent == false){
		echo 'Loi khi gui';
	}
?>
<?php if(isset($emailSent) && $emailSent == true) { ?>

	<div class="thanks">
		<h1><?php _e('Thanks, ','fom'); echo $name;?></h1>
		<p><?php _e('Your email was successfully sent. I will be in touch soon.','fom'); ?></p>
	</div>

<?php } else { ?>

	<?php if (have_posts()) : ?>
	
	<?php while (have_posts()) : the_post(); ?>
		<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
        	<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
			<?php the_content(); ?>
		
				<?php if(isset($hasError) || isset($captchaError)) { ?>
					<p class="error"><?php _e('There was an error submitting the form.','fom'); ?><p>
				<?php } ?>
			
				<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
			
					<div class="forms">
						<div class="row information"><label for="contactName"><?php _e('Name','fom'); ?></label>
							<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />
							<?php if(isset($nameError)) { ?>
								<span class="error"><?=$nameError;?></span> 
							<?php } ?>
						</div>
						
						<div class="row information"><label for="email"><?php _e('Email','fom'); ?></label>
							<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
							<?php if(isset($emailError)) { ?>
								<span class="error"><?=$emailError;?></span>
							<?php } ?>
						</div>
						<div class="row information"><label for="contactName"><?php _e('Subject','fom'); ?></label>
							<input type="text" name="subject" id="subject" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>" class="requiredField" />
							<?php if(isset($subjectError)) { ?>
								<span class="error"><?=$subjectError;?></span> 
							<?php } ?>
						</div>
						<div class="row information textarea"><label for="commentsText"><?php _e('Comments','fom'); ?></label>
							<textarea name="comments" id="commentsText" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
							<?php if(isset($commentError)) { ?>
								<span class="error"><?=$commentError;?></span> 
							<?php } ?>
						</div>
						<div class="inline"><input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> /><label for="sendCopy"><?php _e('Send a copy of this email to yourself','fom'); ?></label></div>
						<div class="buttons"><input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit"><?php _e('Send &raquo;','fom'); ?></button></div>
					</div>
				</form>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
<?php } ?>
		</div>

		<?php get_sidebar(); ?>
<?php get_footer(); ?>