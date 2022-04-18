@extends("layout.master")

@section("css")
<link rel="stylesheet" href="css/movie.css">
<link rel="stylesheet" href="css/app.css">
@endsection


@section("content")
@endsection
    <div class="container">
        <div class="row">
            <div class="filter container__dropdown">               
                <div class="dropdown">
                    <div class="select">
                    <span>Select Gender</span>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown-menu">
                    <li id="male">Male</li>
                    <li id="female">Female</li>
                    </ul>
                </div>

                <div class="dropdown">
                    <div class="select">
                    <span>Select Gender</span>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="dropdown-menu">
                    <li id="male">Male</li>
                    <li id="female">Female</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card" style="width: 13rem;">
                <a class="over__lay"></a>
                <img class="card-img-top" src="../imgs/series/mandalorian.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
        </div>
            <div class="card" style="width: 13rem;">
                <a class="over__lay"></a>
                <img class="card-img-top" src="../imgs/series/supergirl.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
        </div>
            <div class="card" style="width: 13rem;">
                <a class="over__lay"></a>
                <img class="card-img-top" src="../imgs/series/supergirl.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
        </div>
            <div class="card" style="width: 13rem;">
                <a class="over__lay"></a>
                <img class="card-img-top" src="../imgs/series/supergirl.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
        </div>
            <div class="card" style="width: 13rem;">
                <a class="over__lay"></a>
                <img class="card-img-top" src="../imgs/series/supergirl.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
        </div>
            <div class="card" style="width: 13rem;">
                <a class="over__lay"></a>
                <img class="card-img-top" src="../imgs/series/supergirl.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
        </div>
            <div class="card" style="width: 13rem;">
                <a class="over__lay"></a>
                <img class="card-img-top" src="../imgs/series/supergirl.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
        </div>
            <div class="card" style="width: 13rem;">
                <a class="over__lay"></a>
                <img class="card-img-top" src="../imgs/series/supergirl.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
        </div>
            <div class="card" style="width: 13rem;">
                <a class="over__lay"></a>
                <img class="card-img-top" src="../imgs/series/supergirl.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                </div>
        </div>
        </div>
    </div>
@section("script")
    <script src="js/app.js"></script>
    <script src="js/movie.js"></script>
@endsection
