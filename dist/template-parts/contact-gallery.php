<?php

    $contact_block_title = get_field('contact_block_title', 'option');

    $contact_block_description = get_field('contact_block_description', 'option');

    $contact_block_button_1_text = get_field('contact_block_button_1_text', 'option');

    $contact_block_button_2_text = get_field('contact_block_button_2_text', 'option');

    $gallery_block_title = get_field('gallery_block_title', 'option');

    $gallery_block_description = get_field('gallery_block_description', 'option');

    $gallery_block_link = get_field('gallery_block_link', 'option');

?>

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

                <?php if( $gallery_block_link ) : ?>

                <a href="<?php echo $gallery_block_link['url']; ?>" class="contact-gallery__description__link">

                    <?php echo $gallery_block_link['title']; ?>

                </a>

                <?php endif; ?>

            </p>

            <div class="contact-gallery__gallery__body">

                <?php $gallery_query = new WP_Query( array(

                    'post_type' => 'gallery_item',

                    'posts_per_page' => 8

                ) );

                if ( $gallery_query -> have_posts() ) :

                    while ( $gallery_query -> have_posts() ) :

                        $gallery_query -> the_post();?>

                        <a href="<?php the_permalink(); ?>">

                            <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="gallery item" class="contact-gallery__gallery__item">

                        </a>

                    <?php

                    endwhile;

                    wp_reset_postdata();

                endif; ?>

            </div>

        </div>

    </div>

</section>