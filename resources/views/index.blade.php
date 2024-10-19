@extends('template.navFoot')
@section('content')
    <div class="container home-bg">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slide-1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="/">See More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide-2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="/">See More</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide-3.png" class="d-block w-100" alt="...">
                     <div class="carousel-caption d-none d-md-block">
                        <a href="/">See More</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <h3 class="fw-normal bg-warning p-3 rounded-2 mt-3">Top food items</h3>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-1">
            <div class="col">
                <div class="card border-warning h-100">
                    <img src="images/card-1.jpg" class="card-img-top" alt="Card image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <button type="button" class="btn btn-warning">Order now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <h1 style="margin-bottom: -20px; font-size:30px">For better experience download<br><span class="text-warning">The Testy Table </span>app.</h1>
            <a href="#"><img src="icons/play.png"></a>
            <a href="#"><img src="icons/ios.png"></a>
        </div>
    </div>
@endsection