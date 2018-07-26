<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

    <div class="storm-temp">
        <div id="primary" class="storm-temp__content">
            <main id="main" class="site-main" role="main">

                <?php get_search_form(); ?>

                <?php
                if(have_posts()):
                    while (have_posts()):
                        the_post(); ?>

                        <p><?php the_title(); ?></p>

                    <?php endwhile;
                endif;?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->
<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer();