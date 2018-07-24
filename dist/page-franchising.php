<?php /*Template Name: Franchising*/ ?>

<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

    <section class="franchising">

        <div class="franchising__content">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :

                    the_post();

                    $image = get_field('page_image');

                    if( !empty($image) ): ?>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="franchising__image">

                    <?php endif; ?>

                    <?php

                    if( have_rows('articles') ):

                        while ( have_rows('articles') ) : the_row();?>

                            <h2 class="franchising__title">

                                <?php the_sub_field('article_title');?>

                            </h2>

                            <p class="franchising__text">

                                <?php the_sub_field('article_content');?>

                            </p>

                        <?php endwhile;

                    endif;

                    ?>

                <?php endwhile;

            endif; ?>

        </div>

        <div style="clear: both"></div>

    </section>

<?php get_template_part('template-parts/find-franchise', 'page-franchising'); ?>

<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer(); ?>