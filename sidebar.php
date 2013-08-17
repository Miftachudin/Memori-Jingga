<?php
/**
 * @package Memori Jingga
 * @Memori Jingga 0.1
 */
?>
<section class="sidebar">

<section class="dalem_side">
	<?php if (!dynamic_sidebar('Home1')) : ?>
  <h3><?php _e( 'Random Post', 'memorijingga' ); ?></h3>
   <ul><?php $rand_posts = get_posts('numberposts=7&orderby=rand'); foreach( $rand_posts as $post ) : ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endforeach; ?>
   </ul>
	<?php endif; ?>
<div class="bersih"></div>
<?php if (!dynamic_sidebar('Home2')) : ?>
<?php endif; ?>
<div class="bersih"></div>
<?php if (!dynamic_sidebar('Home3')) : ?>
 <?php get_search_form();?>
<?php endif; ?>
</section>

</section>