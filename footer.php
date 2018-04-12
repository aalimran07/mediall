<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mediall
 */

?>

    </div><!-- #content -->
<?php get_template_part('template-parts/footer', 'widget'); ?>
    <div id="colophon" class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="site-info">
                        <?php
                            /* translators: 1: Theme name, 2: Theme author. */
                            printf(esc_html__('© 2017 Surgecare template. All rights reserved', 'mediall'), 'mediall', '<a href="http://theimran.com">Abdullah Al Imran</a>');
                        ?>
                    </div><!-- .site-info -->
                </div>
            </div>
        </div>
    </div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
