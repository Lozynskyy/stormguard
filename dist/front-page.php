<?php /* Template Name: Home */?>

<?php get_header('front-page'); ?>

<?php get_template_part('template-parts/find-franchise'); ?>

<?php get_template_part('template-parts/services'); ?>

<?php get_template_part('template-parts/get-started', 'front-page'); ?>

<?php get_template_part('template-parts/clients-comments'); ?>

<?php get_template_part('template-parts/latest-news'); ?>

<?php get_template_part('template-parts/contact-gallery', 'front-page'); ?>

<?php get_footer(); ?>