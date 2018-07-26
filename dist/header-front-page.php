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

        $header_main_menu = get_field('header_main_menu', 'option');

        $header_additional_menu = get_field('header_additional_menu', 'option');

        $header_modal_text = get_field('header_modal_text');

        $home_link = get_field('home_link', 'option');

    endwhile;

endif;?>

<header class="header">

    <section class="header__panel header__panel--top">

        <div class="header__panel__content">

            <div class="header__custom-element">

            <?php

            $header_link = get_field('header_link', 'option');

            if( $header_link ): ?>

                <a href="<?php echo $header_link['url']; ?>" class="header__custom-element__link">

                <span class="header__custom-element__text">

                    <?php echo $header_link['title']; ?>

                </span>

                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7" height="10" viewBox="0 0 7 10" class="header__custom-element__img">

                        <defs><path id="mawqa" d="M595.63 462l6.37-5-6.37-5-.63.71 5.46 4.29-5.46 4.29.63.71z"/></defs><g><g transform="translate(-595 -452)"><use xlink:href="#mawqa"/></g></g>

                    </svg>

                </a>

            <?php endif; ?>

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

                    <div class="header__menu__burger_2">

                        <div></div>

                    </div>

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

                <?php

                $header_modal_button = get_field('header_modal_button');

                if( $header_modal_button ): ?>

                    <a href="<?php echo $header_modal_button['url']; ?>" class="button__link">

                        <?php echo $header_modal_button['title']; ?>

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7" height="10" viewBox="0 0 7 10" class="modal-button__icon">

                            <defs><path id="mawqa" d="M595.63 462l6.37-5-6.37-5-.63.71 5.46 4.29-5.46 4.29.63.71z"/></defs><g><g transform="translate(-595 -452)"><use xlink:href="#mawqa"/></g></g>

                        </svg>

                    </a>

                <?php endif; ?>

                </button>

            </div>

        </div>

    </section>

</header>
