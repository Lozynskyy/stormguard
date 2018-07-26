<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div id="primary" class="storm-temp storm-temp__404">
    <div id="content" class="storm-temp__content storm-temp__content__404" role="main">

        <header class="page-header">

            <h1 class="storm-temp__title"><?php _e( 'Not Found' ); ?></h1>

        </header>

        <div class="page-wrapper">

                <h2 class="storm-temp__title storm-temp__title--sm" style="color: black; text-align: center">
                    <?php _e( 'This is somewhat embarrassing, isn’t it?' ); ?>
                </h2>

        </div><!-- .page-wrapper -->

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer(); ?>