<?php $comments_slider_title = get_field('comments_slider_title'); ?>

<section class="clients-comments">

    <div class="clients-comments__content">

        <h2 class="clients-comments__title">

            <?php echo $comments_slider_title; ?>

        </h2>

        <div class="my-slick">

            <?php $comments_query = new WP_Query( array( 'post_type' => 'comment' ) );

            if( $comments_query -> have_posts() ) :

                while( $comments_query -> have_posts() ) :

                    $comments_query -> the_post();

                    $comment_author = get_field('comment_author');

                    $comment_author_additional_info = get_field('comment_author_additional_info');?>

                    <div class="my-slick__item">

                        <div class="my-slick__item__comment">

                            <?php the_content(); ?>

                        </div>

                        <p class="my-slick__item__com-author">

                            <?php echo $comment_author; ?><br>

                            <?php echo $comment_author_additional_info; ?>

                        </p>

                    </div>

                <?php endwhile;

                wp_reset_postdata();

            endif; ?>

        </div>

    </div>

</section>