<?php
    $services_icons_section_title = get_field('services_icons_section_title');

    $services_icon_section_description = get_field('services_icon_section_description');

    $services_icons_section_button_text = get_field('services_icons_section_button_text');

?>

<section class="services">

    <div class="services__content">

        <h2 class="services__title">

            <?php echo $services_icons_section_title ?>

        </h2>

        <p class="services__description">

            <?php echo $services_icon_section_description ?>

        </p>

        <div class="services__table">

            <?php $services_all_query = new WP_Query( array('post_type' => 'service') );

            if ( $services_all_query -> have_posts() ) :

                while ( $services_all_query -> have_posts() ) :

                    $services_all_query -> the_post();

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

                <?php endwhile;

                wp_reset_postdata();

            endif; ?>

        </div>

        <button class="services-button">

            <a href="<?php echo get_post_type_archive_link( 'service' ); ?>" class="button__link">

                <?php echo $services_icons_section_button_text ?>

            </a>

        </button>

    </div>

</section>