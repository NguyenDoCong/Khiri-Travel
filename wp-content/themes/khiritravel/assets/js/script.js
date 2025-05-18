document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');
    const toggleButton = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    const searchBar = document.querySelector('.search-bar');
    const logo = document.querySelector('.logo');
    const logoMobile = document.querySelector('.logo-mobile');

    if (toggleButton) {
        toggleButton.addEventListener('click', function () {
            header.classList.toggle('active');
            navMenu.classList.toggle('active');
            searchBar.classList.toggle('active');
            toggleButton.classList.toggle('active');
            logo.classList.toggle('inactive');
            logoMobile.classList.toggle('active');
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.menu-item-has-children > a');

    menuItems.forEach(item => {
        item.addEventListener('click', function (event) {
            event.preventDefault();
            const parentLi = this.parentElement;

            // Đóng tất cả các sub-menu khác
            const allSubMenus = document.querySelectorAll('.sub-menu');
            allSubMenus.forEach(subMenu => {
                if (subMenu !== parentLi.querySelector('.sub-menu')) {
                    subMenu.classList.remove('active');
                    subMenu.parentElement.classList.remove('active');
                }
            });

            // Toggle sub-menu hiện tại
            const subMenu = parentLi.querySelector('.sub-menu');
            if (subMenu) {
                subMenu.classList.toggle('active');
                parentLi.classList.toggle('active');
            }
        });
    });
});

jQuery(document).ready(function ($) {
    $('.popup-youtube').magnificPopup({
        type: 'iframe'
    });
});

jQuery(document).ready(function ($) {

    $('.itinerary-slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.itinerary-slider-nav'
    });
    $('.itinerary-slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.itinerary-slider-for',
        dots: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });

    $('.hotel-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        responsive: [
            {
                breakpoint: 431,
                settings: {
                    centerMode: true,
                    centerPadding: '25px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.contacts-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 431,
                settings: {
                    dots: true,
                    customPaging: function (slider, i) {
                        var totalSlides = slider.slideCount; // Lấy tổng số slide
                        var thumb = $(slider.$slides[i]).data();
                        return '<span class="paging"><span class="current-slide">' + (i + 1) + '/ </span> <span class="total-slides">' + totalSlides + '</span></span>'; // Hiển thị số hiện tại và tổng số với class riêng biệt
                    },
                }
            }
        ]

    });

});

