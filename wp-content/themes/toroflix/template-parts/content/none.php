<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toroflix
 */

?>     
<section class="error-404 not-found AAIco-sentiment_very_dissatisfied">
    <header class="Top">
        <h1 class="Title"><?php esc_html_e( 'Oops! This page can be found.', 'toroflix' ); ?></h1>
        <p><?php esc_html_e( 'Looks like nothing was found at this location. Maybe try one of the links below or a search?', 'toroflix' ); ?></p>
    </header><!-- .page-header -->
    <div class="page-content">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( __( 'ready to post your first post? <a href="%1$s">Start Here</a>.', 'toroflix' ), esc_url( admin_url( 'admin.php?page=tr-movies-movie&action=add' ) ) ); ?></p>

        <?php elseif ( is_search() ) : ?>

            <p><?php _e( 'Sorry, nothing matches your search terms. Please try again with a few different keywords.', 'toroflix' ); ?></p>
            <?php get_search_form(); ?>

        <?php else : ?>

            <p><?php _e( 'It looks like we can not find what you are looking for. Maybe the search might help.', 'toroflix' ); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>
    </div><!-- .page-content -->
</section>                		    