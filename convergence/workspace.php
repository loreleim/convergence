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
	
	<section class="featuredContainer">
		<div class="featuredText">
			<h2><?php echo date('M'); ?> <?php echo date('Y'); ?> <?php echo the_field('feature_text');?></h2>
		</div>
		<div class="featuredGrid">
			<div class="featureOne">
				<?php $project1 = get_field('featured_project_one');?>
				<img src="<?php echo the_field('featured_image', $project1);?>"/>
				<h2><?php echo the_field('title', $project1);?></h2>
				<div class="featureMini">
					<p><?php echo get_cat_name($project1);?>, </p>
					<p><?php echo the_field('read_time', $project1);?> mins</p>
				</div>
				<a href="<?php echo the_field('medium_link', $project1);?>" target="_blank">
					<div class="button">
						<h4>Read More</h4>
					</div>
				</a>
			</div>
			<div class="featureOne">
				<?php $project2 = get_field('featured_project_two');?>
				<img src="<?php echo the_field('featured_image', $project2);?>"/>
				<h2><?php echo the_field('title', $project2);?></h2>
				<div class="featureMini">
					<p><?php echo get_cat_name($project2);?>, </p>
					<p><?php echo the_field('read_time', $project2);?> mins</p>
				</div>
				<a href="<?php echo the_field('medium_link', $project2);?>" target="_blank">
					<div class="button">
						<h4>Read More</h4>
					</div>
				</a>
			</div>
			<div class="featureOne">
				<?php $project3 = get_field('featured_project_three');?>
				<img src="<?php echo the_field('featured_image', $project3);?>"/>
				<h2><?php echo the_field('title', $project3);?></h2>
				<div class="featureMini">
					<p><?php echo get_cat_name($project3);?>, </p>
					<p><?php echo the_field('read_time', $project3);?> mins</p>
				</div>
				<a href="<?php echo the_field('medium_link', $project3);?>" target="_blank">
					<div class="button">
						<h4>Read More</h4>
					</div>
				</a>
			</div>
		</div>
	</section>

	<section class="featuredContainer">
	
	
	<?php while ( $result->have_posts() ) : $result->the_post(); ?>
	

		<div class="featureOne">
			<img src="<?php echo the_field('featured_image');?>"/>
			<h2><?php echo the_field('title');?></h2>
			<div class="featureMini">
				<?php $category = get_field('post_category');?>
				<p><?php echo get_cat_name($category);?>, </p>
				<p><?php echo the_field('read_time');?> mins</p>
			</div>
			<a href="<?php echo the_field('medium_link');?>" target="_blank">
				<div class="button">
					<h4>Read More</h4>
				</div>
			</a>
		</div>
	
	<?php endwhile; ?>
	</section>
	<?php endif; wp_reset_postdata(); ?>
	
</main>

<?php
get_footer();?>