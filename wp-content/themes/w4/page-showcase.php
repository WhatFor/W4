<?php

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main site-main-showcase" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

		</main>
	</div>
	
<?php

get_footer();
