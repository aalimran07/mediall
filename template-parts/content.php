<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mediall
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header">
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;

        if ('post' === get_post_type()) : ?>
        <div class="entry-meta">
            <?php mediall_posted_on(); ?>
        </div><!-- .entry-meta -->
        <?php
        endif; ?>
    </div><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
        <a class="read-more" href="<?php echo esc_url(get_permalink()); ?>"><?php esc_html_e('Read More', 'mediall'); ?>
        </a>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

