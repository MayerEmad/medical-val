@extends('temp')
@section('content')
<html lang="en">
    <head>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Slider -->
        <link href="{{asset('/css/user/slick.css')}}" rel="stylesheet">
        <link href="{{asset('/css/user/slick-theme.css')}}" rel="stylesheet">
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
    <script>
        $('.brand-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 500,
        });
    </script>
    <script>
        $('#products').after('<div id="nav" class="pagination mt-4" style="float: right;margin-right: 50px;"></div>');
            var rowsShown = 6;
            var rowsTotal = $('#products .col-lg-4 .card').length;
            var numPages = rowsTotal/rowsShown;
            for(i = 0;i < numPages;i++) {
                var pageNum = i + 1;
                $('#nav').append('<li class="page-item"><a href="#sec1" class="page-link" rel="'+i+'">'+pageNum+'</a> </li>');
            }
            $('#products .col-lg-4 .card').hide();
            $('#products .col-lg-4 .card').slice(0, rowsShown).show();
            $('#nav a:first').addClass('active');
            $('#nav a').bind('click', function(){
                $('#nav a').removeClass('active');
                $(this).addClass('active');
                var currPage = $(this).attr('rel');
                var startItem = currPage * rowsShown;
                var endItem = startItem + rowsShown;
                $('#products .col-lg-4 .card').css('opacity','0.0').hide().slice(startItem, endItem).
                css('display','table-row').animate({opacity:1}, 300);
            });

            function showProducts(){
                if( !$("#nav").length ){
                    $('#products').after('<div id="nav" class="pagination mt-4" style="float: right;margin-right: 50px;"></div>');
                    var rowsShown = 6;
                    var rowsTotal = $('#products .col-lg-4 .card').length;
                    var numPages = rowsTotal/rowsShown;
                    for(i = 0;i < numPages;i++) {
                        var pageNum = i + 1;
                        $('#nav').append('<li class="page-item"><a href="#sec1" class="page-link" rel="'+i+'">'+pageNum+'</a> </li>');
                    }
                    $('#products .col-lg-4 .card').hide();
                    $('#products .col-lg-4 .card').slice(0, rowsShown).show();
                    for (let i = 0; i < rowsShown; i++) {
                        $('#nav a:first').addClass('active');
                        var currPage =  $('#nav a').attr('rel');
                        var startItem = currPage * rowsShown;
                        var endItem = startItem + rowsShown;
                        $('#products .col-lg-4 .card').css('opacity','0.0').hide().slice(startItem, endItem).
                        css('display','table-row').animate({opacity:1}, 300);
                    }
                    $('#nav a').bind('click', function(){
                        $('#nav a').removeClass('active');
                        $(this).addClass('active');
                        var currPage = $(this).attr('rel');
                        var startItem = currPage * rowsShown;
                        var endItem = startItem + rowsShown;
                        $('#products .col-lg-4 .card').css('opacity','0.0').hide().slice(startItem, endItem).
                        css('display','table-row').animate({opacity:1}, 300);
                    });
                }
                        // else{
                        //     alert("heeeeeeelo");
                        // }
                $("#nav2").remove();
            }


        function showFeatured(){
            if( !$("#nav2").length ){
                $('#featured').after('<div id="nav2" class="pagination mt-4" style="float: right;margin-right: 50px;"></div>');
                    var rowsShown1 = 3;
                    var rowsTotal1 = $('#featured .col-lg-4 .card').length;
                    //console.log(rowsTotal);
                    var numPages = rowsTotal1/rowsShown1;
                    //console.log(numPages);
                    for(i = 0;i < numPages;i++) {
                        var pageNum1 = i + 1;
                        $('#nav2').append('<li class="page-item"><a href="#sec1" class="page-link" rel="'+i+'">'+pageNum1+'</a> </li>');
                    }
                    $('#featured .col-lg-4 .card').hide();
                    $('#featured .col-lg-4 .card').slice(0, rowsShown1).show();
                    // $('#nav2 a:first').addClass('active');
                    for (let i = 0; i < rowsShown1; i++) {
                        // alert(i);
                        //$('#nav a').removeClass('active');
                        $('#nav2 a:first').addClass('active');
                        var currPage1 =  $('#nav2 a').attr('rel');
                        // alert(currPage);
                        var startItem1 = currPage1 * rowsShown1;
                        var endItem = startItem1 + rowsShown1;
                        $('#featured .col-lg-4 .card').css('opacity','0.0').hide().slice(startItem1, endItem).
                        css('display','table-row').animate({opacity:1}, 300);
                    }
                    $('#nav2 a').bind('click', function(){
                        $('#nav2 a').removeClass('active');
                        $(this).addClass('active');
                        var currPage1 = $(this).attr('rel');
                        var startItem1 = currPage1 * rowsShown1;
                        var endItem1 = startItem1 + rowsShown1;
                        $('#featured .col-lg-4 .card').css('opacity','0.0').hide().slice(startItem1, endItem1).
                        css('display','table-row').animate({opacity:1}, 300);
                    });
                }
                $("#nav").remove();
                    // else{
                    //     $("#nav2").hide();
                    // }
            }
            function showCategory(){
                $("#nav").remove();
                $("#nav2").remove();
            }
            function showcategory1(){
                $("#nav").remove();
                $("#nav2").remove();
            }
            function showcategory2(){
                $("#nav").remove();
                $("#nav2").remove();
            }
            function showcategory3(){
                $("#nav").remove();
                $("#nav2").remove();
            }
        </script>
  </body>
</html>
@endsection
