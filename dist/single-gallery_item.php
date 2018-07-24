<?php get_header(); ?>

<?php $gallery_item_page_query = new WP_Query( array(

    'post_type' => 'page',

    'name'=>'gallery-item'

) );

if($gallery_item_page_query -> have_posts()) :

    while ($gallery_item_page_query -> have_posts()) :

        $gallery_item_page_query -> the_post();

        $gallery_item_button_text = get_field('gallery_item_button_text');

    endwhile;

    wp_reset_postdata();

endif; ?>


<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="gallery-single">

    <div class="gallery-single__content">

        <?php if ( have_posts() ) :

            while ( have_posts() ) :

                the_post();

                $image = get_field('photo'); ?>

                <?php if( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="gallery-single__image">

            <?php endif; ?>

            <?php endwhile;

        endif; ?>

        <button class="ln-button">

            <a href="<?php echo get_post_type_archive_link( 'gallery_item' ); ?>" class="button__link">

                <?php echo $gallery_item_button_text; ?>

            </a>

        </button>

    </div>

</section>

<?php get_template_part('template-parts/find-franchise'); ?>

<?php get_footer(); ?>
