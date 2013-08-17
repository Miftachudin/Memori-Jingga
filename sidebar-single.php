<?php
/**
 * @package Memori Jingga
 * @Memori Jingga 0.1
 */
?>

<section class="sidebar-single">

<section class="dalem_side">
 	<?php if (!dynamic_sidebar('Single1')) : ?>
   		<?php get_search_form();?>
 	<?php endif; ?>

<div class="bersih"></div>
 	<?php if (!dynamic_sidebar('Single2')) : ?>
 		<?php endif; ?>
<div class="bersih"></div>
 	<?php if (!dynamic_sidebar('Single3')) : ?>
 	<?php endif; ?>
</section>

</section><!-- end sidebar-single-->
<div class="bersih"></div>