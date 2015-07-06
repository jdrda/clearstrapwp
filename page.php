<?php
/**
 * Template for full width page
 *
 * 
 * Template Name: No sidebar
 * 
 * @package WordPress
 * @subpackage ClearstrapWP
 * @since ClearstrapWP 0.1
 */

get_header(); ?>
    
	<div id="primary" class="col-xs-12">
		<main id="main" class="site-main" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			the_content();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
