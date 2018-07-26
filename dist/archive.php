<?php
/*
Template Name: Archives
*/
get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

    <div id="container" class="storm-temp">
        <div id="content" class="storm-temp__content" role="main">

            <?php the_post(); ?>

            <h1 class="storm-temp__title">

                <?php the_title(); ?>

            </h1>

            <?php get_search_form(); ?>

            <h2 class="storm-temp__title storm-temp__title--sm">Archives by Month:</h2>

            <ul class="storm-temp__list">
                <?php wp_get_archives('type=monthly'); ?>
            </ul>

            <h2 class="storm-temp__title storm-temp__title--sm">Archives by Subject:</h2>

            <ul class="storm-temp__list">
                <?php wp_list_categories(); ?>
            </ul>

        </div><!-- #content -->
    </div><!-- #container -->
<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer(); ?>