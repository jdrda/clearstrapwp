<?php

/**
 * Main template file
 *
 * 
 * Common footer for all pages
 * 
 * @package WordPress
 * @subpackage ClearstrapWP
 * @since ClearstrapWP 0.1
 */
get_header();
?>

<div class="container-fluid">
        <div class="row">
        <div class="col-xs-12">
<?php

// Start the loop.
while (have_posts()) : the_post();

   the_content();

// End the loop.
endwhile;
?>
        </div>
        </div>

<?php get_footer(); ?>
