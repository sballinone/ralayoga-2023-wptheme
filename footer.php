<div class="image parallax" style="height: 400px; background-image: url('<?php
			if(get_theme_mod('footer_image') > 0) { 
				echo wp_get_attachment_image_url(get_theme_mod('footer_image'), 'full'); 
			} else {
				echo get_theme_file_uri('/assets/images/header/castel.jpeg');
			} ?>');">
			
		</div>
		
		<div id="footer">
			<div id="footerMain">
				<?php 
					dynamic_sidebar( 'footer' ); 
				?>
			</div>
			<div id="footerBottom">
				<span style="float: left" id="footerNav">
					&copy; <?php date('Y'); ?> RaLa Yoga · 
					<?php 
							wp_nav_menu( 
								array( 
									'theme_location' => 'navLegal',
									'container' => false
								) 
							);
						?>
				</span>
				<span style="float: right" class="author">
					Webdesign: 
						<a href='https://saskiabrueckner.com' target='_blank'>
							<img src="<?php echo get_theme_file_uri('/assets/images/logo/author2.png'); ?>" style="vertical-align: middle; border=0; height: 30px">
						</a>
				</span>
			</div>
		</div>



		<?php 
		if ( is_front_page() || is_home() ) {
			?>
			<div id="splash">
				<div id="splashContent">
					<span style="font-family: 'Qwitcher Grypen', sans-serif; font-size: 16pt">
						<img src="<?php echo get_theme_file_uri('/assets/images/logo/cmyk-v7-transparent.svg'); ?>">
					</span><br />
					<span style="font-family: 'Qwitcher Grypen', sans-serif; font-size: 40pt">
						Schön, dass du da bist!
					</span>
				</div>
			</div>

			<script>
			// Splash Animation
			( function( $ ) {
				$(document).ready(
					function() {
						var navbarTop = $('#navbar').css('top');

						$('#splashContent').delay(2100).fadeOut();
						// Anim 1
						//$('#splash').delay(2500).animate({'height':'90px', 'top':navbarTop},800).animate({'width':'0px'},800).fadeOut();
						// Anim 2
						$('#splash').delay(2500).animate({'height':'90px', 'top':navbarTop},1200).fadeOut();
						// Fade
						//$('#splash').delay(2100).fadeOut(1200);
					}
				);
			} )( jQuery );
			</script>
		
			<?php
		} ?>

		
		<?php wp_footer(); ?>

	</body>     
</html>
