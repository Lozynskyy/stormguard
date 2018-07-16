<?php
/*Template Name: Blog*/

get_header();?>

<?php $home_page_query = new WP_Query( array(

    'post_type' => 'page',

    'name'=>'blog'

) );

if($home_page_query -> have_posts()) :

    while ($home_page_query -> have_posts()) :

        $home_page_query -> the_post();

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

    endwhile;

endif; ?>

<section class="breadcrumb">

    <div class="breadcrumb__content">

        <?php if(function_exists('bcn_display')){

            bcn_display();

        }?>

    </div>

</section>

<section class="blog">

    <div class="blog__content">

        <?php if(have_posts()) :

            while (have_posts() ) :

                the_post();

                $image = get_field('post_image');

                $author = get_field('post_author');

                $post_read_more = get_field('post_read_more');

                $post_date_month = get_the_date( 'M' );

                $post_date_day = get_the_date( 'd' );?>

            <div class="blog__item">

                <div>

                    <?php if( !empty($image) ): ?>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="blog__item__image">

                    <?php endif; ?>
                </div>

                <div class="blog__item__date">

                    <span class="blog__item__date__month">

                        <?php echo $post_date_month; ?>

                    </span>

                    <span class="blog__item__date__day">

                        <?php echo $post_date_day; ?>

                    </span>

                </div>

                <div>

                    <h3 class="blog__item__title">

                        <?php the_title(); ?>

                    </h3>

                    <p class="blog__item__short">

                        <?php echo get_excerpt(); ?>

                        <a href="<?php the_permalink(); ?>" class="blog__item__link">

                            <?php echo $post_read_more; ?>

                        </a>

                    </p>

                    <span class="blog__item__author">

                        By <?php echo $author; ?>

                    </span>

                </div>

            </div>

            <?php endwhile; ?>
            <!-- End of the main loop -->

            <!-- Add the pagination functions here. -->

            <div class="nav-previous alignleft">

                <?php next_posts_link( 'Older posts' ); ?>

            </div>

            <div class="nav-next alignright">

                <?php previous_posts_link( 'Newer posts' ); ?>

            </div>

        <?php endif; ?>

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