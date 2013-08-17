<?php
/**
 * @package Memori Jingga
 * @Memori Jingga 0.1
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
<title><?php wp_title(); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>

<header>
	<section class="col header">
		<hgroup class="site-title">
			<h1><a href=<?php echo home_url( '/' ); ?> rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h5 class="description"><?php bloginfo( 'description' ); ?></h5>
		</hgroup>
	</section>

	<section class="headwrapper">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => 'nav', 'container_id' => 'memorijingga_menu', 'container_class' => 'col header', 'menu_class' => 'menu', 'fallback_cb' => 'memorijingga_default_menu' ) ); ?>
	</section>

<div class="bersih"></div>
</header>