<?php
   /*
    Template Name: Home
    Template Post Type: page
	*/
	
	get_header();
?>

<main>
    <section class="firstSection">
        <h1><?php echo the_field('tagline');?></h1>
		<div class="taglineContainer">
		</div>
    </section>
</main>

<?php
get_footer();?>