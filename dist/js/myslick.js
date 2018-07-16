$('.my-slick').slick({
    dots: true,
    customPaging: function() {
        return '<span class="my-slick__dot"></span>';
    },
    prevArrow: false,
    nextArrow: false
});