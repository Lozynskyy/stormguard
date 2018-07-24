<?php

$franchise_section_title = get_field('franchise_section_title', 'option');

$franchise_section_description = get_field('franchise_section_description', 'option');

$franchise_section_button_text = get_field('franchise_section_button_text', 'option');

$franchise_section_placeholder = get_field('franchise_section_placeholder', 'option');

?>

<section class="find-franchise">

    <div class="find-franchise__content">

        <div class="find-franchise__content__item find-franchise__content__item--left">

            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38" height="56" viewBox="0 0 38 56" class="find-franchise__icon">

                <defs><path id="ug74a" d="M483 690.5c0 7-15.2 31.5-19 38.5-3.8-7-19-31.5-19-38.5 0-14 11.4-17.5 19-17.5s19 3.5 19 17.5zm-12.95 0c0-3.38-2.7-6.12-6.05-6.12a6.08 6.08 0 0 0-6.05 6.12c0 3.39 2.7 6.13 6.05 6.13a6.08 6.08 0 0 0 6.05-6.13z"/></defs><g><g transform="translate(-445 -673)"><use xlink:href="#ug74a"/></g></g>

            </svg>

            <div class="find-franchise__text">

                <p class="find-franchise__text__top">

                    <?php echo $franchise_section_title; ?>

                </p>

                <p class="find-franchise__text__bot">

                    <?php echo $franchise_section_description; ?>

                </p>

            </div>

        </div>

        <div class="find-franchise__content__item find-franchise__content__item--right">

            <input type="text" placeholder="<?php echo $franchise_section_placeholder; ?>" class="ff-input">

            <button class="ff-button">

                <?php echo $franchise_section_button_text ?>

            </button>

        </div>

    </div>

</section>