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
<header>
 <h3 class="hasil">
    <?php if ( is_category() ) {
          printf( __( 'Category Archives: %s', 'memorijingga' ), '<span>' . single_cat_title( '', false ) . '</span>' );
      } elseif ( is_tag() ) {
          printf( __( 'Tag Archives: %s', 'memorijingga' ), '<span>' . single_tag_title( '', false ) . '</span>' );
      } elseif ( is_author() ) {
          the_post();
          printf( __( 'Author Archives: %s', 'memorijingga' ), '<span class="vcard"><a class="url fn n" href="' . get_author_posts_url( get_the_author_meta( "ID" ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
          rewind_posts();
      } elseif ( is_day() ) {
          printf( __( 'Daily Archives: %s', 'memorijingga' ), '<span>' . get_the_date() . '</span>' );
      } elseif ( is_month() ) {
          printf( __( 'Monthly Archives: %s', 'memorijingga' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
      } elseif ( is_year() ) {
          printf( __( 'Yearly Archives: %s', 'memorijingga' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
      } else {
         _e( 'Archives', 'memorijingga' );
      } ?>
  </h3>

  <?php
    if ( is_category() ) { $category_description = category_description();
      if ( ! empty( $category_description ) )
        echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );
    } elseif ( is_tag() ) { $tag_description = tag_description();
	  if ( ! empty( $tag_description ) )
        echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
    }
  ?>
</header>

<div class="bersih"></div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class("homepage"); ?>>
    <section class="cl6">
      <aside class="box">
        <h2 class="posting"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'memorijingga' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <div class="line_post"></div>

<section class="feature_image">
  <span class="entry-image">
<?php if ( has_post_thumbnail() ) {the_post_thumbnail('');
} else { ?> <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.jpg" alt="" class="alignleft"> 
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
      </aside><!-- end box-->
    </section><!-- end cl6-->
  </article><!-- end #post-<?php the_ID(); ?>-->

<?php endwhile; else: ?>
<?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'memorijingga'); ?>
<?php endif; ?>

        <section id="nav-under" class="navigasi">
            <div class="nav-next"><?php next_posts_link( __( '<span class="meta-nav">Next &rarr;</span>') ); ?></div>
            <div class="nav-previous"><?php previous_posts_link( __( '<span class="meta-nav">&larr; Previous</span>') ); ?></div>
        </section>

</section><!-- end col-->
</section><!-- end content-->

          <section class="sidebar">
              <?php get_sidebar('page'); ?>
          </section>

</section><!-- end main-->
</section><!-- end wraper-->
<?php get_footer(); ?>