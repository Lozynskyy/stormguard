<?php get_header(); ?>

<?php $service_page_query = new WP_Query( array(

    'post_type' => 'page',

    'name'=>'service'

) );

if($service_page_query -> have_posts()) :

    while ($service_page_query -> have_posts()) :

        $service_page_query -> the_post();

        $services_icons_section_title = get_field('services_icons_section_title');

        $services_icon_section_description = get_field('services_icon_section_description');

        $services_icons_section_button = get_field('services_icons_section_button');

    endwhile;

    wp_reset_postdata();

endif; ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="service">

    <div class="service__content">

        <?php if ( have_posts() ) :

            while ( have_posts() ) :

                the_post();

                $image = get_the_post_thumbnail_url();

                $current_service = get_the_title();

                if( !empty($image) ): ?>

                    <div class="service__image__wrapper">

                        <img src="<?php echo $image; ?>" alt="service image" class="service__image">

                    </div>

                <?php endif; ?>

                <div class="service__info">

                    <h2 class="service__title">

                        <?php the_title(); ?>

                    </h2>

                    <?php the_content(); ?>

                </div>

            <?php endwhile;

        endif; ?>

    </div>

</section>

<section class="services">

    <div class="services__content">

        <h2 class="services__title">

            <?php echo $services_icons_section_title ?>

        </h2>

        <p class="services__description">

            <?php echo $services_icon_section_description ?>

        </p>

        <div class="services__table">

            <?php $services_all_query = new WP_Query( array( 'post_type' => 'service' ) ); ?>

            <?php if($services_all_query -> have_posts()) : ?>

                <?php while ( $services_all_query -> have_posts() ) :

                    $services_all_query -> the_post();

                    if (get_the_title() != $current_service) :

                        $icon = get_field('service_icon'); ?>

                        <div class="services__item">

                            <div class="services__item__icon__circle">

                                <?php if( !empty($icon) ): ?>

                                    <a href="<?php the_permalink(); ?>" class="services__item__link--image">

                                        <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" class="services__item__icon">

                                    </a>

                                <?php endif; ?>

                            </div>

                            <h3 class="services__item__title">

                                <a href="<?php the_permalink(); ?>" class="services__item__link">

                                    <?php the_title(); ?>

                                </a>

                            </h3>

                            <p class="services__item__description">

                                <?php echo get_field('service_short_info'); ?>

                            </p>

                        </div>

                    <?php endif;

                endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <?php endif; ?>

        </div>

        <button class="services-button">

            <?php

            if( $services_icons_section_button ): ?>

                <a href="<?php echo $services_icons_section_button['url']; ?>" class="button__link">

                    <?php echo $services_icons_section_button['title']; ?>

                </a>

            <?php endif; ?>

        </button>

    </div>

</section>

<?php get_template_part('template-parts/find-franchise'); ?>

<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer(); ?>
