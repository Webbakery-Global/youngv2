<?php
/**
 * The template for displaying 404 pages (not found)
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>

    <section id="header" class="error py-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center content">
                    <h1><?php _e('Geen pagina gevonden', 'webbakery'); ?>..</h1>
                    <a class="btn btn-gold mt-4 mx-auto" href="<?php echo get_site_url(); ?>">Terug naar de homepage</a>
                </div>
            </div>
        </div>
    </section>


<?php
get_footer();