<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Clenney_Beach_Box
 */

get_header();
?>

<section class="blog-header-box no-gutters" data-type="background" data-speed="2">
	<h1 class="blog-header-title-box aligncenter">
		<?php single_post_title(' '); ?>
		
	</h1>
</section>

<div class="wrapper">
	<div class="row no-gutter">
		<div class="col-sm-10 col-sm-offset-1 blog-section">
			<main id="content" class="col-sm-6 col-sm-offset-1" role="main">

				<?php
			while (have_posts()) :
				the_post();

			get_template_part('template-parts/content', get_post_type());

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->

			<!-- SideBar -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
		</div><!-- #primary -->
	</div><!-- Container-->
</div <?php get_footer(); ?>