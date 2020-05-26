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
			<h1><?php echo the_field('tagline');?></h1>
		</div>
    </section>
</main>

<?php
get_footer();?>