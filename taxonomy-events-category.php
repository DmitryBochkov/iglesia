<?php get_header(); ?>
<?php $term_title = single_term_title('', false); ?>

  <!-- Content -->
  <div class="container igl-events-page">
    <h2 class="page-title"><?php _e( 'Events', 'igl' ) ?></h2>

    <div class="events__cats">
      <?php $cat_terms = get_terms( 'events-category' ); ?>
        <ul class="tax-list wrapper">
          <?php foreach ($cat_terms as $cat_term): ?>
          <li class="tax-list__item">
            <a class="<?php echo $term_title == $cat_term->name ? 'active' : ''; ?> tax-list__link" href=" <?php echo get_term_link( $cat_term ); ?>"><?php echo $cat_term->name; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
    </div>

    <div class="wrapper">

      <div class="events__list cf">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


          <article class="events__item">
            <a href="<?php the_permalink(); ?>">
              <h3><?php the_title(); ?></h3>
              <span class="post_date"><?php echo get_the_date(); ?></span>
            </a>
          </article>

        <?php endwhile; endif; ?>
      </div>

      <?php global $wp_query;
      if ($wp_query->max_num_pages > 1): ?>
        <div class="pagination">
          <div class="left-arrow">
            <?php if ( get_previous_posts_link() ): ?>
              <?php echo get_previous_posts_link('<i class="fa fa-angle-left"></i>'); ?>
            <?php else: ?>
              <i class="fa fa-angle-left"></i>
            <?php endif; ?>
          </div>

          <div class="paginate-items">
            <?php ale_page_links(); ?>
          </div>

          <div class="left-arrow">
            <?php if ( get_next_posts_link() ): ?>
              <?php echo get_next_posts_link('<i class="fa fa-angle-right"></i>'); ?>
            <?php else: ?>
              <i class="fa fa-angle-right"></i>
            <?php endif; ?>
          </div>

        </div>
      <?php endif; ?>

    </div>

  </div>

<?php get_footer(); ?>
