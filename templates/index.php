<?php get_template_part('partials/page-header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('partials/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>
<?php echo do_shortcode('[ajax_load_more post_type="post" orderby="menu_order" order="ASC" transition_container="false" posts_per_page="10" scroll_distance="10" transition="fade" images_loaded="true" button_label="Lisää" button_loading_label="Ladataan"]'); ?>
<!--<?php the_posts_navigation(); ?>-->
