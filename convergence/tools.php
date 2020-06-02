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
<section class="workspaceTagline">
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

	<section class="featuredContainer">
		<div class="featuredText">
			<h2><?php echo date('M'); ?> <?php echo date('Y'); ?> Featured Projects</h2>
		</div>
	
	<?php while ( $result->have_posts() ) : $result->the_post(); ?>
	

		<div class="featureOne">
			<img src="<?php echo the_field('featured_image');?>"/>
			<h2><?php echo the_field('title');?></h2>
			<a href="<?php echo the_field('medium_link');?>" target="_blank">
				<div class="button">
					<h4>Read More</h4>
				</div>
			</a>
			<p><?php echo the_field('snippet');?></p>
		</div>
	
	<?php endwhile; ?>
	</section>
	<?php endif; wp_reset_postdata(); ?>
	
</main>

<?php
get_footer();?>