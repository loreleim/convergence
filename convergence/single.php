<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Convergence
 */

get_header();
?>

	<main>
		<section class="workspaceTagline">
			<div class="taglineContainer">
				<h2><?php echo the_field('sub_title'); ?></h2>
				<h1><?php echo the_field('title');?></h1>
			</div>
    	</section>
		
		<section class="caseSection">
			<div class="caseContainer">
				<div class="caseImg">
					
				</div>
				<div class="caseText">
					<h2><?php echo the_field('profile_title');?></h2>
					<p><?php echo the_field('profile'); ?></p>
				</div>
			</div>
			<div class="caseContainer">
				<div class="caseText">
					<h2><?php echo the_field('challenge_title');?></h2>
					<p><?php echo the_field('challenge'); ?></p>
				</div>
			</div>
			<div class="caseContainer">
				<div class="caseText">
					<h2><?php echo the_field('approach_title');?></h2>
					<p><?php echo the_field('approach'); ?></p>
				</div>
			</div>
			<div class="caseContainer">
				<div class="caseText">
					<h2>Testimonials</h2>
					<p><?php echo the_field('testimonial'); ?></p>
				</div>
			</div>
    	</section>
		
		<script>
			document.getElementsByClassName('caseText')[1].style.float = 'left';
			document.getElementsByClassName('caseText')[3].style.float = 'left';
		</script>
	</main>

<?php
get_footer();?>
