<?php
/**
 * @package Memori Jingga
 * @Memori Jingga 0.1
 */
?>

<?php 

if ( post_password_required() )
	return; ?>
<div class="bdr-right_dua">
<div id="comments">
<?php if ( have_comments() ) : ?>

<section class="title_com">

<h2> <?php printf( _n( 'One Comment on &ldquo;%2$s&rdquo;', '<span>%1$s Comments</span> on &ldquo;%2$s&rdquo;', get_comments_number(), 'memorijingga' ), number_format_i18n( get_comments_number() ), '' . get_the_title() . '' ); ?></h2>
    <?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
      <p class="nocomments">
	<?php _e( 'Comments are closed.', 'memorijingga' ); ?>
	</p>
    <?php endif; ?>
  </section>

  <div class="bersih"></div>

  <ul class="commentlist">
    <?php wp_list_comments( array( 'callback' => 'memorijingga_comment' ) ); ?>
  </ul>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
  <nav id="pagenavi"><?php paginate_comments_links(); ?></nav>
		<?php endif; ?>			
 <?php endif; // have_comments() ?>
 <?php if (comments_open()): // The comment form 
   $req = get_option( 'require_name_email' );
   $aria_req = ( $req ? " aria-required='true'" : '' );
   $fields =  array(
    'author'=>	'<input type="text" class="author" placeholder="'.esc_attr( 'Name' ).'" name="author"'. $aria_req .' />',
    'email'=>	'<input type="text" class="mail" placeholder="'.esc_attr( 'Email ( Required )' ).'" name="email"'. $aria_req .' />',
    'url'=>	'<input type="text" class="website" placeholder="'.esc_attr( 'Website' ).'" name="url"'. $aria_req .' />'
   );

   $args = array(
    'title_reply'          => 	__( 'Leave a Reply', 'memorijingga'),
    'comment_notes_before' =>	 '',
    'comment_field'        => 	'<p><textarea name="comment" id="comment" rows="10" placeholder="'.esc_attr( 'Your Comments' ).'"></textarea>',
    'label_submit'         =>	 __( 'Submit','memorijingga' ),
    'comment_notes_after'  => 	'',
    'fields'               => 	apply_filters( 'comment_form_default_fields', $fields )
   );
 comment_form($args);  
 endif; ?>
</div>
</div>