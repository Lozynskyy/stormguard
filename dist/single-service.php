<?php get_header(); ?>

<?php $service_page_query = new WP_Query( array(

    'post_type' => 'page',

    'name'=>'service'

) );

if($service_page_query -> have_posts()) :

    while ($service_page_query -> have_posts()) :

        $service_page_query -> the_post();

        $contact_block_title = get_field('contact_block_title');

        $contact_block_description = get_field('contact_block_description');

        $contact_block_button_1_text = get_field('contact_block_button_1_text');

        $contact_block_button_2_text = get_field('contact_block_button_2_text');

        $gallery_block_title = get_field('gallery_block_title');

        $gallery_block_description = get_field('gallery_block_description');

        $gallery_block_link_text = get_field('gallery_block_link_text');

        $franchise_section_title = get_field('franchise_section_title');

        $franchise_section_description = get_field('franchise_section_description');

        $franchise_section_button_text = get_field('franchise_section_button_text');

        $franchise_section_placeholder = get_field('franchise_section_placeholder');

        $services_icons_section_title = get_field('services_icons_section_title');

        $services_icon_section_description = get_field('services_icon_section_description');

        $services_icons_section_button_text = get_field('services_icons_section_button_text');

    endwhile;

    wp_reset_postdata();

endif; ?>

<section class="breadcrumb">

    <div class="breadcrumb__content">

        <?php if(function_exists('bcn_display')){

            bcn_display();

        }?>

    </div>

</section>

<section class="service">

    <div class="service__content">

        <?php if ( have_posts() ) :

            while ( have_posts() ) :

                the_post();

                $image = get_field('service_image');

                $current_service = get_the_title();

                if( !empty($image) ): ?>

                    <div class="service__image__wrapper">

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="service__image">

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

<section class="sevices">

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

            <a href="<?php echo get_post_type_archive_link( 'service' ); ?>" class="button__link">

                <?php echo $services_icons_section_button_text ?>

            </a>

        </button>

    </div>

</section>

<section class="find-franchise">

    <div class="find-franchise__content">

        <div class="find-franchise__content__item find-franchise__content__item--left">

            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/map-marker.png" alt="map-marker">

            <div class="find-franchise__text">

                <p class="find-franchise__text__top">

                    <?php echo $franchise_section_title; ?>

                </p>

                <p class="find-franchise__text__bot">

                    <?php echo $franchise_section_description; ?>

                </p>

            </div>

        </div>

        <div class="find-franchise__content__item find-franchise__content__item--right">

            <input type="text" placeholder="<?php echo $franchise_section_placeholder; ?>" class="ff-input">

            <button class="ff-button">

                <?php echo $franchise_section_button_text ?>

            </button>

        </div>

    </div>

</section>

<section class="contact-gallery">

    <div class="contact-gallery__content">

        <div class="contact-gallery__contact contact-gallery__contact--short contact-gallery__item">

            <h2 class="contact-gallery__title">

                <?php echo $contact_block_title; ?>

            </h2>

            <p class="contact-gallery__description">

                <?php echo $contact_block_description; ?>

            </p>

            <button class="cg-contact-button">

                <?php echo $contact_block_button_1_text; ?>

            </button>

            <button class="cg-contact-button">

                <?php echo $contact_block_button_2_text; ?>

            </button>

        </div>
        <div class="contact-gallery__gallery contact-gallery__item">

            <h2 class="contact-gallery__title">

                <?php echo $gallery_block_title; ?>

            </h2>

            <p class="contact-gallery__description">

                <?php echo $gallery_block_description; ?>

                <a href="<?php echo get_post_type_archive_link( 'gallery_item' ); ?>" class="contact-gallery__description__link">

                    <?php echo $gallery_block_link_text; ?>

                </a>

            </p>

            <div class="contact-gallery__gallery__body">

                <?php $gallery_query = new WP_Query( array(

                    'post_type' => 'gallery_item',

                    'posts_per_page' => 8

                ) );

                if ( $gallery_query -> have_posts() ) :

                    while ( $gallery_query -> have_posts() ) :

                        $gallery_query -> the_post();

                        $image = get_field('photo'); ?>

                        <?php if( !empty($image) ): ?>

                        <a href="<?php the_permalink(); ?>">

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="contact-gallery__gallery__item">

                        </a>

                    <?php endif;

                    endwhile;

                endif; ?>

            </div>

        </div>

    </div>

</section>

<?php get_footer(); ?>
