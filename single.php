<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<div class="container post_header">
    <div class="row">
        <div class="col-sm-12">
            <h1><?php the_title();?></h1>
        </div>
    </div>
</div>

<?php
the_content();


get_footer();
