<div class="image parallax" style="height: 400px; background-image: url('<?=get_theme_file_uri();?>/assets/images/header/castel.jpeg');">
			
		</div>
		
		<div id="footer">
			<div id="footerMain">
				<?php 
					get_sidebar( 'footer' ); 
				?>
			</div>
			<div id="footerBottom">
				<span style="float: left" id="footerNav">
					&copy; <?=date('Y');?> RaLa Yoga · 
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
							<img src="<?=get_theme_file_uri();?>/assets/images/logo/author2.png" style="vertical-align: middle; border=0; height: 30px">
						</a>
				</span>
			</div>
		</div>
		
		<?php wp_footer(); ?>

	</body>     
</html>
