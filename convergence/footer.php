<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Convergence
 */

?>

	<footer>
		<div class="footerLeft">
			<div class="footerMotto">Designing the Future of Participation</div>
			<div class="socialBar">
				<ul>
					<li><a href="http://google.com" target="_blank">Twitter</a></li>
					<li><a href="http://google.com" target="_blank">LinkedIn</a></li>
					<li><a href="http://google.com" target="_blank">Medium</a></li>
					<li><a href="http://google.com" target="_blank">Facebook</a></li>
					<li><a href="http://google.com" target="_blank">Instagram</a></li>
				</ul>
			</div>
			<div class="copyrightInfo">
				&copy;
				<?php echo date('Y'); ?>
				Convergence Design Lab, LLC
			</div>
		</div>
		<div class="footerRight">
			<ul>
				<a><li>Home</li></a>
				<a><li>Who We Are</li></a>
				<a><li>Workspace</li></a>
				<a><li>Tools</li></a>
				<a><li>Connect</li></a>
			</ul>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
