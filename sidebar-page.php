<?php
/**
 * @package Memori Jingga
 * @Memori Jingga 0.1
 */
?>

<section class="dalem_side">

<section class="cl4">
  <?php if (!dynamic_sidebar('Footer1')) : ?>
   <?php get_search_form();?>
  <?php endif; ?>
</section>

<section class="cl4">
 <?php if (!dynamic_sidebar('Footer2')) : ?>
  <h3><?php _e( 'Recent Posts', 'memorijingga' ); ?></h3>
   <ul>
    <?php query_posts('showposts=5'); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink() ?>"><?php the_title() ?> </a>
    <?php endwhile; endif; ?>
   </ul>
 <?php endif; ?>
</section>

<section class="cl4">
 <?php if (!dynamic_sidebar('Footer3')) : ?>
  <h3><?php _e( 'Popular Posts', 'memorijingga' ); ?></h3>
   <ul><?php query_posts('orderby=comment_count&posts_per_page=5'); if (have_posts()) : while (have_posts()) : the_post();?>
     <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
   <?php endwhile; endif; wp_reset_query(); ?>
   </ul>
 <?php endif; ?>
</section>

</section><!-- dalem_side -->
<div class="bersih"></div>