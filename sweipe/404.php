<?php get_header(); ?>

<main id="main" class="content-inner site-main" role="main">

    <section class="tc-404">
        <h2><?php esc_html_e( 'Ooooops !', 'sweipe' ) ?></h2>

        <h1><?php esc_html_e( '4o4', 'sweipe' ) ?></h1>

        <p><?php esc_html_e( 'The Page you are looking for is either deleted or never been here. Yet, you can still make a search from below or go to Home page...', 'sweipe' ) ?></p>

        <?php get_search_form(); ?>

        <nav>
            <a href="<?php echo esc_url( home_url( '/' ) ) ?>"><i class="uiicon-home60"></i> <?php esc_html_e( 'Go to Home', 'sweipe' ) ?></a>
        </nav>
    </section><!-- .tc-404 | ENDS -->

</main><!-- .site-main -->

<?php get_footer(); ?>
