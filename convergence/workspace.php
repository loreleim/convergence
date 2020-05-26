<?php
   /*
    Template Name: Workspace
    Template Post Type: page
	*/
	
	get_header();
$args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) :
?>
<main>
	<?php while ( $result->have_posts() ) : $result->the_post(); ?>
	<?php echo the_field('featured_image');?>
	<?php endwhile; ?>
	<?php endif; wp_reset_postdata(); ?>
</main>
<?php
get_footer();?>