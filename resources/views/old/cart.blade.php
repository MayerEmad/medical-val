@extends('temp')
@section('content')
<html>
    <head>
        <link href="{{asset('/css/user/cart.css')}}" rel="stylesheet">
        <!-- Slider -->
        <link href="{{asset('/css/user/slick.css')}}" rel="stylesheet">
        <link href="{{asset('/css/user/slick-theme.css')}}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid cart-container border-top">
            <h2>2 items in your cart</h2>
            <div class="row">
                <div class="col-lg-9">
                    <table class="table table-borderless" style="">
                        <thead>
                            <tr>
                                <th scope="col" style="padding-right: 0;">Product (s)</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty.</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom">
                                <td class="row pb-3 pt-3" style="max-width: 100%;padding: 0;margin: 0;">
                                    <div class="col-lg-3">
                                        <img src="{{asset('/img/panadol.jpg')}}" width= "100%" alt="product name">
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="">LoveBug Probiotics, Toddler Probiotics, Tiny Tummies Daily Probiotic + Prebiotic, 12 Mos.
                                        Up To 4 Yrs., 30 Single Serve Stick Packs, 1.59 oz ( 45 g)</p>
                                        <p class="mb-0" style="font-size: 12px;">Product ID: LVD-00034</p>
                                        <p style="font-size: 12px;">Weight: 0.25 lbs</p>
                                        <a href="#" style="color: #00594c">Add to Wishlist</a>
                                        <span style="padding: 0px 6px;"> | </span>
                                        <a href="#" style="color: #00594c">Remove</a>
                                    </div>
                                </td>
                                <td>$69.99</td>
                                <td><input type="number" value="1" class="form-control"></td>
                                <td>
                                    <p style="text-decoration: line-through;margin-bottom: 0;">$69.99</p>
                                    <p>$49.55</p>
                                </td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="row pb-3 pt-3" style="max-width: 100%;padding: 0;margin: 0;">
                                    <div class="col-lg-3">
                                        <img src="{{asset('/img/panadol.jpg')}}" width= "100%" alt="product name">
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="">LoveBug Probiotics, Toddler Probiotics, Tiny Tummies Daily Probiotic + Prebiotic, 12 Mos.
                                        Up To 4 Yrs., 30 Single Serve Stick Packs, 1.59 oz ( 45 g)</p>
                                        <p class="mb-0" style="font-size: 12px;">Product ID: LVD-00034</p>
                                        <p style="font-size: 12px;">Weight: 0.25 lbs</p>
                                        <a href="#" style="color: #00594c">Add to Wishlist</a>
                                        <span style="padding: 0px 6px;"> | </span>
                                        <a href="#" style="color: #00594c">Remove</a>
                                    </div>
                                </td>
                                <td>$69.99</td>
                                <td><input type="number" value="1" class="form-control"></td>
                                <td>
                                    <p style="text-decoration: line-through;margin-bottom: 0;">$69.99</p>
                                    <p>$49.55</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="border p-4" style="border-radius: 10px;">
                        <p>Destination:Egypt<a href="#" class="pl-3" style="color: #00594c;">Change</a></p>
                        <input type="text" class="form-control" placeholder="Zip Code" style="width: 45%;float: left;">
                        <a href="#" class="btn ml-2 cart-btn" type="button">Calculate</a>
                    </div>
                    <!-- Brand Start -->
                    <div class="brand mt-2">
                        <div class="container-fluid">
                            <div class="brand-slider row">
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip" style="width: 17rem;">
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="pl-0">Product 1 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="#" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:70px;margin-left:65px;"><i class="fa fa-clone pr-1"></i>Compare</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip" style="width: 17rem;">
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="pl-0">Product 2 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="#" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:70px;margin-left:65px;"><i class="fa fa-clone pr-1"></i>Compare</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip" style="width: 17rem;">
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="pl-0">Product 3 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="#" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:70px;margin-left:65px;"><i class="fa fa-clone pr-1"></i>Compare</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip" style="width: 17rem;">
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="pl-0">Product 4 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="#" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:70px;margin-left:65px;"><i class="fa fa-clone pr-1"></i>Compare</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="brand-item p-2 col-lg-4">
                                    <div class="card pro-not-flip" style="width: 17rem;">
                                        <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="pl-0">Product 5 <p style="float:right;">50$</p></h5>
                                            <p class="card-text">Description</p>
                                            <a href="#" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
                                        </div>
                                        <div class="">
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:70px;margin-left:65px;"><i class="fa fa-clone pr-1"></i>Compare</a>
                                            <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Brand End -->
                </div>

                <div class="col-lg-3 summary">
                    <div class="pl-3 order" style="border: 1px solid #cccccc;border-radius: 10px;overflow-y: scroll;height: 420px;">
                        <h3 class="pt-2">Order Summary</h3>
                        <div class="pt-3 first">
                            <p style="font-size: 14px;font-weight: 700;">Apply Promo Code</p>
                            <input type="text" class="form-control" placeholder="One code per order" style="width: 65%;float: left;">
                            <a href="#" class="btn ml-2 cart-btn">Apply</a>
                        </div>
                        <hr style="width: 95%;">
                        <div class="">
                            <p style="color: #00594c;font-size: 14px;">Rewards Discount: <span class="text-danger" style="float: right;font-size: 16px;">-$24.44</span></p>
                            <p class="pt-0" style="font-size: 11px;line-height: 1px;">Applied to 7 items</p>
                        </div>
                        <hr>
                        <div class="">
                            <p>Items Total: <span style="float: right;font-size: 16px;">$69.55</span></p>
                            <p style="color: #00594c;font-weight: 500;">Discounts: <span class="text-danger" style="float: right;font-size: 16px;font-weight: 400;">-$24.44</span></p>
                        </div>
                        <hr>
                        <div class="">
                            <p style="font-size: 14px;">Subtotal: <span style="float: right;font-size: 16px;">$49.55</span></p>
                            <p style="font-size: 14px;">Shipping: <span style="float: right;font-size: 16px;font-weight: 500;">Calculate</span></p>
                        </div>
                        <hr>
                        <div class="">
                            <p style="font-size: 18px;font-weight: 500;">Order Total: <span style="float: right;">$49.55</span></p>
                        </div>
                        <div class="pr-3 mb-4">
                            <a href="#" class="btn w-100 cart-btn" type="button">Proceed to Checkout</a>
                        </div>
                    </div>
                    <div class="text-center">
                        <h5 class="pt-3 pb-2">Accepted Payment Methods</h5>
                        <img src="{{ asset('/img/credit/visa.png') }}" alt="">
                        <img src="{{ asset('/img/credit/cirrus.png') }}" alt="">
                        <img src="{{ asset('/img/credit/mastercard.png') }}" alt="">
                        <img src="{{ asset('/img/credit/paypal2.png') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
        <script src="{{asset('/js/user/slick.min.js')}}"></script>
        <script>
            $('.brand-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay: false,
                autoplaySpeed: 500,
            });
        </script>
    </body>
</html>
@endsection
