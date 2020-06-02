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
	
	<section class="connectSection">
		<div class="connectIcon">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 211.7 246.3"><defs><style>.cls-3 {fill: #23144c;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Group_711" data-name="Group 711"><g id="Group_674" data-name="Group 674"><g id="Group_673" data-name="Group 673"><g id="Group_670" data-name="Group 670"><path id="Path_1007" data-name="Path 1007" d="M69.7 215.4a10.4 10.4 0 01-10.4-10.3 10.3 10.3 0 01.4-3.1c5-15.7 18.1-27.9 30.3-36.4l4.2-3A36 36 0 0184 116a29.3 29.3 0 0110.2-11.4l-.4-.2a50.8 50.8 0 00-21.2-5.9h-4.2a51 51 0 00-21.2 5.9 36.8 36.8 0 00-16 16.2 45.5 45.5 0 0013 58.8l-5.3 4C23.5 194 7 209.5.6 229.3a13.2 13.2 0 0012.7 17h114.4a13.2 13.2 0 0012.6-17 65.6 65.6 0 00-6.4-13.9z" fill="#45f4ef"/></g><g id="Group_671" data-name="Group 671"><path id="Path_1008" data-name="Path 1008" d="M170.3 202c-5-15.6-18.2-27.9-30.3-36.3l-4.3-3.1a35.6 35.6 0 0010.1-11.3 35.2 35.2 0 004.6-18.4A40 40 0 00146 116a29.1 29.1 0 00-12.6-12.8 40.2 40.2 0 00-16.8-4.7H113.4a40.2 40.2 0 00-16.8 4.7l-2.4 1.4a36.8 36.8 0 0115.6 16 50.5 50.5 0 015.5 21.4 44.6 44.6 0 01-18.5 37.5c1.7 1.2 3.5 2.5 5.3 4 11.6 8 23.8 18.7 31.9 32h26.3a10.4 10.4 0 0010.5-10.4 10.6 10.6 0 00-.4-3.1z" fill="#ff5050"/></g><g id="Group_672" data-name="Group 672"><path id="Path_1009"data-name="Path 1009" class="cls-3" d="M102 183.4a210 210 0 00-5.4-4 44.6 44.6 0 0018.6-37.4 50.5 50.5 0 00-5.5-21.3 36.7 36.7 0 00-15.6-16A29 29 0 0084 116a36 36 0 0010.3 46.5l-4.3 3.1c-12.2 8.5-25.2 20.7-30.3 36.4a10.4 10.4 0 007 13 10.3 10.3 0 003 .5H134c-8-13.3-20.3-24-31.9-32.1z"/></g></g></g><path class="cls-3" d="M173.2 1.1a48.7 48.7 0 00-20.5 95.3 48.1 48.1 0 008.4 1l4 12.5a4.3 4.3 0 007.3 1.5l8.9-9.8 6.3-7 2.6-2.9a4 4 0 00.4-.5l7-8.1a48.7 48.7 0 0013-24 48.7 48.7 0 00-37.4-58zm-32.9 53.4a5.7 5.7 0 115.7-5.7 5.7 5.7 0 01-5.7 5.7zm22.7 0a5.7 5.7 0 115.7-5.7 5.7 5.7 0 01-5.7 5.7zm22.7 0a5.7 5.7 0 115.7-5.7 5.7 5.7 0 01-5.7 5.7z"/></g></g></g></svg>
		</div>
		<div class="connectForm">
			<h2 id="formTitle">Want to work with us?</h2>
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