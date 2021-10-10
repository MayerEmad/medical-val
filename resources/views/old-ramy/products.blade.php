@extends('home')
@section('products')
<div class="row mt-2" id='products'>
    <div class="col-lg-4">
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
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro2" data-id="pro2">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
            <img src="{{ asset('/img/img1.jpg')}}" class="card-img-top productImg" alt="...">
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
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro3" data-id="pro3">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
            <img src="{{ asset('/img/img2.jpg')}}" class="card-img-top productImg" alt="...">
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
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro4" data-id="pro4">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare" alt="Compare">+</a>
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
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro5" data-id="pro5">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
            <img src="{{ asset('/img/img1.jpg')}}" class="card-img-top productImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product 5 <p style="float:right;">50$</p></h5>
                <p class="card-text">Description</p>
                <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
            </div>
            <div class="">
                <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro6" data-id="pro6">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
            <img src="{{ asset('/img/img2.jpg')}}" class="card-img-top productImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product 6 <p style="float:right;">50$</p></h5>
                <p class="card-text">Description</p>
                <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
            </div>
            <div class="">
                <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro7" data-id="pro7">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare" alt="Compare">+</a>
            <img src="{{ asset('/img/panadol.jpg')}}" class="card-img-top productImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product 7 <p style="float:right;">50$</p></h5>
                <p class="card-text">Description</p>
                <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
            </div>
            <div class="">
                <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro8" data-id="pro8">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
            <img src="{{ asset('/img/img1.jpg')}}" class="card-img-top productImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product 8 <p style="float:right;">50$</p></h5>
                <p class="card-text">Description</p>
                <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
            </div>
            <div class="">
                <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro9" data-id="pro9">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
            <img src="{{ asset('/img/img2.jpg')}}" class="card-img-top productImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product 9 <p style="float:right;">50$</p></h5>
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
@endsection


@section('featured')
<div class="row mt-4" id='featured'>
    <div class="col-lg-4">
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
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro2" data-id="pro2">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
            <img src="{{ asset('/img/img1.jpg')}}" class="card-img-top productImg" alt="...">
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
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro3" data-id="pro3">
                <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                <img src="{{ asset('/img/img2.jpg')}}" class="card-img-top productImg" alt="...">
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
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro4" data-id="pro4">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare" alt="Compare">+</a>
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
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro5" data-id="pro5">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
            <img src="{{ asset('/img/img1.jpg')}}" class="card-img-top productImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product 5 <p style="float:right;">50$</p></h5>
                <p class="card-text">Description</p>
                <a href="/cart" class="btn buttons" style="width: 100%;"><i class="far fa-shopping-cart pr-1"></i>Add to cart</a>
            </div>
            <div class="">
                <a href="/productdetails" class="btn btn-dis buttons" style="margin-top:70px;margin-left:75px;"><i class="far fa-info-circle pr-1"></i>Details</a>
                <a href="#" class="btn btn-dis buttons" style="margin-top:115px;margin-left:72px;"><i class="far fa-heart pr-1"></i>Wishlist</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card pro-not-flip selectProduct" style="width: 18rem;" data-title="pro6" data-id="pro6">
            <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
            <img src="{{ asset('/img/img2.jpg')}}" class="card-img-top productImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">Product 6 <p style="float:right;">50$</p></h5>
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
@endsection


@section('categories')
<div class="row mt-4">
    <div class="col-lg-4 flip-card">
        <div class="card flip-card-inner" style="width: 18rem;">
            <img src="{{ asset('/img/makeup.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Categories name</h5>
                <!-- <p class="card-text">Description</p> -->
            </div>
            <div class="flip-card-back">
                <p class="pt-4 lead pr-1 pl-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('categoryname1')
<div class="row mt-4" id="cat1">
    <div class="col-lg-4">
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
</div>
@endsection

@section('categoryname2')
<div class="row mt-4" id="cat2">
    <div class="col-lg-4">
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
</div>
@endsection

@section('categoryname3')
<div class="row mt-4" id="cat3">
    <div class="col-lg-4">
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
</div>
@endsection
