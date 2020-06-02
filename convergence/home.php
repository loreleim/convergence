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
					<div class="servicesIcon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283 182.6"><g data-name="Layer 2"><g data-name="Layer 1"><g data-name="Group 620"><path data-name="Path 952" d="M100 91a91 91 0 0142-76 91 91 0 100 152 91 91 0 01-42-76z" fill="#45f4ef"/><path data-name="Path 953" d="M192 0a91 91 0 00-50 15 91 91 0 010 152A91 91 0 10192 0z" fill="#ff5050"/></g><path d="M168 141a91 91 0 0015-47v-3-2a91 91 0 00-41-74 91 91 0 00-41 76v1a91 91 0 0041 75 91 91 0 0026-26z" fill="#23144c"/></g> </g> </svg></div>
					<h2><?php echo the_field('first_service');?></h2>
					<li><?php echo the_field('first_service1');?></li>
					<li><?php echo the_field('first_service2');?></li>
					<li><?php echo the_field('first_service3');?></li>
					<li><?php echo the_field('first_service4');?></li>
					<li><?php echo the_field('first_service5');?></li>
					<div class="servicesIcon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 211.7 246.3"><defs><style>.cls-3 {fill: #23144c;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Group_711" data-name="Group 711"><g id="Group_674" data-name="Group 674"><g id="Group_673" data-name="Group 673"><g id="Group_670" data-name="Group 670"><path id="Path_1007" data-name="Path 1007" d="M69.7 215.4a10.4 10.4 0 01-10.4-10.3 10.3 10.3 0 01.4-3.1c5-15.7 18.1-27.9 30.3-36.4l4.2-3A36 36 0 0184 116a29.3 29.3 0 0110.2-11.4l-.4-.2a50.8 50.8 0 00-21.2-5.9h-4.2a51 51 0 00-21.2 5.9 36.8 36.8 0 00-16 16.2 45.5 45.5 0 0013 58.8l-5.3 4C23.5 194 7 209.5.6 229.3a13.2 13.2 0 0012.7 17h114.4a13.2 13.2 0 0012.6-17 65.6 65.6 0 00-6.4-13.9z" fill="#45f4ef"/></g><g id="Group_671" data-name="Group 671"><path id="Path_1008" data-name="Path 1008" d="M170.3 202c-5-15.6-18.2-27.9-30.3-36.3l-4.3-3.1a35.6 35.6 0 0010.1-11.3 35.2 35.2 0 004.6-18.4A40 40 0 00146 116a29.1 29.1 0 00-12.6-12.8 40.2 40.2 0 00-16.8-4.7H113.4a40.2 40.2 0 00-16.8 4.7l-2.4 1.4a36.8 36.8 0 0115.6 16 50.5 50.5 0 015.5 21.4 44.6 44.6 0 01-18.5 37.5c1.7 1.2 3.5 2.5 5.3 4 11.6 8 23.8 18.7 31.9 32h26.3a10.4 10.4 0 0010.5-10.4 10.6 10.6 0 00-.4-3.1z" fill="#ff5050"/></g><g id="Group_672" data-name="Group 672"><path id="Path_1009"data-name="Path 1009" class="cls-3" d="M102 183.4a210 210 0 00-5.4-4 44.6 44.6 0 0018.6-37.4 50.5 50.5 0 00-5.5-21.3 36.7 36.7 0 00-15.6-16A29 29 0 0084 116a36 36 0 0010.3 46.5l-4.3 3.1c-12.2 8.5-25.2 20.7-30.3 36.4a10.4 10.4 0 007 13 10.3 10.3 0 003 .5H134c-8-13.3-20.3-24-31.9-32.1z"/></g></g></g><path class="cls-3" d="M173.2 1.1a48.7 48.7 0 00-20.5 95.3 48.1 48.1 0 008.4 1l4 12.5a4.3 4.3 0 007.3 1.5l8.9-9.8 6.3-7 2.6-2.9a4 4 0 00.4-.5l7-8.1a48.7 48.7 0 0013-24 48.7 48.7 0 00-37.4-58zm-32.9 53.4a5.7 5.7 0 115.7-5.7 5.7 5.7 0 01-5.7 5.7zm22.7 0a5.7 5.7 0 115.7-5.7 5.7 5.7 0 01-5.7 5.7zm22.7 0a5.7 5.7 0 115.7-5.7 5.7 5.7 0 01-5.7 5.7z"/></g></g></g></svg></div>
					<h2><?php echo the_field('second_service');?></h2>
					<li><?php echo the_field('second_service1');?></li>
					<li><?php echo the_field('second_service2');?></li>
					<li><?php echo the_field('second_service3');?></li>
					<li><?php echo the_field('second_service4');?></li>
					<li><?php echo the_field('second_service5');?></li>
.cls-1 {fill: none;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Group_624" data-name="Group 624"><path id="Path_958" data-name="Path 958" class="cls-1" d="M181 47.3a31.4 31.4 0 1031.3 31.5A31.3 31.3 0 00181 47.3z"/><path id="Path_959" data-name="Path 959" class="cls-1" d="M93.9 99.3a31.4 31.4 0 1011.4 43A31.3 31.3 0 0094 99.3z"/><path id="Path_960" data-name="Path 960"d="M130.3 139.3a60.8 60.8 0 00-10-10c-1.5-1.2-1.8-1.8-1.1-3.2l6.7-13.9a3.5 3.5 0 000-3c-2-4.4-3.8-9-5.7-13.4a3.6 3.6 0 00-1.8-1.9L102 88.1V70c0-.4.9-1.1 1.5-1.3 4.9-1.9 9.9-3.6 14.8-5.4a3.7 3.7 0 001.8-1.9l.5-1.2L110 54c-1-.6-1.5 0-2.1.5l-12 10.2a3.6 3.6 0 01-2.5.6L79 63.7a3 3 0 01-2.6-1.4c-3.2-4.8-6.5-9.4-9.7-14l-18.3 5-1.3 17.1a2.7 2.7 0 01-1.4 2.3c-3.9 2.9-7.7 6-11.6 8.8a3.7 3.7 0 01-2.5.8l-15.5-2.8a2.3 2.3 0 00-2 .6l-9 15.5c3.9 4.4 7.7 8.7 11.3 13.1a3.6 3.6 0 01.7 2.5l-1.8 14.5a3.6 3.6 0 01-1.5 2.6L1 137c-1.3.9-1.4 1.6-.6 3.4A60.8 60.8 0 014 154c.3 1.7.8 2.2 2.1 2.3l15.6 1.2c1.4 0 2 .7 3 2a65 65 0 007.6 10c1.3 1.5 1.8 2.4 1.5 4l-3 16.5 16.3 9.4 13-11.2a2.9 2.9 0 012.8-.7q7.1 1 14.3 1.8a2.8 2.8 0 012.5 1.3l9 13c.7 1.1 1.3 1.4 3.1.5a39.6 39.6 0 0113.4-3.6c2.2-.2 2.6-.8 2.7-2l1.1-15.8a2.9 2.9 0 011.5-2.4c3.9-2.8 7.7-5.8 11.4-8.8a3 3 0 012.7-.8l16.9 3.1 9.4-16.4-11-12.8c-1-1.1-1-2-.7-3.7l.7-3.8-6.7 3.2c-1.2.6-1.9.4-3-1zm-25 3a31.4 31.4 0 11-11.4-43 31.4 31.4 0 0111.5 42.8v.1z" fill="#45f4ef" /><path id="Path_961"data-name="Path 961" d="M243.5 63.6c-1.4-.5-2-1.3-2.5-2.9a70 70 0 00-5-12c-.8-1.4-.9-2.3-.3-3.5l6.8-14.3c.7-1.3.2-2-2-3.4A31.4 31.4 0 01232 19c-1.6-2.3-2.2-2.7-3.6-2L214 23.9a3.4 3.4 0 01-2.4-.1c-3.2-1.4-5.4-2.7-9.6-4.2-4.3-1.6-6.5-3.5-7.6-7.8-1-4-2.8-7.8-4.2-11.8h-17.7c-1.2 0-1.3.7-1.6 1.5-1.8 5-3.5 10-5.4 14.9a3.6 3.6 0 01-1.8 1.7c-4.4 2-9 3.7-13.3 5.7a3 3 0 01-3 0L132 16.5 118.7 30l7.3 15.5a2.7 2.7 0 010 2.6c-1.8 4-3.4 8.2-5.2 12.3l4.6 2.7c-.7 4.1-1.1 8.3-2.2 12.3-1.2 4.2-.2 7 2.7 10.5 2.8 3.4 4.1 5.6 6.3 8.4a3.3 3.3 0 002 1.3c5.3.5 10.6.9 16 1.2 1.5.1 1.8.7 2 3.5a31.3 31.3 0 003.2 11.7c1.2 2.4 1.3 3.1 0 4l-13 9c-1.1.7-1.4 1.5-1.4 3.2a66.9 66.9 0 01-1 9l7.4-3.5c1.3-.6 2.1-.4 3.6.4a65 65 0 0011.7 4.8c1.8.6 2.6 1.2 3.2 2.7l5.5 15.8h19l5.7-16.2a2.9 2.9 0 012-2c4.4-1.6 8.9-3.5 13.3-5.5a3 3 0 012.8 0l14.2 6.8c1.2.6 1.8.5 3-1.2a39.4 39.4 0 019.9-9.8c1.8-1.3 1.8-2 1.2-3l-6.8-14.4a2.9 2.9 0 010-2.7c2-4.4 3.9-8.9 5.6-13.4a2.9 2.9 0 012-2l16.1-5.7v-19l-16-5.6zM180.8 110a31.4 31.4 0 1131.4-31.4 31.3 31.3 0 01-31.3 31.4z" fill="#ff5050"/><path id="Path_962" data-name="Path 962" d="M142.4 124.8l13-9c1.2-.8 1.1-1.6 0-4a31.7 31.7 0 01-3.2-11.6c-.2-2.8-.6-3.4-2-3.5l-16-1.3a3.3 3.3 0 01-2-1.2c-2.2-2.8-3.5-5-6.3-8.4-3-3.5-4-6.3-2.8-10.6 1.1-4 1.6-8.1 2.3-12.2l-4.7-2.7-.5 1.2a3.7 3.7 0 01-1.7 1.9c-5 1.8-10 3.5-14.9 5.4-.6.2-1.4.9-1.4 1.3v18l16.2 5.8a3.7 3.7 0 011.8 1.9c2 4.4 3.7 9 5.7 13.4a3.6 3.6 0 010 3l-6.7 14c-.6 1.3-.4 2 1.2 3.2a60.4 60.4 0 0110 10c1 1.3 1.7 1.5 3 1l6.7-3.3a66.9 66.9 0 001-9c-.1-1.7.2-2.5 1.3-3.3z"fill="#23144c"/></g></g></g></svg></div>
					<h2><?php echo the_field('third_service');?></h2>
					<li><?php echo the_field('third_service1');?></li>
					<li><?php echo the_field('third_service2');?></li>
					<li><?php echo the_field('third_service3');?></li>
					<li><?php echo the_field('third_service4');?></li>
					<li><?php echo the_field('third_service5');?></li>
				</div>
			</div>
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