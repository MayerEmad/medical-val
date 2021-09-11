<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SAIDALYIAONLINE</title>
        <link rel="icon" href="{{ asset('/img/logo.jpeg') }}">
        <!-- Bootstrap links -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
        <!-- FontAwsome Link -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- css links -->
        <link rel="stylesheet" href="{{ asset('/css/user/nav.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/user/home.css') }}">

    </head>

    <body >
        <nav class="navbar navbar-expand-lg navbar-light first-nav" style="background-color: #2a3492;padding:0">
            <div class="container-fluid">
                <div class="branded-header-start d-flex" >

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn" style="color:white;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <a>Products</a>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="#">Pro1</a>
                                                <a class="dropdown-item" href="#">Pro2</a>
                                                <a class="dropdown-item" href="#">Pro3</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="#">Pro1</a>
                                                <a class="dropdown-item" href="#">Pro2</a>
                                                <a class="dropdown-item" href="#">Pro3</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="#">Pro1</a>
                                                <a class="dropdown-item" href="#">Pro2</a>
                                                <a class="dropdown-item" href="#">Pro3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <button class="btn" style="color:white;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <a>Categories</a>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="#">cat1</a>
                                                <a class="dropdown-item" href="#">cat2</a>
                                                <a class="dropdown-item" href="#">cat3</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="#">cat1</a>
                                                <a class="dropdown-item" href="#">cat2</a>
                                                <a class="dropdown-item" href="#">cat3</a>
                                            </div>
                                            <div class="col-lg-4">
                                                <a class="dropdown-item" href="#">cat1</a>
                                                <a class="dropdown-item" href="#">cat2</a>
                                                <a class="dropdown-item" href="#">cat3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                            </li>
                            <li class="mt-2 ml-4">
                                <select class="lang-select">
                                    <option>English</option>
                                    <option>Arabic</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="branded-header-end">
                    <form class="d-flex">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn ml-2" type="submit">Search</button> -->
                        <button class="btn ml-2" type="submit" style="padding: 0;height: 30px;width: 70px;">Sign In</button>
                        <!-- <a href="#" class="nav-link cart-tab"><i class="far fa-shopping-cart"></i><span class='badge badge-warning' id='lblCartCount'> 5 </span></a> -->
                    </form>
                </div>

                </div>
            </div>
        </nav>

        <div class="container">
            <nav class="row navbar navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/home">
                        <img src="{{ asset('/img/logo.png') }}" width="170" height="70" alt="">
                    </a>
                    <div class="branded-header-end col-lg-5 col-sm-5 pr-0 pl-0 hidden-xs">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn ml-2" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="">
                        <a href="/cart" class="cart-tab"><i class="far fa-shopping-cart cart" style="color:black;"></i><span class='badge badge-warning' id='lblCartCount'> 5 </span></a>
                        <a href="#" class="cart-tab pl-4"><i class="far fa-heart heart" style="color:black;"></i><span class='badge badge-warning' id='lblCartCount'> 2 </span></a>
                    </div>
                </div>


            </nav>
        </div>


        <div class="container-fluid" style="padding:0;margin:0;">
            @yield('content')
        </div>
        <hr>
        <footer class="text-center text-lg-start">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Footer Content</h5>

                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Links</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="">Link 1</a>
                            </li>
                            <li>
                                <a href="#!" class="">Link 2</a>
                            </li>
                            <li>
                                <a href="#!" class="">Link 3</a>
                            </li>
                            <li>
                                <a href="#!" class="">Link 4</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-0">Links</h5>

                        <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="">Link 4</a>
                        </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2020 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div> -->
            <!-- Copyright -->
        </footer>
        <a id="top-button"><i class="fas fa-arrow-up"></i></a>

        <!-- script -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script>
            var btn = $('#top-button');

            $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
            });

            btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({scrollTop:0}, '300');
            });

        </script>

    </body>
</html>
