<?php

    $franchise_section_title = get_field('franchise_section_title');

    $franchise_section_description = get_field('franchise_section_description');

    $franchise_section_button_text = get_field('franchise_section_button_text');

    $franchise_section_placeholder = get_field('franchise_section_placeholder');

?>

<section class="find-franchise">

    <div class="find-franchise__content find-franchise__content--fr">

        <div class="find-franchise__content__item find-franchise__content__item--left">

            <div class="find-franchise__text">

                <p class="find-franchise__text__top">

                    <?php echo $franchise_section_title; ?>

                </p>

                <p class="find-franchise__text__bot">

                    <?php echo $franchise_section_description; ?>

                </p>

            </div>

        </div>

        <button class="ff-button ff-button--fr">

            <?php echo $franchise_section_button_text ?>

        </button>

    </div>

</section>