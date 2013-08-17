<?php 
/**
 * @pacge Memori Jingga
 * @Memori Jingga 0.1
 */
get_header(); ?>

<section id="wrapper">
	<section id="main">
		<section class="col">
			<section class="content">
				<div class="line"></div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class("homepage"); ?>>
			<section class="cl6">
				<aside class="box">
					<h2 class="posting"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'memorijingga' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<div class="line_post"></div>

						<section class="feature_image">
							<span class="entry-image">
								<?php if ( has_post_thumbnail() ) {the_post_thumbnail('');
} else { ?> <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="<?php the_title(); ?>"> 
							<?php } ?>
						</span>
						</section><!-- end feature_image-->

		<section class="cl8">
			<div class="exc"><?php the_excerpt(); ?></div>
		</section>

<section class="meta-post">
	<span class="entry-author">
<?php the_author_posts_link(); ?>
	</span>
<span class="entry-date">
<?php the_time('F jS, Y') ?> 
</span>
<?php if(has_category()): ?>
	<span class="entry-categori">
<?php the_category(' '); ?>
	</span>
<?php endif; ?>
<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?> 
<span class="entry-comments"><?php comments_popup_link( __( 'Leave a comment', 'memorijingga' ), __( '1 Comment', 'memorijingga' ), __( '% Comments', 'memorijingga' ) ); ?> 
</span>
<?php endif; ?>
<?php edit_post_link( __( 'Edit', 'memorijingga' ), '<span class="entry-link">', '</span>' ); ?>
</section><!-- end meta-post-->
<div class="bersih"></div>
				</aside>
			</section><!-- end cl6-->
		</article><!-- end #post-<?php the_ID(); ?>-->

<?php endwhile; else: ?>
<?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'memorijingga'); ?>
 <?php endif; ?>
<div class="line"></div>


	<section id="nav-under" class="navigasi">
	<div class="nav-next"><?php next_posts_link( __( '<span class="meta-nav">Next &rarr;</span>') ); ?></div>
		<div class="nav-previous"><?php previous_posts_link( __( '<span class="meta-nav">&larr; Previous</span>') ); ?></div>
	</section>

</section>
</section>

<section class="sidebar">
<?php get_sidebar('page'); ?>
</section>

</section><!-- end main-->
</section><!-- end wraper-->
<div class="bersih"></div>
<?php get_footer(); ?>