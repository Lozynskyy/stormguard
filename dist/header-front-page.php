<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Storm Guard</title>

    <?php

    $main_color = get_field('main_color', 'option');

    $secondary_color = get_field('secondary_color', 'option');

    ?>

    <style type="text/css">

        :root {
            --main-color: <?php echo $main_color; ?> !important;

            --secondary-color: <?php echo $secondary_color; ?> !important;
        }

    </style>

    <?php wp_head(); ?>
</head>

<body>

<?php if( have_posts() ) :

    while( have_posts() ) :

        the_post();

        $header_logo = get_field('header_logo', 'option');

        $header_link_text = get_field('header_link_text', 'option');

        $header_main_menu = get_field('header_main_menu', 'option');

        $header_additional_menu = get_field('header_additional_menu', 'option');

        $header_modal_text = get_field('header_modal_text');

        $header_modal_button_text = get_field('header_modal_button_text');

        $contact_link = get_page_link(93);

        $locations_link = get_page_link(81);

        $home_link = get_page_link(77);

    endwhile;

endif;?>

<header class="header">

    <section class="header__panel header__panel--top">

        <div class="header__panel__content">

            <div class="header__custom-element">

                <a href="<?php echo $locations_link; ?>" class="header__custom-element__link">

                    <span class="header__custom-element__text">

                        <?php echo $header_link_text; ?>

                    </span>

                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-right.png" alt="arrow-right" class="header__custom-element__img">

                </a>

            </div>

            <nav class="header__menu header__menu--main">

                <span class="header__menu__burger_1">

                    <?php echo $header_main_menu; ?>

                </span>

                <?php wp_nav_menu(array(

                        'theme_location' => 'header_menu_top',

                        'menu_class' => 'header__menu__item-list header__menu__item-list--main',

                        'container' => false

                )); ?>

            </nav>

        </div>

    </section>

    <section class="header__bg-img">

        <div class="header__panel header__panel--bottom">

            <div class="header__panel__content">

                <div class="header__custom-element">

                    <a href="<?php echo $home_link; ?>" class="header__custom-element__link">

                        <?php if( !empty($header_logo) ): ?>

                            <img src="<?php echo $header_logo; ?>" alt="logo" class="header__logo">

                        <?php endif; ?>

                    </a>

                </div>

                <nav class="header__menu header__menu--secondary">

                    <span class="header__menu__burger_2">

                        <?php echo $header_additional_menu; ?>

                    </span>

                    <?php wp_nav_menu(array(

                            'theme_location' => 'header_menu_bottom',

                            'menu_class' => 'header__menu__item-list header__menu__item-list--secondary',

                            'container' => false

                    )); ?>

                </nav>

            </div>

        </div>

        <div class="modal-wrapper">

            <div class="modal">

                <p class="modal__text">

                    <?php echo $header_modal_text; ?>

                </p>

                <button class="modal-button">

                    <a href="<?php echo $contact_link; ?>" class="button__link">

                        <?php echo $header_modal_button_text ?> <img src="<?php bloginfo('stylesheet_directory'); ?>/img/arrow-right-black.png" alt="arrow-right" class="modal-button__icon">

                    </a>

                </button>

            </div>

        </div>

    </section>

</header>
