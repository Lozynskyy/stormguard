<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="page">

    <div class="page__content">

        <?php if ( have_posts() ) :

            while ( have_posts() ) :

                the_post();?>


                <div class="page__info">

                    <?php the_content(); ?>

                </div>

            <?php endwhile;

        endif; ?>

    </div>

</section>

<?php get_template_part('template-parts/get-started'); ?>

<?php get_template_part('template-parts/find-franchise'); ?>

<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer(); ?>