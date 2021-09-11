@extends('temp')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="{{asset('/css/user/productdetail.css')}}">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/user/reset.css')}}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


    <style type="text/css">

    body{
        margin: 0 auto;
    }

    .piclist{
        margin-top: 30px;
    }
    .piclist li{
        display: contents;
    }
    /* .piclist li img{
        width: 100%;
        height: auto;
    } */

    /* custom style */
    .picZoomer-pic-wp,
    .picZoomer-zoom-wp{
        border: 1px solid #fff;
    }
    a:hover{
        text-decoration: none;
    }
    form fieldset{
        border: none;
    }

    </style>
<!-- slick -->
    <link href="{{asset('/css/user/slick.css')}}" rel="stylesheet">
    <link href="{{asset('/css/user/slick-theme.css')}}" rel="stylesheet">
<!-- zoom -->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/user/jquery-picZoomer.css')}}">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{asset('/js/user/src/jquery.picZoomer.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $('.picZoomer').picZoomer();


            //切换图片
            $('.piclist li').on('click',function(event){
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src',$pic.attr('src'));
            });
        });
    </script>
    <!-- rating stars -->
    <script type="text/javascript" src="{{asset('/js/user/src/rating.js')}}"></script>
    <!-- compare -->
    <link rel="stylesheet" href="{{ asset('/css/user/compare.css') }}">
</head>
<body>
    <div class="container-fluid">
        <p class="head-pro-details mt-4 mb-3 ml-3"><a href="/home">Home</a>  > <a href="#">Food Supplements</a> > <a href="#">Products</a> > <a href="#">Triple VIT</a></p>
        <div class="row">
            <div class="col-lg-7">
                <div class="picZoomer">
                    <img src="{{asset('/img/img1.jpg')}}" height="320" width="320" alt="">
                </div>
                <ul class="piclist">
                    <li><img class="pro-image" src="{{asset('/img/img1.jpg')}}" alt=""></li>
                    <li><img class="pro-image" src="{{asset('/img/img2.jpg')}}" alt=""></li>
                </ul>
            </div>
            <div class="col-lg-5">
                <!-- Product Description -->
                <div class="product-description">
                    <span>Food Supplement</span>
                    <h1>Triple VIT</h1>
                    <!-- <div id="status"></div> -->
                    <form id="ratingForm" class="mb-2">
                        <fieldset class="rating">
                            <!-- <legend>Please rate:</legend> -->
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                        </fieldset>
                        <!-- <p class="pt-2 pl-2">4,5</p> -->
                        <div class="clearfix"></div>
                        <!-- <button class="submit clearfix">Submit</button> -->
                    </form>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>



                <!-- Cable Configuration -->
                <div class="pro-price" style="height: 15%;">
                    <!-- <span>Cable configuration</span> -->
                    <div class="pro-quantity" style="display: inline-block;">
                        <label class="" for="Quantity" style="float: left;padding-right: 15px;padding-top: 5px;">Quantity:</label>
                        <div class="def-number-input number-input safari_only">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                        </div>

                    </div>
                    <label class="lead h3" style="float: right;padding-top: 3px;"><s class="lead">148$</s></label>
                    <div class="cable-choose"></div>
                    <label class="h5 lead" style="float: right;margin-top: -20px;">120$</label>

                    <!-- <a href="#">How to configurate your headphones</a> -->
                </div>

                <!-- Product Pricing -->
                <div class="product-price">
                    <a href="#" class="cart-btn" style="margin: 0px 50px;"><i class="far fa-shopping-cart" style="padding-right: 5px;"></i>Add to Cart</a>
                    <a href="#" class="cart-btn"><i class="far fa-heart" style="padding-right: 5px;"></i>Add to Wishlist</a>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////////////////////// -->
        <div class="container mt-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color: #2a316e;">
                <li class="nav-item" role="presentation" style="width: 33.333333333%;marg">
                  <a class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">DESCRIPTION</a>
                </li>
                <li class="nav-item" role="presentation" style="width: 33.333333333%;">
                  <a class="nav-link" id="information-tab" data-bs-toggle="tab" data-bs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="false">INFORMATION</a>
                </li>
                <li class="nav-item" role="presentation" style="width: 33.333333333%;">
                  <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">REVIEWS</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active ml-4" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <h4 class="mt-3" style="">Product Description</h4>
                    <p class="small text-muted text-uppercase mb-2">Category name</p>
                    <label class="h5 lead" style="font-weight: 500;">120 $</label>
                    <p class="pt-1 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo. Sit
                        error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam. Distinctio,
                        officia quis dolore quos sapiente tempore alias.</p>
                </div>

                <div class="tab-pane fade ml-4" id="information" role="tabpanel" aria-labelledby="information-tab">
                    <ul class="mt-3">
                        <li class="pro-info">Expiration Date: <span>December 1 2023</span> </li>
                        <li class="pro-info">Date First Available: <span>September 7 2016</span></li>
                        <li class="pro-info">Shipping Weight: <span>0.38 lbs</span></li>
                        <li class="pro-info">Product Code: <span>CGN-01066</span> </li>
                        <li class="pro-info">UPC Code: <span>898220010660</span></li>
                        <li class="pro-info">Package Quantity: <span>360 Count</span></li>
                        <li class="pro-info">Dimensions: <span>4.5 x 2.5 x 2.5 in, 0.324 lbs</span></li>
                    </ul>
                </div>
                <div class="tab-pane fade ml-4" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <h5 class="mt-3"><span>1</span> review for <span>this product</span></h5>
                    <div class="media mt-3 mb-4">
                        <img class="d-flex mr-3 z-depth-1" src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" width="62" alt="Generic placeholder image">
                        <div class="media-body">
                            <div class="d-sm-flex justify-content-between">
                                <p class="mt-1 mb-2">
                                    <strong>Marthasteward </strong>
                                    <span>– </span><span>January 28, 2020</span>
                                </p>
                                <ul class="rating mb-sm-0" style="display: flex;">
                                    <li>
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                    </li>
                                    <li>
                                        <i class="far fa-star fa-sm text-primary"></i>
                                    </li>
                                </ul>
                            </div>
                            <p class="mb-0">Nice one, love it!</p>
                        </div>
                    </div>
                    <hr>
                    <h5 class="mt-4">Add a review</h5>
                    <p>Your email address will not be published.</p>
                    <div class="review">
                        <!-- Your review -->
                        <div class="md-form md-outline">
                            <label for="form76">Your review</label>
                            <textarea id="form76" class="md-textarea form-control pr-6" rows="4" placeholder="Message"></textarea>
                        </div>
                        <!-- Name -->
                        <div class="md-form md-outline">
                            <label for="form75">Name</label>
                            <input type="text" id="form75" class="form-control pr-6" placeholder="Your Name">
                        </div>
                        <!-- Email -->
                        <div class="md-form md-outline">
                            <label for="form77">Email</label>
                            <input type="email" id="form77" class="form-control pr-6" placeholder="Your Email">
                        </div>
                        <div class="text-right pb-2 mt-3">
                            <a type="button" class="btn btn-primary">Add a review</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 100%">
        <h3 class="ml-3">Related Products</h3>
        <div class="brand mt-2">
                        <div class="container-fluid">
                            <div class="brand-slider row">
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro1" data-id="pro1">
                                        <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top productImg" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Product 1 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro2" data-id="pro2">
                                        <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top productImg" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Product 2 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro3" data-id="pro3">
                                        <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top productImg" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Product 3 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro4" data-id="pro4">
                                        <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top productImg" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Product 4 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro5" data-id="pro5">
                                        <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top productImg" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Product 1 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
    </div>
    <script src="{{asset('/js/user/slick.min.js')}}"></script>
    <script>
            $('.brand-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 3,
                autoplay: false,
                autoplaySpeed: 500,
            });
        </script>
</body>
<script src="{{asset('/js/user/compare.js')}}"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>

@endsection
