<?php
/**
 * Template Name: News
 */
get_header();
get_template_part('template-parts/content','banner');
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish'
 );
 $query = new WP_Query($args);
?>
<main id="primary" class="site-main">
	<section class="main-container" id="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
				<?php
				if ($query->have_posts()) :

				?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
				<?php

					/* Start the Loop */
					while($query->have_posts()):
                         $query->the_post();

						/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
						get_template_part('template-parts/content', get_post_type());

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
				</div>
				<div class="col-lg-4">
					<?php get_sidebar();?>
				</div>
				<!-- Sidebar Col end-->
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
