<?php
   /*
    Template Name: Tools
    Template Post Type: page
	*/
	
	get_header();
?>

<main>
<section class="nonHomeSection">
		<div class="taglineContainer">
			<h2><?php wp_title( '' ); ?></h2>
                <a href=<?php echo the_field('button_one_link');?> target="_blank">
                    <div class="button">
                        <h4><?php echo the_field('button_one_text');?></h4>
                    </div>
                </a>
		</div>
    </section>
</main>

<?php
get_footer();?>