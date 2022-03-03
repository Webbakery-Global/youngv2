<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/vfp6lcl.css">
    <link href="<?php echo get_template_directory_uri(); ?>/css/aos.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/all.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/isotope.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://kit.fontawesome.com/eb84190e1d.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action('wp_body_open'); ?>
<div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <div id="wrapper-navbar">
        <nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">
            <div class="container ">

                <a href="<?php echo get_site_url(); ?>/">
                    <svg id="logo" data-name="Laag 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 49.46 8.93">
                        <path class="letter"
                              d="M275.15,422.33,272,417.45h2.33l1.8,3.18,1.91-3.18h2.22l-3.2,4.88V426h-1.87Z"
                              transform="translate(-271.96 -417.24)"/>
                        <path class="letter"
                              d="M281.09,421.7a4.8,4.8,0,0,1,.34-1.85,4.08,4.08,0,0,1,.95-1.4,4.27,4.27,0,0,1,1.46-.9,5.59,5.59,0,0,1,3.67,0,4.23,4.23,0,0,1,1.45.9,3.82,3.82,0,0,1,1,1.4,5.06,5.06,0,0,1,0,3.7,4,4,0,0,1-1,1.41,4.06,4.06,0,0,1-1.45.89,5.42,5.42,0,0,1-3.67,0,4.1,4.1,0,0,1-1.46-.89,4.22,4.22,0,0,1-.95-1.41A4.76,4.76,0,0,1,281.09,421.7Zm1.94,0a3,3,0,0,0,.19,1.1,2.44,2.44,0,0,0,.53.86,2.38,2.38,0,0,0,.84.58,2.85,2.85,0,0,0,1.08.2,2.94,2.94,0,0,0,1.09-.2,2.44,2.44,0,0,0,.83-.58,2.62,2.62,0,0,0,.54-.86,3.42,3.42,0,0,0,0-2.19,2.77,2.77,0,0,0-.54-.87,2.56,2.56,0,0,0-.83-.57,2.75,2.75,0,0,0-1.09-.2,2.67,2.67,0,0,0-1.08.2,2.5,2.5,0,0,0-.84.57,2.58,2.58,0,0,0-.53.87A3,3,0,0,0,283,421.7Z"
                              transform="translate(-271.96 -417.24)"/>
                        <path class="letter"
                              d="M299.65,422.67a4,4,0,0,1-.23,1.4,3,3,0,0,1-.67,1.1,3.07,3.07,0,0,1-1.13.73,4.58,4.58,0,0,1-3.1,0,3.07,3.07,0,0,1-1.13-.73,3,3,0,0,1-.67-1.1,4,4,0,0,1-.23-1.4v-5.22h1.87v5.15a1.9,1.9,0,0,0,.13.73,1.74,1.74,0,0,0,.35.59,1.55,1.55,0,0,0,.55.38,1.75,1.75,0,0,0,1.37,0,1.6,1.6,0,0,0,.54-.38,1.74,1.74,0,0,0,.35-.59,1.9,1.9,0,0,0,.13-.73v-5.15h1.87Z"
                              transform="translate(-271.96 -417.24)"/>
                        <path class="letter"
                              d="M302.69,417.45h2.55l3.61,5.91h0v-5.91h1.88V426H308.3l-3.71-6.05h0V426h-1.88Z"
                              transform="translate(-271.96 -417.24)"/>
                        <path class="letter"
                              d="M321.42,425.35a6.4,6.4,0,0,1-1.73.62,8.62,8.62,0,0,1-1.83.2,5.19,5.19,0,0,1-1.84-.32,4.06,4.06,0,0,1-1.45-.89,4,4,0,0,1-.95-1.41,5.06,5.06,0,0,1,0-3.7,3.82,3.82,0,0,1,.95-1.4,4.23,4.23,0,0,1,1.45-.9,5.19,5.19,0,0,1,1.84-.31,6.63,6.63,0,0,1,1.88.25,3.6,3.6,0,0,1,1.5.84l-1.32,1.44a2.67,2.67,0,0,0-.86-.6,3,3,0,0,0-1.2-.2,2.75,2.75,0,0,0-1.09.2,2.56,2.56,0,0,0-.83.57,2.77,2.77,0,0,0-.54.87,3.42,3.42,0,0,0,0,2.19,2.62,2.62,0,0,0,.54.86,2.44,2.44,0,0,0,.83.58,2.94,2.94,0,0,0,1.09.2,3.56,3.56,0,0,0,1.05-.14,3.37,3.37,0,0,0,.71-.28v-1.38H318.1v-1.73h3.32Z"
                              transform="translate(-271.96 -417.24)"/>
                    </svg>
                </a>
                <!-- Hamburger menu -->
                <!-- The WordPress Menu goes here -->

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'mobile',
                        'container_class' => '',
                        'container_id' => 'navbarNavDropdown',
                        'menu_class' => 'navbar-nav',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'depth' => 3,
                        'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
     

                <div class="hamburger d-lg-none">
                    <div class="hamburgerTop"></div>
                    <div class="hamburgerMiddle"></div>
                    <div class="hamburgerBottom"></div>
                </div>

            </div><!-- .container -->
        </nav><!-- Navigation end -->
    </div><!-- #wrapper-navbar end -->
