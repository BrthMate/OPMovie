@extends("layout.master")

@section("css")
<link rel="stylesheet" href="../../css/app.css">
<link rel="stylesheet" href="../../css/home.css">
<link rel="stylesheet" href="../../css/content_series.css">
@endsection

@section("content")
<div class="container">
    <div class="row">
        <div class="details">
            <div class="card" style="width: 13rem;">
                    <a class="over__lay"></a>
                    <img class="card-img-top" src="../../../imgs/series/supergirl.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
            </div>
        </div>
        <div class="series__desc">
            <div class="title">
                Better Call Saul
                </div>
            <div class="text">
                A Better Call Saul a Breaking Bad spinoff sorozata, amihet azonban nem szükséges ismerni a szorit, mert az előzményéről van szó. Az eredeti koncepcióhoz képest hat évet ugrunk vissza a múltba, amikor Saul találkozik Walter White-tal, azaz kiderül milyen is volt akkoriban népszerűnek vélt ügyvédként.
            </div>
            <div class="detail">
                <div class="appear">Megjelenés</div>
                <p>2015-</p>
                <div class="long">Status</div>
                <p>Aktív</p>
                <div class="episode">Epizódok száma:</div>
                <p>45</p>

            </div>
            <div class="contect__with">
            <section class="best__rating">
                <h2>
                    Kapcsolodó Tartalom
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
                            <img src="../../imgs/series/supergirl.jpg" alt="">
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
                            <img src="../../imgs/movies/captain-marvel.png" alt="">
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
                            <img src="../../imgs/cartoons/demon-slayer.jpg" alt="">
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
                            <img src="../../imgs/movies/blood-shot.jpg" alt="">
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
                            <img src="../../imgs/series/wanda.png" alt="">
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
                            <img src="../../imgs/movies/bat-man.jpg" alt="">
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
            </div>
        </div>
    </div>
    <div class="row">
        <div class="episode__list">
            <a href="#" class="link__to">1</a>
            <a href="#" class="link__to">2</a>
            <a href="#" class="link__to">3</a>
        </div>
        <div class="video">
            
            <div class="video-container">
                <video>
                    <source src="../../video/Maul.mp4" type="video/mp4">
                </video>
                <div class="controller">
                    <div class="timeline">
                        
                    </div>
                    <div class="progress__bar">
                        <div class="watched__bar"></div>
                        <div class="playhead"></div>
                    </div>
                    <div class="left">
                        <button class="play__btn">
                            <i class='bx bx-play'></i>
                        </button>
                        <button class="stop__btn">
                            <i class='bx bx-pause'></i>
                        </button>
                        <button class="voice__btn">
                            <i class='bx bx-volume-full' ></i>
                            <i class='bx bx-volume-low' ></i>
                            <i class='bx bx-volume' ></i>
                            <i class='bx bx-volume' ></i>
                        </button>
                        <button class="previous__btn">
                            <i class='bx bx-skip-previous' ></i>
                        </button>
                        <button class="next__btn">
                            <i class='bx bx-skip-next'></i>
                        </button>          
                    </div>
                    <div class="middle">
                        <div class="video__title">
                            Lorem imsun hossz szöveg
                        </div>
                    </div>
                    <div class="right">
                    
                        <button class="cc__btn">
                            <i class='bx bx-captions' ></i>
                        </button>
                        <div class="cog__container">
                            <button class="cog__btn">
                                <i class='bx bx-cog' ></i>
                            </button>
                            <div class="cox__box">
                                <div class="sub__title">
                                    <i class='bx  bx-captions'></i><span>sub</span>
                                </div>
                                <div class="speed">
                                    <i class='bx bx-fast-forward-circle'></i><span>speed</span>
                                </div>
                            </div>
                        </div>
                        <button class="exit__fullscreen__btn">
                            <i class='bx bx-exit-fullscreen' ></i>
                        </button>
                        <button class="fullscreen__btn">
                            <i class='bx bx-fullscreen' ></i>
                        </button>
                    </div> 
                </div>
            </div>

            <div class="button">
            <button class="btn btn-primary">
                Elöző
            </button>
            <button class="btn btn-primary">
                Következő
            </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section("script")
<script src="../../js/app.js"></script>
<script src="../../js/home.js"></script>
<script src="../../js/content_series.js"></script>
@endsection
