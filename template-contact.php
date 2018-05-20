<?php
/**
 * Template Name: Template Contact
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
    <!-- Content -->
		<div class="container contact">
			<div class="wrapper">

				<h2 class="page-title"><?php the_title(); ?></h2>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="page-content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; endif; ?>

				<div class="contacts-meta">
					<div class="contacts-meta__column contacts-meta__column--phone">
						<span><i class="fa fa-phone" aria-hidden="true"></i> <?php echo ale_get_meta('phone_label'); ?></span>
						<p><?php echo ale_get_meta('phone_number'); ?></p>
					</div>
					<div class="contacts-meta__column contacts-meta__column--address">
						<span><i class="fa fa-globe" aria-hidden="true"></i> <?php echo ale_get_meta('address_label'); ?></span>
						<p><?php echo ale_get_meta('address'); ?></p>
					</div>
					<div class="contacts-meta__column contacts-meta__column--email">
						<span><i class="fa fa-at" aria-hidden="true"></i> <?php echo ale_get_meta('email_label'); ?></span>
						<p><a href="mailto:<?php echo ale_get_meta('email'); ?>"><?php echo ale_get_meta('email'); ?></a></p>
					</div>
				</div>

				<form method="post" action="<?php the_permalink();?>">
						<?php if (isset($_GET['success'])) : ?>
								<p class="success"><?php _e('Thank you for your message!', 'aletheme')?></p>
						<?php endif; ?>
						<?php if (isset($error) && isset($error['msg'])) : ?>
								<p class="error"><?php echo $error['msg']?></p>
						<?php endif; ?>

						<div class="form">
								<input name="contact[name]" type="text" placeholder="Your Name (required)" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
								<input name="contact[email]" type="email" placeholder="Email (required)" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
								<input name="contact[phone]" type="text" placeholder="Phone (required)" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" required="required" id="contact-form-phone" />
								<input name="contact[genre]" type="text" placeholder="Genre (required)" value="<?php echo isset($_POST['contact']['genre']) ? $_POST['contact']['genre'] : ''?>" required="required" id="contact-form-genre" />

								<textarea name="contact[message]"  placeholder="Your Message (required)"id="contact-form-message" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
								<input type="submit" class="submit" value="<?php _e('Submit', 'aletheme')?>"/>
						</div>
						<?php wp_nonce_field() ?>
				</form>

			</div>
		</div>

<?php get_footer(); ?>
