function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function show_popup(item) {
    document.querySelector('.title').innerHTML = item.data('name');
    document.querySelector('.photo').src = item.data('image');
    document.querySelector('.photo').alt = item.data('name');
    document.querySelector('.description').innerHTML = item.data('detail-text');

    $("#review").addClass('active');
}

function close_popup() {
    $(".overlay.active").removeClass("active");
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slider-item");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

var slideIndex = 1;
$(document).ready(function () {
    showSlides(slideIndex);
});
