$( document ).ready(function(){

    $('.header__menu__burger_1').on('click', function() {
        $('.header__menu__item-list--main').slideToggle(300, function(){
             $(this).toggleClass('active');
        });

    });

});

$( document ).ready(function(){

    $('.header__menu__burger_2').on('click', function() {
        $('.header__menu__item-list--secondary').slideToggle(300, function(){
            $('.header__menu--secondary').toggleClass('clicked');
        });

    });

});

