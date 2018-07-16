<?php get_header(); ?>

<?php $gallery_page_query = new WP_Query( array(

    'post_type' => 'page',

    'name'=>'gallery'

) );

if($gallery_page_query -> have_posts()) :

    while ($gallery_page_query -> have_posts()) :

        $gallery_page_query -> the_post();

        $gallery_page_title = get_field('gallery_page_title');

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

<section class="gallery">

    <div class="gallery__content">

        <h2 class="gallery__title">

            <?php echo $gallery_page_title; ?>

        </h2>

        <div class="gallery__table">

            <?php if ( have_posts() ) :

                while ( have_posts() ) :

                    the_post();

                    $image = get_field('photo'); ?>

                    <div class="gallery__item">

                        <?php if( !empty($image) ): ?>

                            <a href="<?php the_permalink(); ?>">

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery__item__image">

                            </a>

                        <?php endif; ?>

                    </div>

                <?php endwhile;

            endif; ?>

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

<?php get_footer(); ?>
