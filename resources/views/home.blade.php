@extends('temp')
@section('content')
<html lang="en">
    <head>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Slider -->
        <link href="{{asset('/css/user/slick.css')}}" rel="stylesheet">
        <link href="{{asset('/css/user/slick-theme.css')}}" rel="stylesheet">
        <!-- compare -->
        <link rel="stylesheet" href="{{ asset('/css/user/compare.css') }}">
    </head>
  <body>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 images" src="{{ asset('/img/slider1.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>My Caption Title (1st Image)</h5>
                        <p>The whole caption will only show up if the screen is at least medium size.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 images" src="{{ asset('/img/slider2.jpg') }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>My Caption Title (2st Image)</h5>
                        <p>The whole caption will only show up if the screen is at least medium size.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 images" src="{{ asset('/img/slider3.jpg') }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>My Caption Title (3st Image)</h5>
                        <p>The whole caption will only show up if the screen is at least medium size.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container-fluid mt-5 back-ground" style="width: 88%;">
            <div class="container sec-back-ground">
                <nav>
                    <ul class="nav nav-tabs display-block-nav">
                        <li class="nav-item mr-3"><a class="nav-link col-lg-12 col-md-12 col-sm-12" id="sec1" href="#products" data-toggle="tab" onclick="showProducts()">All Products</a></li>
                        <li class="nav-item mr-3"><a class="nav-link col-lg-12 col-md-12 col-sm-12" href="#featured" data-toggle="tab" onclick="showFeatured()">Featured Products</a></li>
                        <li class="nav-item mr-3"><a class="nav-link col-lg-12 col-md-12 col-sm-12" href="#category" data-toggle="tab" onclick="showCategory()">Categories</a></li>
                        <!-- <li class="nav-item mr-3"><a class="nav-link" href="#d" data-toggle="tab">profile</a></li> -->
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container mt-4 cat-container">
            <div class="row">
                <div class="col-lg-2">
                    <p class="cat-title">CATEGORIES</p>
                    <div class="mt-3">
                        <nav>
                            <ul class="nav nav-tabs" style="display: block;">
                                <li class="nav-item"><a class="nav-link" href="#cat1" data-toggle="tab" onclick="showcategory1()">category 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#cat2" data-toggle="tab" onclick="showcategory2()">category 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="#cat3" data-toggle="tab" onclick="showcategory3()">category 3</a></li>
                                <li class="nav-item"><a class="nav-link" href="#cat1" data-toggle="tab" onclick="showcategory1()">category 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#cat2" data-toggle="tab" onclick="showcategory2()">category 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="#cat3" data-toggle="tab" onclick="showcategory3()">category 3</a></li>
                                <li class="nav-item"><a class="nav-link" href="#cat1" data-toggle="tab" onclick="showcategory1()">category 1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#cat2" data-toggle="tab" onclick="showcategory2()">category 2</a></li>
                                <li class="nav-item"><a class="nav-link" href="#cat3" data-toggle="tab" onclick="showcategory3()">category 3</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-10 ">
                    <p class="cat-title2 pl-2">MEDICINE</p>
                    <div class="tab-content">
                        <div class="tab-pane active" id="products">@yield('products')</div>
                        <div class="tab-pane" id="featured">@yield('featured')</div>
                        <div class="tab-pane" id="category">@yield('categories')</div>
                        <div class="tab-pane" id="cat1">@yield('categoryname1')</div>
                        <div class="tab-pane" id="cat2">@yield('categoryname2')</div>
                        <div class="tab-pane" id="cat3">@yield('categoryname3')</div>
                        <!-- <div class="tab-pane" id="d">profile</div> -->
                    </div>
                </div>
            </div>
            <!-- <div class="row mt-5">
                <div class="col-lg-9"></div>
                <div class="col-lg-2">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </div> -->
        </div>
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="{{ asset('img/brand1.jpeg') }}" alt=""></div>
                    <div class="brand-item"><img src="{{ asset('img/brand2.jpeg') }}" alt=""></div>
                    <div class="brand-item"><img src="{{ asset('img/brand3.jpeg') }}" alt=""></div>
                    <div class="brand-item"><img src="{{ asset('img/brand4.jpeg') }}" alt=""></div>
                    <div class="brand-item"><img src="{{ asset('img/brand5.jpeg') }}" alt=""></div>
                    <div class="brand-item"><img src="{{ asset('img/brand6.jpeg') }}" alt=""></div>
                    <div class="brand-item"><img src="{{ asset('img/brand7.jpeg') }}" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->



    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{asset('/js/user/slick.min.js')}}"></script>
    <script src="{{asset('/js/user/pagination.js')}}"></script>
    <script src="{{asset('/js/user/compare.js')}}"></script>
    <script>
        $('.brand-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 500,
        });
    </script>
  </body>
</html>
@endsection
