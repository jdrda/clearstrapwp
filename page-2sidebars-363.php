<?php
/**
 * Template for 3 columns in 3:6:3 ratio
 *
 * 
 * Template Name: 2 sidebars (3:6:3)
 * 
 * @package WordPress
 * @subpackage ClearstrapWP
 * @since ClearstrapWP 0.1
 */

get_header(); ?>
<div class="container-fluid">
        <div class="row">
        <div class="col-xs-12 col-sm-3">
           <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
	<div id="primary" class="col-xs-12 col-sm-6">
            <hr class="hidden-sm hidden-md hidden-lg">
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
                <hr class="hidden-sm hidden-md hidden-lg">
	</div><!-- .content-area -->
        
        <div class="col-xs-12 col-sm-3">
           <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
        </div>
</div>

<?php get_footer(); ?>
