if ($('.testimonial-carousel').length) {
    $('.testimonial-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        smartSpeed: 700,
        autoplay: true,
        navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1024: {
                items: 2
            },
        }
    });
}
if ($('.sponsors-carousel').length) {
    $('.sponsors-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        smartSpeed: 1000,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            800: {
                items: 3
            },
            1024: {
                items: 4
            },
            1400: {
                items: 5
            },
            1920: {
                items: 6
            }
        }
    });
}
$('.team-carousel').owlCarousel({
    loop: true,
    margin: 30,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 4
        }

    }
})

// For style Switcher
function switchStyle() {
    if (document.getElementById('styleSwitch').checked) {
        document.getElementById('gallery').classList.add("custom");
        document.getElementById('exampleModal').classList.add("custom");
    } else {
        document.getElementById('gallery').classList.remove("custom");
        document.getElementById('exampleModal').classList.remove("custom");
    }
}

