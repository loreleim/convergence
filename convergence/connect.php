<?php
   /*
    Template Name: Connect
    Template Post Type: page
	*/
	
	get_header();
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
		<div class="connectForm">
			<form action="https://formspree.io/maypwedq" method="POST" autocomplete="on">
				<label><h2>Name</h2>
					<input type="text" name="name">
				</label>
				<label><h2>Email</h2>
					<input type="email" name="_replyto">
				</label>
				<label><h2>Organization</h2>
					<input type="text">
				</label>
				<label id="message"><h2>Message</h2>
					<textarea name="message"></textarea>
				</label>
				<input type="submit" value="Send">
			</form>
		</div>
</main>

<?php
get_footer();?>