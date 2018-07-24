<?php
    $contact_block_title = get_field('contact_block_title');

    $contact_block_description = get_field('contact_block_description');

    $contact_form = get_field('contact_form_shortcode');

    $gallery_block_title = get_field('gallery_block_title');

    $gallery_block_description = get_field('gallery_block_description');

    $gallery_block_link_text = get_field('gallery_block_link_text');
?>

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

                    wp_reset_postdata();

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