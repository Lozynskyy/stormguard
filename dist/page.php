<?php get_header(); ?>

<?php if(have_posts()) :

    while (have_posts()) :

        the_post();

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

        $get_started_section_title = get_field('get_started_section_title');

        $get_started_section_description = get_field('get_started_section_description');

        $get_started_section_residential_link = get_field('get_started_section_residential_link');

        $get_started_section_commercial_link = get_field('get_started_section_commercial_link');

        $get_started_section_insurance_link = get_field('get_started_section_insurance_link');

        $residential_link = get_page_link(83);

        $commercial_link = get_page_link(85);

        $insurance_link = get_page_link(87);

    endwhile;

endif; ?>

<section class="breadcrumb">

    <div class="breadcrumb__content">

        <?php if(function_exists('bcn_display')){

            bcn_display();

        }?>

    </div>

</section>

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

<section class="get-started">

    <div class="get-started__content">

        <h2 class="get-started__title">

            <?php echo $get_started_section_title; ?>

        </h2>

        <p class="get-started__description">

            <?php echo $get_started_section_description; ?>

        </p>

        <div class="get-started__list">

            <div class="get-started__item get-started__item--1">

                <div class="get-started__item__title">

                    <a href="<?php echo $residential_link; ?>" class="get-started__item__link">

                    <span class="get-started__item__text">

                        <?php echo $get_started_section_residential_link; ?>

                    </span>

                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-right-black.png" alt="arrow-right" class="get-started__item__icon">

                    </a>

                </div>

            </div>

            <div class="get-started__item get-started__item--2">

                <div class="get-started__item__title">

                    <a href="<?php echo $commercial_link; ?>" class="get-started__item__link">

                    <span class="get-started__item__text">

                        <?php echo $get_started_section_commercial_link; ?>

                    </span>

                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-right-black.png" alt="arrow-right" class="get-started__item__icon">

                    </a>

                </div>

            </div>

            <div class="get-started__item get-started__item--3">

                <div class="get-started__item__title">

                    <a href="<?php echo $insurance_link; ?>" class="get-started__item__link">

                    <span class="get-started__item__text">

                        <?php echo $get_started_section_insurance_link; ?>

                    </span>

                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-right-black.png" alt="arrow-right" class="get-started__item__icon">

                    </a>

                </div>

            </div>

        </div>

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