<?php get_header(); ?>

<?php $services_page_query = new WP_Query( array(

    'post_type' => 'page',

    'name'=>'services'

) );

if($services_page_query -> have_posts()) :

    while ($services_page_query -> have_posts()) :

        $services_page_query -> the_post();

        $services_icons_section_title = get_field('services_icons_section_title');

        $services_icon_section_description = get_field('services_icon_section_description');

    endwhile;

    wp_reset_postdata();

endif; ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="all-sevices">

    <div class="all-services__content">

        <h2 class="all-services__title">

            <?php echo $services_icons_section_title; ?>

        </h2>


        <p class="all-services__description">

            <?php echo $services_icon_section_description ?>

        </p>

        <div class="all-services__table">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :

                    the_post(); ?>

                    <div class="all-services__item">

                        <a href="<?php the_permalink(); ?>" class="all-services__item__link">

                            <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="service image" class="all-services__item__image">

                        </a>

                        <h3 class="all-services__item__title">

                            <a href="<?php the_permalink(); ?>" class="all-services__item__link">

                                <?php the_title(); ?>

                            </a>

                        </h3>

                    </div>

                <?php endwhile;

            endif; ?>

        </div>

    </div>

</section>

<?php get_template_part('template-parts/find-franchise'); ?>

<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer(); ?>
