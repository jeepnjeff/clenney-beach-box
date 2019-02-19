<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clenney_Beach_Box
 */

get_header();
?>

<?php if (have_posts()) : ?>

<section class="blog-header-box no-gutters" data-type="background" data-speed="2">
	<h1 class="blog-header-title-box aligncenter">
		<?php single_cat_title(' '); ?>
		
		<?php
					// Show an optional term description.
	$term_description = term_description();
	if (!empty($term_description)) :
		printf('<small class="taxonomy-description">%s</small>', $term_description);
	endif;
	?>
	</h1>
</section>

<div class="wrapper">
	<div class="row no-gutter">
		<div class="col-sm-10 col-sm-offset-1 blog-section">
			<main id="content" class="col-sm-6 col-sm-offset-1 blog-content" role="main">

			<?php
		the_archive_title('<h1 class="page-title">', '</h1>');
		the_archive_description('<div class="archive-description">', '</div>');
		?>


			<?php
			/* Start the Loop */
		while (have_posts()) :
			the_post();

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
		</main>
		<aside class="col-sm-4 archive-sidebar">
			<?php get_sidebar();; ?>
		</aside>
	</div>
</div>
	</div>


<?php

get_footer();
?>