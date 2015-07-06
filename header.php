<?php
/**
 * Header template
 *
 * Displays all the header content
 *
 * @package WordPress
 * @subpackage ClearstrapWP
 * @since ClearstrapWP 0.1
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <!--[if lt IE 9]>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/vendor/html5shiv/dist/html5shiv.min.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri()); ?>/respond/dest/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body>
        
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
        <!-- Brand and toggle get grouped for better mobile display --> 
          <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
              <span class="sr-only">Toggle navigation</span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
              <span class="icon-bar"></span> 
            </button> 
            <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
          </div> 
          <!-- Collect the nav links, forms, and other content for toggling --> 
          <div class="collapse navbar-collapse navbar-ex1-collapse"> 
            <?php /* Primary navigation */
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>
          </div>
        </nav>

        <div class="container-fluid">
            
            <!-- Block Page header -->
            <header>
                <div class="row">
                    <div class="col-xs-12">
                        <p>&nbsp</p>
                        <div class="page-header">
                            <h2><?php 
                            the_title();
                            single_tag_title();
                            ?></h2>
                        </div>
                        
                    </div>
                </div>
            </header>
            <!-- Block Page header -->
        </div>
               
