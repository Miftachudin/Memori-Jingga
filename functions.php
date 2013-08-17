<?php

		/*--------Enqueue scripts and styles Memori Jingga 0.1--------*/
define( 'MEMORIJINGGA', '0.1' );
	add_action( 'wp_enqueue_scripts', 'memorijingga_enqueue_scripts' );
	add_action( 'wp_head', 'memorijingga_print_ie_scripts');
	function memorijingga_enqueue_scripts() {
	if( !is_singular() ) {
	wp_enqueue_style( 'memorijingga', get_template_directory_uri() .'/style.css', array(), MEMORIJINGGA);
	} else {
	wp_enqueue_style( 'memorijingga', get_template_directory_uri() .'/single.css', array(), MEMORIJINGGA);
	}
		if ( is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
		}
 	}

	function memorijingga_print_ie_scripts() {
?>
	<!--[if lt IE 9]> 
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script> <![endif]-->
  <?php
}

		/*----------primary menu/featuture Memori Jingga 0.1-----------*/
function memorijingga_setup() {
	if ( ! isset( $content_width ) ) $content_width = 900;
	load_theme_textdomain( 'memorijingga', get_template_directory() . '/languages' );
	add_theme_support( 'post-thumbnails' );
	add_image_size('post-thumbnail', 520, 150, true);
	add_theme_support( 'automatic-feed-links' );
	register_nav_menus( array('primary' => __( 'Primary Menu', 'memorijingga' ), ) );
	}
add_action( 'after_setup_theme', 'memorijingga_setup' );

		/*----------Filter content with empty post title memorijingga 0.1-----------*/
	add_filter('the_title', 'memorijingga_untitled');
	function memorijingga_untitled($title) {
	if ($title == '') {
	return __('Untitled', 'memorijingga');
	} else {
	return $title;
	}
	}

		/*-------Title filter By wp_title() Memori Jingga 0.1-----*/
add_filter('wp_title', 'memorijingga_filter_title');
	function memorijingga_filter_title( $filter_title ){
	global $page, $paged;
	$filter_title = str_replace( '&raquo;', '', $filter_title );
	$site_description = get_bloginfo( 'description', 'display' );
	$separator = '#124';

	if ( is_singular() ) {
	if ( $paged >= 2 || $page >= 2 )$filter_title .= ', ' . __( 'Page', 'memorijingga' ).''. max( $paged, $page );
} else {
	if( ! is_home() )$filter_title .= ' &' . $separator . '; ';
	$filter_title .= get_bloginfo( 'name' );
	if ( $paged >= 2 || $page >= 2 )
	$filter_title .= ', ' . __( 'Page', 'memorijingga' ) . ' ' . max( $paged, $page );
}
	if ( is_home() && $site_description )
	$filter_title .= ' &' . $separator . '; ' . $site_description;
	return $filter_title;
}

			/*-----------Menu Memori Jingga 0.1----------*/
function memorijingga_default_menu() {
	echo '<nav id="memorijingga_menu" class="menu"><ul class="current-menu-item">'. wp_list_pages('title_li=&echo=0') .'</ul></nav>';
}
		/*-----------Custom Controllable Excerpt and read more memorijingga 0.1---------------*/

add_filter( 'excerpt_length', 'memorijingga_excerpt_length' );
	add_filter( 'excerpt_more', 'memorijingga_auto_excerpt_more' );
	add_filter( 'get_the_excerpt', 'memorijingga_custom_excerpt_more' );
	function memorijingga_excerpt_length( $length ) {
	return 30;}
	function memorijingga_continue_reading_link() {
	return ' <a class="more" href="'. esc_url( get_permalink() ) . '">' . __( 'Read more &raquo;', 'memorijingga' ) . '</a>';}
	function memorijingga_auto_excerpt_more( $more ) {
	return ' &hellip;' . memorijingga_continue_reading_link();}
	function memorijingga_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= ' &hellip;'  . memorijingga_continue_reading_link();
	} return $output; }

			/*-----------Register 10 Sidebar Memori Jingga 0.1-------------*/
add_action( 'widgets_init', 'memorijingga_widgets_init');
		function memorijingga_widgets_init() {
register_sidebar(array(
     'name' => __('Home1','memorijingga'),
     'description' => __('Home Widget 1', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
register_sidebar(array(
     'name' => __('Home2','memorijingga'),
     'description' => __('Home Widget 2', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
register_sidebar(array(
     'name' => __('Home3','memorijingga'),
     'description' => __('Home Widget 3', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
register_sidebar(array(
     'name' => __('Single1','memorijingga'),
     'description' => __('Single Widget 1', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
register_sidebar(array(
     'name' => __('Single2','memorijingga'),
     'description' => __('Single Widget 2', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
register_sidebar(array(
     'name' => __('Single3','memorijingga'),
     'description' => __('Single Widget 3', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
register_sidebar(array(
     'name' => __('Footer1','memorijingga'),
     'description' => __('Footer Widget 1', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
register_sidebar(array(
     'name' => __('Footer2','memorijingga'),
     'description' => __('Footer Widget 2', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
register_sidebar(array(
     'name' => __('Footer3','memorijingga'),
     'description' => __('Footer Widget 3', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
register_sidebar(array(
     'name' => __('Footer4','memorijingga'),
     'description' => __('Footer Widget 4', 'memorijingga'),
     'before_widget' => '',
     'after_widget' => '',
     'before_title' => '<h3>',
     'after_title' => '</h3>'
));
}

		/*------Comment and trackback layout Memori Jingga 0.1------------*/
function memorijingga_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
	case 'pingback' :
	case 'trackback' :
?>
<li class="post pingback">
	<p><?php _e( 'Pingback:', 'memorijingga' ); ?> <?php  comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'memorijingga' ), '<span class=edit-link>', '</span>' ); ?>
	<?php
 	break; default : ?>

<li <?php comment_class(); ?> id="li-comment-<?php  comment_ID(); ?>">
<article id="comment-<?php  comment_ID(); ?>" class=comment>
	<footer class="comment-meta">
		<div class="comment-author vcard">
	<?php
		$avatar_size = 58;				
		if ( '0' != $comment->comment_parent )    $avatar_size = 30;
		echo get_avatar( $comment, $avatar_size );
		printf( __( '%1$s on %2$s <span class="says">said:</span>', 'memorijingga' ), 
		sprintf( '<span class=fn>%s</span>', get_comment_author_link() ), 
		sprintf( '<span class=time><a class=time href="%1$s"><time datetime="%2$s">%3$s</time></a></span>',        
		esc_url( get_comment_link( $comment->comment_ID ) ), get_comment_time( 'c' ), 
		sprintf( __( '%1$s at %2$s', 'memorijingga' ), get_comment_date(), get_comment_time() )));
	?>
	<?php edit_comment_link( __( 'Edit', 'memorijingga' ), '<span class=edit-link>', '</span>' ); ?>
</div>

	<?php if ( $comment->comment_approved == '0' ) : ?>
<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'memorijingga' ); ?></em>
<br />
	<?php endif; ?>
</footer>

<div class="comment-content">
	<?php comment_text(); ?>
</div>
<div class="bersih"></div>
<div class="reply">
	<?php comment_reply_link( array_merge( $args, array( 
		'reply_text' => __( 'Reply <span>&darr;</span>', 'memorijingga' ), 
		'depth' => $depth, 
		'max_depth' => $args['max_depth'] ) ) ); ?>
</div>
<div class=bersih></div>
</article>
<?php
	break;
	endswitch;
}

		/*--------Navigation Singgle Memori Jingga 0.1--------*/
function memorijingga_content_nav() {
	global $wp_query;

	$paged		= ( get_query_var( 'paged' ) ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link	= get_pagenum_link();
	$url_parts	= parse_url( $pagenum_link );
	$format		= ( get_option('permalink_structure') ) ? user_trailingslashit('<span>page/%#%</span>', 'paged') : '?paged=%#%';
	
	if ( isset($url_parts['query']) ) {
		$pagenum_link	= "{$url_parts['scheme']}://{$url_parts['host']}{$url_parts['path']}%_%?{$url_parts['query']}";
	} else {
		$pagenum_link	.= '%_%';
	}
	
	$links			= paginate_links( array(
		'base'		=> $pagenum_link,
		'format'	=> $format,
		'total'		=> $wp_query->max_num_pages,
		'current'	=> $paged,
		'mid_size'	=> 2,
		'type'		=> 'list'
	) );
	
	if (!is_singular() && $links ) {
		echo "<nav id=\"page-nav\">{$links}</div><div class=\"bersih\"></nav>";
	}
	if (is_singular()){
		wp_link_pages( array( 
		'before' => '<nav id="number-pages"><span>' . __( 'Pages:', 'memorijingga' ) . '</span>', 
		'after' => '</nav><div class=bersih></div>' ) );
		echo '<nav class="singlememori">';
			previous_post_link('%link', '<span class="singleprev">&#60; Previous</span>');
			next_post_link('%link', '<span class="singlenext">Next &#62;</span>');
		echo '</nav>';
	}
}

	/*--------footer Memori Jingga 0.1----------*/
add_action('memorijingga_my_footer','memorijingga_footer_setup');
function memorijingga_footer_setup (){
?>
<footer>
<section class="col">
 <section class="footer_container">
  	<section class="cl6">
   	<p class="footer">
<?php _e( 'Copyright &copy;', 'memorijingga' ); ?> <?php echo date('Y'); ?> <a href=<?php echo esc_url( home_url( '/' ) ); ?> title="<?php bloginfo('name'); ?>"><?php bloginfo( 'name' ); ?></a></p>
	</section>
	<section class="cl6">
	<p class="footer">
<?php printf( __('Powered by <a href="http://wordpress.org/" title="%1$s">%2$s</a> | <a href="http://dextozine.tk/" title="%3$s">%4$s Themes</a>', 'dextozine'), esc_attr('A Semantic Personal Publishing Platform'), 'WordPress', esc_attr( 'Memori Jingga By. Miftachudin'),'Memori Jingga'); ?>
	</p>
	</section>
  </section>
 </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>
<?php }

	/*--------Validation Html 5 Category Memori Jingga 0.1----------*/
add_filter('wp_list_categories', 'memorijingga_category_rel_removal');
add_filter('the_category', 'memorijingga_category_rel_removal');
function memorijingga_category_rel_removal ($output) {
   $output = str_replace(' rel="category tag"', '', $output);
   return $output;
   }