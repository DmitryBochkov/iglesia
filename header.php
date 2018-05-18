<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

	<header class="top-header">
		<div class="wrapper">
			<div class="header-column search menu-btn">
				<div class="menu-btn__box">
					<i class="fa fa-bars" aria-hidden="true"></i>
					<i class="fa fa-times" aria-hidden="true" style="display: none;"></i>
				</div>
				<div class="search__box">
					<?php echo get_search_form(); ?>
				</div>
			</div>

			<div class="header-column logo">
				<a href="<?php home_url( '/' ); ?>">
					<img src="<?php echo ale_get_option('sitelogo'); ?>" alt="">
				</a>
			</div>

			<div class="header-column social">
				<?php if (ale_get_option('vm')): ?>
					<a href="<?php echo ale_get_option('vm'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
				<?php endif; ?>
				<?php if (ale_get_option('insta')): ?>
					<a href="<?php echo ale_get_option('insta'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<?php endif; ?>
				<?php if (ale_get_option('twi')): ?>
					<a href="<?php echo ale_get_option('twi'); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
				<?php endif; ?>
				<?php if (ale_get_option('fb')): ?>
					<a href="<?php echo ale_get_option('fb'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				<?php endif; ?>
			</div>
		</div>

		<nav class="top-nav">
			<div class="wrapper">
				<?php if (has_nav_menu( 'header_menu' )): ?>
					<?php wp_nav_menu( array(
						'theme_location' => 'header_menu',
						'menu'			=> 'Header Menu',
						'menu_class'	=> 'headermenu',
						'walker'		=> new Aletheme_Nav_Walker(),
						'container'		=> '',
					)); ?>
				<?php endif; ?>

				<div class="donate">
					<a href="<?php //echo ale_get_option('donate_link'); ?>"><?php _e( 'Donate', 'igl' ); ?></a>
				</div>
			</div>
		</nav>
	</header>
