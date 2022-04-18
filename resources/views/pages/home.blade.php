@extends("layout.master")

@section("css")
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/app.css">
@endsection

@section("content")
    <div class="home">
        <div class="background">
            <h1>OPMovie</h1>
        </div>
        <div class="slide">
            <div class="owl-carousel carousel-nav-center" id="carousel">
                <div class="slide__item">
                    <img class="litle__big" src="../imgs/black-banner.png" alt="">
                    <div class="slide__item__content">
                        <div class="item__content__wraper">
                            <div class="item__content__title top__down">
                                Black Panther
                            </div>
                            <div class="movie__infos top__down delay-2">
                                <div class="movie__info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie__info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie__info">
                                    <span>HD</span>
                                </div>
                                <div class="movie__info time">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item__content__description top__down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="top__down delay-6">
                                <a href="#" class="btn btn__hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                                <a href="#" class="btn outline btn__hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch trailer</span>
                                </a>
                            </div>                           
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <img class="litle__big" src="../imgs/supergirl-banner.jpg" alt="">
                    <div class="slide__item__content">
                        <div class="item__content__wraper">
                            <div class="item__content__title top__down">
                                Supergirl
                            </div>
                            <div class="movie__infos top__down delay-2">
                                <div class="movie__info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie__info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie__info">
                                    <span>HD</span>
                                </div>
                                <div class="movie__info time">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item__content__description top__down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="top__down delay-6">
                                <a href="#" class="btn btn__hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                                <a href="#" class="btn outline btn__hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch trailer</span>
                                </a>
                            </div>                           
                        </div>
                    </div>
                </div>
                <div class="slide__item">
                    <img class="litle__big"  src="../imgs/wanda-banner.jpg" alt="">
                    <div class="slide__item__content">
                        <div class="item__content__wraper">
                            <div class="item__content__title top__down">
                                Wanda Vision
                            </div>
                            <div class="movie__infos top__down delay-2">
                                <div class="movie__info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                </div>
                                <div class="movie__info">
                                    <i class="bx bxs-time"></i>
                                    <span>120 mins</span>
                                </div>
                                <div class="movie__info">
                                    <span>HD</span>
                                </div>
                                <div class="movie__info time">
                                    <span>16+</span>
                                </div>
                            </div>
                            <div class="item__content__description top__down delay-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, possimus eius. Deserunt non odit, cum vero reprehenderit laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium, facere ab suscipit.
                            </div>
                            <div class="top__down delay-6">
                                <a href="#" class="btn btn__hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch now</span>
                                </a>
                                <a href="#" class="btn outline btn__hover">
                                    <i class="bx bxs-right-arrow"></i>
                                    <span>Watch trailer</span>
                                </a>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="best__rating">
        <h2>
            Latest
        </h2>
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/movies/captain-marvel.png" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Captain Marvel
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/cartoons/demon-slayer.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Infinity Train
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/movies/blood-shot.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Bloodshot
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/wanda.png" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Wanda Vision
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/movies/bat-man.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            The Dark Knight
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="best__rating">
        <h2>
            Most Viewed
        </h2>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                
    </section>
    <section class="best__rating">
        <h2>
            Best
        </h2>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie__item">
                    <div class="movie__info">
                        <i class="bx bxs-star"></i>
                        <span>9.5</span>
                    </div>
                    <a class="link" href="#"></a>
                    <div class="card__overlay"></div>
                    <img src="../imgs/series/supergirl.jpg" alt="">
                    <div class="movie__item__content">
                        <div class="movie__item__title">
                            Supergirl
                        </div>
                        <div class="movie__infos">
                            <div class="movie__apearance">
                                2021-01-12
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
    </section>
    @endsection

@section("script")
    <script src="js/app.js"></script>
    <script src="js/home.js"></script>
@endsection
