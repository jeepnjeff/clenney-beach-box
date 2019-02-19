<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Clenney_Beach_Box
 */

get_header();
?>



		<?php if (have_posts()) : ?>
		<section class="search-header-box no-gutters">
	<h1 class="gallery-header-title galler-header-title-box aligncenter">BLOG SEARCH</h1>
</section>
<div class="container search-body">
	<div id="primary" class="row">
		<main id="primary" class=" col-sm-8">
		
					<?php
					/* translators: %s: search query. */
				printf(esc_html__('Search Results for: %s', 'clenneybeachbox'), '<span>' . get_search_query() . '</span>');
				?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
		while (have_posts()) :
			the_post();

		/**
		 * Run the loop for the search to output the results.
		 * If you want to overload this in a child theme then include a file
		 * called content-search.php and that will be used instead.
		 */
		get_template_part('template-parts/content', 'search');

		endwhile;

		the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>
</main>
		<aside class="search-sidebar col-sm-4">
			<?php get_sidebar();; ?>
		</aside>
	</div>
</div>
		

<?php

get_footer(); ?>
