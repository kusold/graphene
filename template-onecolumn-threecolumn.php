<?php
/**
 * Template Name: * Second and Third Level
 *
 * A custom page template with custom sidebars.
 *
 * @package Graphene
 * @since Graphene 1.0.5
 */
 get_header(); ?>

    <?php
    /* Run the loop to output the pages.
     * If you want to overload this in a child theme then include a file
     * called loop-page.php and that will be used instead.
    */
    the_post();
    get_template_part( 'loop', 'page' );
    ?>

<?php get_footer(); ?>