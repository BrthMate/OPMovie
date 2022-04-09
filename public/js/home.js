$(document).ready(() => {

    let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]

    $('#carousel').owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
    })

    $('#top-movies-slide').owlCarousel({
        items: 2,
        dots: false,
        loop: true,
        margin: 15,
        /*autoplay: true,
        autoplayHoverPause: true,*/
        responsive: {
            0: {
                items:1
            },
            400: {
                items: 2
            },
            1280: {
                items: 4
            },
            1600: {
                items: 6
            }
        }
    })

    $('.movies-slide').owlCarousel({
        items: 2,
        loop: true,
        margin: 15,
        /*autoplay: true,
        autoplayHoverPause: true,*/
        margin: 15,
        responsive: {
            0: {
                items:1
            },
            400: {
                items: 2
            },
            1280: {
                items: 4
            },
            1600: {
                items: 6
            }
        }
    })
})