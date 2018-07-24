<?php
/*Template Name: Blog*/

get_header();?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<section class="blog">

    <div class="blog__content">

        <?php if(have_posts()) :

            while (have_posts() ) :

                the_post();

                $image = get_the_post_thumbnail_url();

                $author = get_the_author_meta('display_name');

                $post_read_more = get_field('post_read_more');

                $post_date_month = get_the_date( 'M' );

                $post_date_day = get_the_date( 'd' );?>

            <div class="blog__item">

                <div>

                    <?php if( !empty($image) ): ?>

                        <img src="<?php echo $image; ?>" alt="post image" class="blog__item__image">

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

<?php get_template_part('template-parts/find-franchise'); ?>

<?php get_template_part('template-parts/contact-gallery'); ?>

<?php get_footer(); ?>