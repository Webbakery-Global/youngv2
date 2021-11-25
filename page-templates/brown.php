<?php
/**
 * Template Name: Brown
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header(); ?>

    <div id="team">
        <?php the_content(); ?>
    </div>

<?php
get_footer();


