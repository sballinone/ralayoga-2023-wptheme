<!-- 
	Saskia Brückner - Deine persönliche Agentur 
	www.saskiabrueckner.com
-->

<!DOCTYPE html> 
<html> 
	<head> 
		<meta charset="utf-8"> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Rabea Langer Yoga</title>         
		
		<?php wp_head(); ?>
		
	</head>     
	<body>
		<div id="header" class="parallax" style="background-image: url('<?php header_image(); ?>">
			<div id="navbar" class="navbar">
				<div id="logo">
					<img src="<?=get_theme_file_uri();?>/assets/images/logo/logo-navbar2.png">
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