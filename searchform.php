<?php
/**
 * @package Memori Jingga
 * @Memori Jingga 0.1
 */
?>

<section id="form_search">
	<section class="search_res">

		<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="text" class="field" name="s" id="s"  placeholder="<?php esc_attr_e( 'Search &hellip;', 'memorijingga' ); ?>"  />
			<input class="submit tombol" type="submit" value="<?php esc_attr_e( 'Search', 'memorijingga' ); ?>" />
		</form>
		
</section><!-- end search_res-->
</section><!-- end form_search-->
<div class="clear"></div>