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
            <div class="homeButtons">
                <a href=<?php echo the_field('button_one_link');?> target="_blank">
                    <div class="button">
                        <h4><?php echo the_field('button_one_text');?></h4>
                    </div>
                </a>
            </div>
		</div>
    </section>
	<section class="partnersSection">
			<h5><?php echo the_field('section2_title');?></h5>
	</section>
	
</main>

<?php
get_footer();?>