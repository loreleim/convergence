<?php
   /*
    Template Name: About
    Template Post Type: page
	*/
	
	get_header();
?>

<main>
    <section class="nonHomeSection">
		<div class="taglineContainer">
			<h2><?php wp_title( '' ); ?></h2>
			<h1><?php echo the_field('tagline');?></h1>
		</div>
    </section>
</main>

<?php
get_footer();?>