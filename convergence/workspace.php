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
);
<?php
get_footer();?>