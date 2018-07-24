<?php get_header(); ?>

<?php $gallery_item_page_query = new WP_Query( array(

    'post_type' => 'page',

    'name'=>'gallery-item'

) );

if($gallery_item_page_query -> have_posts()) :

    while ($gallery_item_page_query -> have_posts()) :

        $gallery_item_page_query -> the_post();

        $gallery_item_button = get_field('gallery_item_button');

    endwhile;

    wp_reset_postdata();

endif; ?>


<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="gallery-single">

    <div class="gallery-single__content">

        <?php if ( have_posts() ) :

            while ( have_posts() ) :

                the_post(); ?>

                <img src="<?php the_post_thumbnail_url(); ?>" alt="gallery item" class="gallery-single__image">

            <?php endwhile;

        endif; ?>

        <button class="ln-button">

            <?php

            if( $gallery_item_button ): ?>

                <a href="<?php echo $gallery_item_button['url']; ?>" class="button__link">

                    <?php echo $gallery_item_button['title']; ?>

                </a>

            <?php endif; ?>

        </button>

    </div>

</section>

<?php get_template_part('template-parts/find-franchise'); ?>

<?php get_footer(); ?>
