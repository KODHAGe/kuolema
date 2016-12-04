<?php dynamic_sidebar('sidebar-primary'); ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Takaisin etusivulle</a>
<?php
$postlist = get_posts( 'orderby=menu_order&order=ASC&posts_per_page=-1' );
$posts = array();
foreach ( $postlist as $post ) {
   $posts[] += $post->ID;
}
$current = array_search( get_the_ID(), $posts );
if($current > 0){
  $prevID = $posts[$current-1];
}
if($current < count($posts) - 1){
  $nextID = $posts[$current+1];
}
?>

<div class="navigation">
<?php if ( !empty( $prevID ) ): ?>
<div class="">
<a href="<?php echo get_permalink( $prevID ); ?>"
  title=""> « <?php echo get_the_title( $prevID ); ?></a>
</div>
<?php endif;
if ( !empty( $nextID ) ): ?>
<div class="">
<a href="<?php echo get_permalink( $nextID ); ?>"
 title=""><?php echo get_the_title( $nextID ); ?> »</a>
</div>
<?php endif; ?>
</div><!-- .navigation -->
