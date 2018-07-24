<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

    <section class="page">

        <div class="page__content">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :

                    the_post();

                    $image = get_field('page_image');

                    if( !empty($image) ): ?>

                        <div class="page__image__wrapper">

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="page__image">

                        </div>

                    <?php endif; ?>

                    <div class="page__info">

                        <h2 class="page__title">

                            <?php the_title(); ?>

                        </h2>

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