function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slider-item");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

/*const aboutSlider = $('.about-slider'); // <== Кешируем слайдер

aboutSlider.сlick({
    arrows: false,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    lazyLoad: 'ondemand'
})

$('.slider-btn').click(function() {
    const dir = $(this).data('dir');
    aboutSlider.slick('slick'+dir);
})*/

var slideIndex = 1;
$(document).ready(function () {
    showSlides(slideIndex);
});
