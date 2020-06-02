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
            <h2><?php bloginfo( 'name' ); ?></h2>
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
		<div class="blueCircle"></div>
    </section>
	
	<section class="pageLinkSection">
		<div class="contentContainer">
			<h5><?php echo the_field('section2_title');?></h5>
			<p><?php echo the_field('section2_text')?></p>
            <a href=<?php echo the_field('section2_link');?> target="_blank">
				<div class="homeButtons">
					<div class="button">
                		<h4><?php echo the_field('section2_button_text');?></h4>
                	</div>
				</div>
             </a>
		</div>
		<img src="<?php echo the_field('section2_image');?>"/>
	</section>
					<h2><?php echo the_field('first_service');?></h2>
					<li><?php echo the_field('first_service1');?></li>
					<li><?php echo the_field('first_service2');?></li>
					<li><?php echo the_field('first_service3');?></li>
					<li><?php echo the_field('first_service4');?></li>
					<li><?php echo the_field('first_service5');?></li>
					<h2><?php echo the_field('second_service');?></h2>
					<li><?php echo the_field('second_service1');?></li>
					<li><?php echo the_field('second_service2');?></li>
					<li><?php echo the_field('second_service3');?></li>
					<li><?php echo the_field('second_service4');?></li>
					<li><?php echo the_field('second_service5');?></li>
	<script type="text/javascript">
		document.querySelectorAll(".homeAccordion").forEach(accordion =>{
	accordion.addEventListener("click", () => {
		if(document.getElementById('accordion1') && accordion.classList.contains("open"))
			accordion.classList.remove("open");
		else accordion.classList.add("open");
	});
});
		
	</script>
</main>

<?php
get_footer();?>