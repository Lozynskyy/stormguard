<?php

    $last_posts_section_title = get_field('last_posts_section_title');

    $last_posts_section_read_more = get_field('last_posts_section_read_more');

    $last_posts_section_button_text = get_field('last_posts_section_button_text');

?>

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

                <?php endwhile;

                wp_reset_postdata();

            endif; ?>

        </div>

        <button class="ln-button">

            <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="button__link">

                <?php echo $last_posts_section_button_text; ?>

            </a>

        </button>

    </div>

</section>