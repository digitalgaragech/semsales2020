jQuery(document).ready(function () {
    jQuery('.owl-banners').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        lazyLoad: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    jQuery('.owl-events').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 3
            }
        }
    });
    jQuery('.owl-quotes').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    function sponsorsCounter(){
      console.log(jQuery("#sponsors > div").length);
    }
    sponsorsCounter();

    const divsContents = [...document.querySelectorAll("#sponsors > div")].map(e=>e.id);

    console.log(divsContents);
    if(divsContents.length < 6){
    }

    for (var value of divsContents) {
      console.log(value);
    }

});
