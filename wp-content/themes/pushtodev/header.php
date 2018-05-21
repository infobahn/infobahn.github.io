<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage push_to_dev
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<a class="skip-link screen-reader-text" href="#content">
		Skip to content
	</a>

	<header class="site-header" role="banner">

		<?php if ( is_front_page() ) : ?>
			<img class="site-header__logo" src="" alt="">
		<?php else : ?>
			<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="" alt="">
			</a>
		<?php endif; ?>

	</header>

	<div id="content" class="site-content">