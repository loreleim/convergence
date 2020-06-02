<?php
   /*
    Template Name: Tools
    Template Post Type: page
	*/
	
	get_header();
$args = array(
'post_type'=> 'post',
'cat'      => [3],
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the published posts
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) :
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
</main>

<?php
get_footer();?>