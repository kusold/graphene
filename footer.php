<?php

/**

 * The template for displaying the footer.

 *

 * Closes the <div> for #content, #content-main and #container, <body> and <html> tags.

 *

 * @package Graphene

 * @since Graphene 1.0

 */



?>

<?php do_action( 'graphene_bottom_content' ); ?>

    </div><!-- #content-main -->




    <?php



        /* Sidebar 2 on the right side? */

        if ( graphene_column_mode() == 'three_col_left' ){

            get_sidebar( 'two' );

        }

        if ( graphene_column_mode() == 'two_col_right_lowerlevel' ){

            get_sidebar( 'three' );

        }



		/* Sidebar 1 on the right side? */

        if ( in_array( graphene_column_mode(), array( 'two_col_left', 'three_col_left', 'three_col_center' ) ) ){

            get_sidebar();

        }



    ?>




</div><!-- #content -->





<?php do_action('graphene_before_footer'); ?>



<div id="footer" class="container_16">





	<?php if ( has_nav_menu( 'footer-menu' ) || ! $graphene_settings['hide_return_top'] ) : ?>

	<div class="footer-menu-wrap grid_16">

    	<ul id="footer-menu" class="">

			<?php /* Footer menu */

            $args = array(

                'container' => '',

                'fallback_cb' => 'none',

                'depth' => 2,

                'theme_location' => 'footer-menu',

                'items_wrap' => '%3$s'

            );

            wp_nav_menu(apply_filters('graphene_footer_menu_args', $args));

            ?>

            <?php if ( ! $graphene_settings['hide_return_top'] ) : ?>

        	<li class="menu-item return-top"><a href="#"><?php _e('Return to top', 'graphene'); ?></a></li>

            <?php endif; ?>

        </ul>

    </div>

    <?php endif; ?>



  <?php /* Get the footer widget area */ ?>


  <?php get_template_part('sidebar', 'footer'); ?>

    <?php if ( ! $graphene_settings['hide_copyright'] ) : ?>

    <div id="copyright" class="grid_16">

		<?php if ( $graphene_settings['copy_text'] == '' && ! $graphene_settings['show_cc'] ) : ?>

            <p>

            <span style="font-size: 14px">25221 Miles Road, Suite F, Warrensville Heights, OH 44128, 216-514-1600</span><br />
            <?php printf( '&copy; %1$s %2$s.', date( 'Y' ), get_bloginfo( 'name' ) ); ?>

            </p>

        <?php elseif ( ! $graphene_settings['show_cc'] ) : ?>

        	<?php

				if ( ! stristr( $graphene_settings['copy_text'], '</p>' ) ) { $graphene_settings['copy_text'] = wpautop( $graphene_settings['copy_text'] ); }

				echo $graphene_settings['copy_text'];

			?>

 	    <?php endif; ?>



        <?php if ( $graphene_settings['show_cc'] ) : ?>

        	<?php /* translators: %s will replaced by a link to the Creative Commons licence page, with "Creative Commons Licence" as the link text. */?>

        	<p>

				<?php printf( __( 'Except where otherwise noted, content on this site is licensed under a %s.', 'graphene' ), '<a href="http://creativecommons.org/licenses/by-nc-nd/3.0/">' . __( 'Creative Commons Licence', 'graphene' ) . '</a>' ); ?>

            </p>

        	<p class="cc-logo"><span><?php _e( 'Creative Commons Licence BY-NC-ND', 'graphene' ); ?></span></p>

        <?php endif; ?>



    	<?php do_action('graphene_copyright'); ?>

    </div>

<?php endif; ?>





    <?php do_action('graphene_footer'); ?>

</div><!-- #footer -->



<?php do_action('graphene_after_footer'); ?>



</div><!-- #container -->



<?php if (!get_theme_mod('background_image', false) && !get_theme_mod('background_color', false)) : ?>

    </div><!-- .bg-gradient -->

<?php endif; ?>



<?php wp_footer(); ?>

</body>

</html>
