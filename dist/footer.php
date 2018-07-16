<?php if( have_posts() ) :

    while( have_posts() ) :

        the_post();

        $footer_copyright_text = get_field('footer_copyright_text', 'options');

        $footer_copyright_link_text = get_field('footer_copyright_link_text', 'options');

    endwhile;

endif;?>


<footer class="footer">

    <div class="footer__content">

        <p class="footer__copyright">

            <?php echo $footer_copyright_text; ?>

            <a href="#" class="footer__copyright__link">

                <?php echo $footer_copyright_link_text; ?>

            </a>

        </p>

        <nav class="footer__menu">

            <?php wp_nav_menu(array(

                    'theme_location' => 'footer_menu',

                    'menu_class' => 'footer__menu__list',

                    'container' => false
            )); ?>

        </nav>

    </div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>