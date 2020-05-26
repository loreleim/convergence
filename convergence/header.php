<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Convergence
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title();?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header>
		<div class="logoContainer">
			Logo
		</div>
		<div class="hamburgerMenu">
			<div id="one" class="hamburgerLine"></div>
			<div id="two" class="hamburgerLine"></div>
			<div id="three" class="hamburgerLine"></div>
			<nav>
				Navigation
			</nav>
		</div>

	</header>
