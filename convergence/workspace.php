<?php
   /*
    Template Name: Workspace
    Template Post Type: page
	*/
	
	get_header();
$args = array(
'post_type'=> 'post',
'cat'      => [1],
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
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
			<h2><?php echo date('M'); ?> <?php echo date('Y'); ?> <?php echo the_field('feature_text');?></h2>

	<?php while ( $result->have_posts() ) : $result->the_post(); ?>
	<?php echo the_field('featured_image');?>
	<?php echo the_field('title');?>
	<a href="<?php echo the_field('medium_link');?>" target="_blank">	<div class="button">
		Read More
	</div></a>
	<p>
		<?php echo the_field('snippet');?>
	</p>
	
	<?php endwhile; ?>
	<?php endif; wp_reset_postdata(); ?>
	
</main>

<?php
get_footer();?>