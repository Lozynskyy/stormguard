<?php /*Template Name: Franchising*/ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="page">

    <div class="page__content">

        <?php if ( have_posts() ) :

            while ( have_posts() ) :

                the_post();?>


                <div class="page__info">

                    <?php if( !empty(get_the_content())) : ?>

                        <?php the_content(); ?>

                    <?php else:?>

                        <p>Sorry, but the content is empty right now!</p>

                    <?php endif; ?>

                </div>

            <?php endwhile;

        endif; ?>

    </div>

</section>

<?php get_template_part('template-parts/find-franchise', 'page-franchising'); ?>

<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer(); ?>