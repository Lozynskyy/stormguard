<?php /* Template Name: Home */?>

<?php get_header('front-page'); ?>

<?php if(have_posts()) :

    while (have_posts()) :

        the_post();

        $contact_block_title = get_field('contact_block_title');

        $contact_block_description = get_field('contact_block_description');

        $contact_form = get_field('contact_form_shortcode');

        $gallery_block_title = get_field('gallery_block_title');

        $gallery_block_description = get_field('gallery_block_description');

        $gallery_block_link_text = get_field('gallery_block_link_text');

        $last_posts_section_title = get_field('last_posts_section_title');

        $last_posts_section_read_more = get_field('last_posts_section_read_more');

        $last_posts_section_button_text = get_field('last_posts_section_button_text');

        $comments_slider_title = get_field('comments_slider_title');

        $get_started_section_title = get_field('get_started_section_title');

        $get_started_section_description = get_field('get_started_section_description');

        $get_started_section_residential_link = get_field('get_started_section_residential_link');

        $get_started_section_commercial_link = get_field('get_started_section_commercial_link');

        $get_started_section_insurance_link = get_field('get_started_section_insurance_link');

        $residential_link = get_page_link(83);

        $commercial_link = get_page_link(85);

        $insurance_link = get_page_link(87);

        $services_icons_section_title = get_field('services_icons_section_title');

        $services_icon_section_description = get_field('services_icon_section_description');

        $services_icons_section_button_text = get_field('services_icons_section_button_text');

        $franchise_section_title = get_field('franchise_section_title');

        $franchise_section_description = get_field('franchise_section_description');

        $franchise_section_button_text = get_field('franchise_section_button_text');

        $franchise_section_placeholder = get_field('franchise_section_placeholder');

    endwhile;

endif; ?>

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

<section class="sevices">

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

            endif; ?>

        </div>

        <button class="services-button">

            <a href="<?php echo get_post_type_archive_link( 'service' ); ?>" class="button__link">

                <?php echo $services_icons_section_button_text ?>

            </a>

        </button>

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

<section class="clients-comments">

    <div class="clients-comments__content">

        <h2 class="clients-comments__title">

            <?php echo $comments_slider_title; ?>

        </h2>

        <div class="my-slick">

            <?php $comments_query = new WP_Query( array( 'post_type' => 'comment' ) );

            if( $comments_query -> have_posts() ) :

                while( $comments_query -> have_posts() ) :

                    $comments_query -> the_post();

                    $comment_author = get_field('comment_author');

                    $comment_author_additional_info = get_field('comment_author_additional_info');?>

            <div class="my-slick__item">

                <div class="my-slick__item__comment">

                    <?php the_content(); ?>

                </div>

                <p class="my-slick__item__com-author">

                    <?php echo $comment_author; ?><br>

                    <?php echo $comment_author_additional_info; ?>

                </p>

            </div>

                <?php endwhile;

            endif; ?>

        </div>

    </div>

</section>

<section class="latest-news">

    <div class="latest-news__content">

        <h2 class="latest-news__title">

            <?php echo $last_posts_section_title; ?>

        </h2>

        <div class="latest-news__list">

            <?php $args = array('posts_per_page' => 3);

            $the_query = new WP_Query( $args ); ?>

            <?php if($the_query -> have_posts()) :

                while ($the_query -> have_posts() ) :

                    $the_query -> the_post();

                    $image = get_field('post_image');

                    $author = get_field('post_author');

                    $post_date_month = get_the_date( 'M' );

                    $post_date_day = get_the_date( 'd' );?>


                    <div class="latest-news__item">

                        <div class="latest-news__item__date">

                            <span class="latest-news__item__date__month">

                                <?php echo $post_date_month; ?>

                            </span>

                            <span class="latest-news__item__date__day">

                                <?php echo $post_date_day; ?>

                            </span>

                        </div>

                        <div>

                            <?php if( !empty($image) ): ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="latest-news__item__image">

                            <?php endif; ?>

                            <div class="latest-news__item__info">

                                <h3 class="latest-news__item__title">

                                    <?php the_title(); ?>

                                </h3>

                                <p class="latest-news__item__short">

                                    <?php echo get_excerpt(); ?>

                                    <a href="<?php the_permalink(); ?>" class="latest-news__item__link">

                                        <?php echo $last_posts_section_read_more; ?>

                                    </a>

                                </p>

                            </div>

                        </div>

                        <span class="latest-news__item__author">

                            By <?php echo $author; ?>

                        </span>

                    </div>

                <?php endwhile; endif; ?>

        </div>

        <button class="ln-button">

            <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="button__link">

                <?php echo $last_posts_section_button_text; ?>

            </a>

        </button>

    </div>

</section>

<section class="contact-gallery">

    <div class="contact-gallery__content">

        <div class="contact-gallery__contact contact-gallery__item">

            <h2 class="contact-gallery__title">

                <?php echo $contact_block_title; ?>

            </h2>

            <p class="contact-gallery__description">

                <?php echo $contact_block_description; ?>

            </p>

            <?php echo do_shortcode($contact_form); ?>

        </div>

        <div class="contact-gallery__gallery contact-gallery__item">

            <h2 class="contact-gallery__title">

                <?php echo $gallery_block_title; ?>

            </h2>

            <p class="contact-gallery__description">

                <?php echo $gallery_block_description; ?>

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

            <button class="cg-button">

                <a href="<?php echo get_post_type_archive_link( 'gallery_item' ); ?>" class="button__link">

                    <?php echo $gallery_block_link_text ?>

                </a>

            </button>

        </div>

    </div>

</section>

<?php get_footer(); ?>