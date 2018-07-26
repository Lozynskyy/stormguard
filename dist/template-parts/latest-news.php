<?php

    $last_posts_section_title = get_field('last_posts_section_title');

    $last_posts_section_read_more = get_field('last_posts_section_read_more');

    $last_posts_section_button = get_field('last_posts_section_button');

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

                    $image = get_the_post_thumbnail_url();

                    $author = get_the_author_meta('display_name');

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

                            <div class="latest-news__item__image__wrapper">

                            <?php if( !empty($image) ): ?>

                                <img src="<?php echo $image; ?>" alt="post image" class="latest-news__item__image">

                            <?php endif; ?>

                            </div>

                            <div class="latest-news__item__info">

                                <h3 class="latest-news__item__title">

                                    <?php the_title(); ?>

                                </h3>

                                <?php echo get_excerpt(400); ?>

                                <a href="<?php the_permalink(); ?>" class="latest-news__item__link">

                                    <?php echo $last_posts_section_read_more; ?>

                                </a>

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

            <?php

            if( $last_posts_section_button ): ?>

                <a href="<?php echo $last_posts_section_button['url']; ?>" class="button__link">

                    <?php echo $last_posts_section_button['title']; ?>

                </a>

            <?php endif; ?>

        </button>

    </div>

</section>