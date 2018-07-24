<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="post">

    <div class="post__content">

        <?php if ( have_posts() ) :

            while ( have_posts() ) :

                the_post();

                $image = get_field('post_image');

                $author = get_field('post_author');

                if( !empty($image) ): ?>

                    <div class="post__image__wrapper">

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="post__image">

                    </div>

                <?php endif; ?>

                <div class="post__info">

                    <h2 class="post__title">

                        <?php the_title(); ?>

                    </h2>

                    <?php the_content(); ?>

                    <p class="post__author">

                        By <?php echo $author; ?>

                    </p>

                </div>

            <?php endwhile;

        endif; ?>

    </div>

</section>

<?php get_template_part('template-parts/find-franchise'); ?>

<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer(); ?>
