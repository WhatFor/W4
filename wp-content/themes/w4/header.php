<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php 
			wp_head(); 

			wp_enqueue_script( 'menu_script', get_stylesheet_directory_uri() . '/js/menu.js', array('jquery'));
		?>

	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">

		<header id="masthead" class="site-header" role="banner">

		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php endif; ?>
		</div>


		<nav id="site-navigation" class="main-navigation navbar-fixed" role="navigation">
			<div id="main-nav-container">

				<a class="inline-el" href="/wordpress">
					<div id="nav-logo"></div>
					<div id="nav-logo-text">Web Studio</div>
					
				</a>

				<a id="mobile-burger">
					<span>menu </span>

					<div class="hamburger hamburger--spring">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</a>

				<nav id ="nav-bar-with-button">
					<div id="menu-buttons-container">
						<ul class="active">

							<li class="menu__item"><a class="menu__link" href="/wordpress">Home</a></li>

							<li class="menu__item"><a class="menu__link" href="/wordpress/sites-for">Services</a></li>

							<li class="menu__item"><a class="menu__link" href="/wordpress/showcase">Clients</a></li>

							<li class="menu__item"><a class="menu__link" href="/wordpress/about">About</a></li>

							<li class="menu__item"><a class="menu__link menu-contact" href="/wordpress/contact">Contact Us</a></li>

							<form class="menu-link" action="/wordpress/contact">
								<button type="submit" class="cta-button-main">Let's Talk</button>
							</form>

						</ul>
					</div>
				</nav>
			</div>
		</nav>

		<div id="header-nav-fill"></div>
		
	</header>

	<div id="content" class="site-content">
