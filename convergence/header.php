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
		<a href="home">
			<div class="logoContainer">	
			
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 101.7 70"><g data-name="Layer 2"><g data-name="Layer 1"><g data-name="Group 727"><path data-name="Path 1061" d="M57.83 22.53a25 25 0 01-3 29.05 1.25 1.25 0 00.17 1.77l.16.12a19.2 19.2 0 007.46 3 1.32 1.32 0 001.25-.52c9.2-12.37 8.85-29.65 0-41.77a1.45 1.45 0 00-1.45-.53 21.57 21.57 0 00-7.46 3.1 1 1 0 00-.29 1.39.76.76 0 00.08.11 27.45 27.45 0 013.08 4.28z" fill="#23144c"/><path data-name="Path 1062" d="M65.16 0a35 35 0 00-15.64 4.54c-26.47 15-22.32 54.59 6.57 63.75 23.42 7.65 47.49-11.41 45.49-36a34.91 34.91 0 00-7.83-19.48l4.78-8.1A3.07 3.07 0 0097.44.49 3.11 3.11 0 0095.9.06zM92 37.42c-2.61 24.66-34.82 31.47-47.31 10C32.42 25.16 56.16 1 78.67 12.65A25.47 25.47 0 0192 37.43z" fill="#ff5050"/><path data-name="Path 1063" d="M37.83 61.4a3.23 3.23 0 00-2.41-1 25.91 25.91 0 01-12.4-3A25.47 25.47 0 019.75 32.58C11.29 18 23.18 9.67 35.23 9.71a3.55 3.55 0 002.62-1.11 38.39 38.39 0 016.7-5.6.93.93 0 00.27-1.27 1 1 0 00-.52-.39A37.62 37.62 0 0038 .14C17.27-1.72-1.67 15.8.12 37.71A34.91 34.91 0 008 57.19l-4.78 8.1a3.07 3.07 0 001.09 4.22 3.11 3.11 0 001.54.43l30.69.06A33.84 33.84 0 0044 68.84a1.08 1.08 0 00.77-1.32 1 1 0 00-.44-.62 38.13 38.13 0 01-6.5-5.5z" fill="#45f4ef"/></g></g></g></svg>
			
			</div>
		</a>
		<div class="hamburgerMenu" id="hammy">
			<div id="one" class="hamburgerLine"></div>
			<div id="two" class="hamburgerLine"></div>
			<div id="three" class="hamburgerLine"></div>
			<nav class="overlay" id="overlayID">
				<ul>
					<li><a href="home">Home</a></li>
					<li><a href="whoweare">Who We Are</a></li>
					<li><a href="workspace">Workspace</a></li>
					<li><a href="tools">Tools</a></li>
					<li><a href="connect">Connect</a></li>
				</ul>
			</nav>
		</div>

	</header>
	
	<script type="text/javascript">
	document.getElementById("hammy").addEventListener('click', function() {
		if (this.classList.contains("on")) {
		this.classList.remove("on");
		this.classList.add("off");
	}
	else {
		this.classList.remove("off");
		this.classList.add("on");
	}
													  });
		
    </script>
