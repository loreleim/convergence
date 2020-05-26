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
<?php
get_footer();?>