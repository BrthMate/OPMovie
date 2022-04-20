$(document).ready(() => {

    let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]

    $('#carousel').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
    })

    $('#top-movies-slide').owlCarousel({
        items: 3,
        dots: false,
        loop: true,
        margin: 15,
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items:1
            },
            400: {
                items: 3
            },
            900: {
                items: 4
            },
            1280: {
                items: 5
            },
            1600: {
                items: 6
            }
        }
    })
    $('.movies-slide').owlCarousel({
        items: 2,
        loop: true,
        dots: false,
        margin: 15,
        autoplay: true,
        autoplayHoverPause: true,
        margin: 15,
        responsive: {
            0: {
                items:1
            },
            400: {
                items: 3
            },
            900: {
                items: 4
            },
            1280: {
                items: 5
            },
            1600: {
                items: 6
            }
        }
    })
});

if(url === "/"){
    const series = document.querySelector(".series");
    const movies = document.querySelector(".movies");
    const seriesContainer = document.querySelector(".series__container");
    const moviesContainer = document.querySelector(".movies__container");

    series.addEventListener("click",() => {
        seriesFunc();
    });

    movies.addEventListener("click",() => {
        moviesFunc();
    });

    function seriesFunc(){
        movies.classList.remove("active");
        series.classList.add("active");
        moviesContainer.classList.add("d-none");
        seriesContainer.classList.remove("d-none");
    }

    function moviesFunc(){
        series.classList.remove("active");
        movies.classList.add("active");
        seriesContainer.classList.add("d-none");
        moviesContainer.classList.remove("d-none");
    }
}
