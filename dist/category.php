<?php

get_header(); ?>

    <div id="container" class="storm-temp">
        <div id="content" role="main" class="storm-temp__content">

            <h1 class="storm-temp__title">
                <?php
                printf( __( 'Category Archives: %s'), '<span>' . single_cat_title( '', false ) . '</span>' );
                ?>
            </h1>

            <?php
            $category_description = category_description();
            if ( ! empty( $category_description ) )
                echo '<div class="storm-temp__text">' . $category_description . '</div>';
            if(have_posts()) :

                while (have_posts()):

                    the_post(); ?>

                    <h2 class="storm-temp__title storm-temp__title--sm"><?php the_title(); ?></h2>

                    <?php the_content();

                endwhile;
            endif;
            ?>

        </div><!-- #content -->
    </div><!-- #container -->

<?php get_footer(); ?>