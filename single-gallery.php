<?php get_header(); ?>

    <!-- Content -->
    <!-- Content -->
    <div class="container">
      <div class="wrapper">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h2 class="page-title"><?php the_title(); ?></h2>

        <section class="gallery">

          <div class="gallerydescriptionbox">
            <?php the_content(); ?>
          </div>


            <?php $args = array(
              'post_type' => 'attachment',
              'numberposts' => -1,
              'post_status' => null,
              'order'				=> 'ASC',
              'orderby'			=> 'menu_order ID',
              'meta_query'		=> array(
                array(
                  'key'		=> '_ale_hide_from_gallery',
                  'value'		=> 0,
                  'type'		=> 'DECIMAL',
                ),
              ),
              'post_parent' => $post->ID
            );
            $attachments = get_posts( $args );?>
            <?php if ( $attachments ): ?>
              <ul class="gallery__items cf">
                <?php $count = 0; ?>
                <?php foreach ( $attachments as $attachment ): ?>
                  <?php setup_postdata($attachment); ?>
                  <li class="gallery__item">
                    <a class="gallery__link" href="<?php echo wp_get_attachment_image_url($attachment->ID, 'full'); ?>">
                    <?php if ( $count == 2 ): ?>
                      <?php echo wp_get_attachment_image( $attachment->ID, 'gallery-rect' ); ?>
                    <?php elseif ( $count == 7 ): ?>
                      <?php echo wp_get_attachment_image( $attachment->ID, 'gallery-big' ); ?>
                    <?php else: ?>
                      <?php echo wp_get_attachment_image( $attachment->ID, 'gallery-square' ); ?>
                    <?php endif; ?>


                    <div class="overlay">
                      <div class="overlay__arrow">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                      </div>
                    </div>

                    </a>
                  </li>
                  <?php $count += 1; ?>
                <?php endforeach; wp_reset_postdata(); ?>
              </ul>

            <?php endif; ?>

        </section>
      <?php endwhile;  endif;  ?>


      </div>

    </div>
<?php get_footer(); ?>
