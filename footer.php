    <!-- Footer -->
    <footer class="main-footer">
      <div class="main-footer__top">
        <div class="wrapper">

          <div class="logo"><!-- begin main-footer__logo -->
            <?php if (ale_get_option('sitelogofooter')): ?>
              <a href="<?php echo home_url( '/' ); ?>">
                <img src="<?php echo ale_get_option('sitelogofooter'); ?>" alt="">
              </a>
            <?php endif; ?>
          </div><!-- end main-footer__logo -->

          <div class="info-menu"><!-- begin info-menu -->
            <h5><?php _e('Information', 'igl')?></h5>
            <?php
            if ( has_nav_menu( 'footer_menu' ) ) {
                wp_nav_menu(array(
                    'theme_location'=> 'footer_menu',
                    'menu'			=> 'Footer Menu',
                    'menu_class'	=> 'footermenu cf',
                    'walker'		=> new Aletheme_Nav_Walker(),
                    'container'		=> '',
                ));
            }
            ?>
          </div><!-- end info-menu -->

          <div class="contacts"><!-- begin contacts -->
            <h5><?php _e('Contacts', 'igl')?></h5>

            <?php if (ale_get_option('footer_phone')): ?>
              <div class="footer_phone">
                <?php echo ale_get_option('footer_phone'); ?>
              </div>
            <?php endif; ?>

            <?php if (ale_get_option('footer_address')): ?>
              <div class="footer_address">
                <?php echo ale_get_option('footer_address'); ?>
              </div>
            <?php endif; ?>

            <?php if (ale_get_option('footer_mail')): ?>
              <div class="footer_mail">
                <a href="mailto:<?php echo ale_get_option('footer_mail'); ?>"><?php echo ale_get_option('footer_mail'); ?></a>
              </div>
            <?php endif; ?>
          </div><!-- end contacts -->

          <div class="twitter"><!-- begin twitter -->
            <?php get_sidebar( 'footer' ) ?>
          </div><!-- end twitter -->

        </div>
      </div>

      <div class="main-footer__bottom">
        <div class="wrapper">
          <div class="copyright"><!-- begin copyright -->
            <!-- Copy -->
            <?php if (ale_get_option('copyrights')) : ?>
              <p class="right"><?php echo ale_option('copyrights'); ?></p>
            <?php else: ?>
              <p class="right">&copy; <?php _e('2018 ALL RIGHTS RESERVED', 'igl')?></p>
            <?php endif; ?>
          </div><!-- end copyright -->

          <div class="social"><!-- begin social -->

            <!-- Social -->
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

          </div><!-- end social -->

        </div>


      </div>
    </footer>




    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>
