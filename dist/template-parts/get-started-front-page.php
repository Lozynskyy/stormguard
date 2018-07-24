<?php
    $get_started_section_title = get_field('get_started_section_title');

    $get_started_section_description = get_field('get_started_section_description');

    $get_started_section_residential_link = get_field('get_started_section_residential_link');

    $get_started_section_commercial_link = get_field('get_started_section_commercial_link');

    $get_started_section_insurance_link = get_field('get_started_section_insurance_link');
?>

<section class="get-started">

    <div class="get-started__content">

        <h2 class="get-started__title">

            <?php echo $get_started_section_title; ?>

        </h2>

        <p class="get-started__description">

            <?php echo $get_started_section_description; ?>

        </p>

        <div class="get-started__list">

            <div class="get-started__item get-started__item--1">

                <div class="get-started__item__title">

                    <?php

                    if( $get_started_section_residential_link ): ?>

                        <a href="<?php echo $get_started_section_residential_link['url']; ?>" class="get-started__item__link">

                        <span class="get-started__item__text">

                            <?php echo $get_started_section_residential_link['title']; ?>

                        </span>

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7" height="10" viewBox="0 0 7 10" class="get-started__item__icon">

                                <defs><path id="mawqa" d="M595.63 462l6.37-5-6.37-5-.63.71 5.46 4.29-5.46 4.29.63.71z"/></defs><g><g transform="translate(-595 -452)"><use xlink:href="#mawqa"/></g></g>

                            </svg>

                        </a>

                    <?php endif; ?>

                </div>

            </div>

            <div class="get-started__item get-started__item--2">

                <div class="get-started__item__title">

                    <?php

                    if( $get_started_section_commercial_link ): ?>

                        <a href="<?php echo $get_started_section_commercial_link['url']; ?>" class="get-started__item__link">

                        <span class="get-started__item__text">

                            <?php echo $get_started_section_commercial_link['title']; ?>

                        </span>

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7" height="10" viewBox="0 0 7 10" class="get-started__item__icon">

                                <defs><path id="mawqa" d="M595.63 462l6.37-5-6.37-5-.63.71 5.46 4.29-5.46 4.29.63.71z"/></defs><g><g transform="translate(-595 -452)"><use xlink:href="#mawqa"/></g></g>

                            </svg>

                        </a>

                    <?php endif; ?>

                </div>

            </div>

            <div class="get-started__item get-started__item--3">

                <div class="get-started__item__title">

                    <?php

                    if( $get_started_section_insurance_link ): ?>

                        <a href="<?php echo $get_started_section_insurance_link['url']; ?>" class="get-started__item__link">

                        <span class="get-started__item__text">

                            <?php echo $get_started_section_insurance_link['title']; ?>

                        </span>

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="7" height="10" viewBox="0 0 7 10" class="get-started__item__icon">

                                <defs><path id="mawqa" d="M595.63 462l6.37-5-6.37-5-.63.71 5.46 4.29-5.46 4.29.63.71z"/></defs><g><g transform="translate(-595 -452)"><use xlink:href="#mawqa"/></g></g>

                            </svg>

                        </a>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</section>