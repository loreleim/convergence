<?php
   /*
    Template Name: Home
    Template Post Type: page
	*/
	
	get_header();
?>

<main>
    <section class="firstSection">
		<div class="taglineContainer">
			<h1><?php echo the_field('tagline');?></h1>
            <div class="homeButtons">
                <a href=<?php echo the_field('button_one_link');?> target="_blank">
                    <div class="button">
                        <h4><?php echo the_field('button_one_title');?></h4>
                    </div>
                </a>
                <a href=<?php echo the_field('button_two_link');?> target="_blank">
                    <div class="button">
                        <h4><?php echo the_field('button_two_title');?></h4>
                    </div>
                </a>
            </div>
		</div>
    </section>

</main>

<?php
get_footer();?>