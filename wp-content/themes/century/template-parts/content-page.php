<?php
/**
 * Template part for displaying page content in page.php.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package mpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mpress' ), 'after'  => '</div>',) ); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php mpress_entry_meta( array( 'edit' => true ), false ); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->

