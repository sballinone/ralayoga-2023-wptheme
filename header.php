<!-- 
	Saskia Brückner - Deine persönliche Agentur 
	www.saskiabrueckner.com
-->

<!DOCTYPE html> 
<html <?php language_attributes(); ?>
	<head> 
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head(); ?>
		
	</head>     
	<body <?php body_class($class); ?>>
	
		<?php wp_body_open(); ?>
		
		
		<?php 
		if ( is_front_page() || is_home() ) {
			?>
		<div id="headerHome" class="parallax" style="background-image: url('<?php
						if(get_theme_mod('home_image') > 0) { 
							echo wp_get_attachment_image_url(get_theme_mod('home_image'), 'full'); 
						} else {
							echo get_theme_file_uri('/assets/images/header/view.jpeg');
						} ?>');">
			<?php
			} else {
			?>
		<div id="header" class="parallax" style="background-image: url('<?php header_image(); ?>')">
			<?php
		} ?>
			
			
			<div id="navbar" class="navbar">
				<div id="logo">
					<img src="<?php echo get_theme_file_uri('/assets/images/logo/logo-navbar2.png'); ?>">
				</div>

				<div id="burgerBtn">
					<label for="navigation" title="Navigation öffnen">
						<div class="burgericon" id="burgericon">
							<div></div>
							<div></div>
							<div></div>
						</div>
					</label>
					<input type="checkbox" id="navigation">
				</div>
				
				<div id="nav">
					<nav>
						<?php 
							wp_nav_menu( 
								array( 
									'theme_location' => 'navMain',
									'container' => false
								) 
							);
						?>
					</nav>
				</div>
			</div>
		</div>