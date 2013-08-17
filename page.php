<?php 
/**
 * @package Memori Jingga
 * @Memori Jingga 0.1
 */
get_header(); ?>

<section id="wraper">
		<section class="cl8">
				<section class="bdr-right">
					<section class="singlepost">

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <h1 class="title-entry"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'memorijingga' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<?php the_content(); ?>
<div class="bersih"></div>

<?php endwhile; else: ?>
<?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'memorijingga'); ?>
<?php endif; ?>
					</article><!-- end #post-<?php the_ID(); ?>-->

				</section>
			</section>
		</section><!-- end cl8-->

<section class="cl4">
	<section class="admin">
		<section class="about_admin">
			<div class="info_admin">
				<?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?>
				<h5><?php _e( 'Author:', 'memorijingga' ); ?> <?php the_author_posts_link(); ?></h5>
				<p><?php the_author_meta('description'); ?></p>
			</div>
		</section>
	</section>
</section><!-- end cl4-->

<div class="bersih"></div>	

		<section class="jingga">
			<nav class="singlememori"><?php memorijingga_content_nav(); ?></nav>
		</section>


<footer id="footer">
	<section class="col">

		<section class="cl8">
			
				<section id="post_comments">
					<?php comments_template('', true); ?>	
				</section>
			
		</section>

		<section class="cl4">
			<section class="sidebar">
				<?php get_sidebar('single'); ?>
			</section>
		</section>
	</section><!-- end col-->

<div class="bersih"></div>		
</footer>
</section><!-- end wraper-->
<?php get_footer(); ?>