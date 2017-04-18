<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
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


				<div id ="nav-bar-with-button">

					<div id="menu-buttons-container">
						<a href="/wordpress"> 
							<span>
								Home
							</span>
						</a>

						<a href="/wordpress/sites-for"> 
							<span>
								Services
							</span>
						</a>

						<a href="/wordpress/showcase"> 
							<span>
								Clients
							</span>
						</a>

						<a href="/wordpress/about"> 
							<span>
								About
							</span>
						</a>

						<form class="inline-el" action="/wordpress/contact">
							<button type="submit" class="cta-button-main">Let's Talk</button>
						</form>

					</div>
				</div>
			</div>
		</nav>

		<div id="header-nav-fill"></div>
		
	</header>

	<div id="content" class="site-content">
