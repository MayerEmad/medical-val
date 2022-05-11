@extends("layout")
@section("content")
    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">{{ __('message.Effective_Medicine') }}, {{ __('message.New_Medicine_Everyday') }}</h2>
              <h1>{{ __('message.Welcome_To_SAIDALYIAONLINE') }}</h1>
              <p>
                <a href="/shop" class="btn btn-primary px-5 py-3">{{ __('message.Shop_Now') }}</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="title-section text-center col-lg-9 col-sm-12 col-md-9">
              <h2 class="text-uppercase">{{ __('message.Categories') }}</h2>
            </div>
                <div class="row">
                @foreach($categories as $category)
                  <div class="col-sm-6 col-lg-3 col-md-4 text-center mb-4">
                    <div class="flip-card" style="height:300px;">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="images/makeup.jpg" alt="Avatar" style="width:100%;height:300px;">
                        </div>
                            <div class="flip-card-back">
                            <h1 class="pt-4">{{$category->name}}</h1>
                            <p class="pt-2">{{$category->description }}</p>
                            <a href="{{ route('shop',['parentCat'=>$category]) }}" style="color:#2A316E;"><h3 class="pt-4">{{ __('message.Products') }}</h3></a>
                            </div>
                      </div>
                    </div>
                  </div>
                  @endforeach;

                </div>
            </div>
        </div>
      </div>
    </div>


    {{-- <div class="wrapper text-center">
      <h4 class="card-title">Alerts Popups</h4>
      <p class="card-description">A message with auto close timer</p>
      <button class="btn btn-outline-success" onclick="showSwal('auto-close')">Click here!</button>
    </div> --}}

    <div class="site-section bg-light">
      <div class="container">
        <div class="row" id="sale-slide">
            <div class="title-section text-center col-12" style="background-color:#e9621e;">
                <h2 class="text-uppercase">{{ __('message.sale_products') }}</h2>
            </div>
            <div class="col-md-12 block-3 products-wrap">
              <div dir="ltr"class="nonloop-block-3 owl-carousel">
                  @foreach($saleProducts as $product)
                  <div class="text-center item mb-4">
                    <div class="product-option">
                    <a href="{{ action('Client\CartController@store', ['product' => $product])  }}" onclick="showSwal('auto-close')"  title="Add to cart" ><i class="fas fa-shopping-cart"></i></a>

                      <!-- <a href="#" title="Add to cart" onclick="showSwal('auto-close')"><i class="fas fa-shopping-cart"></i></a> -->
                      <a href="#" title="Add to wishlist"><i class="fas fa-heart"></i></a>
                      <a href="#" title="Compare"><i class="far fa-copy"></i></a>
                    </div>
                    <a href="shop-single"> <img src="images/product_01.png" alt="Image"></a>
                    <h3 class="text-dark"><a href="shop-single">{{$product->name}}</a></h3>
                    <p class="price"><del>{{$product->price}}</del> &mdash; ${{$product->price-$product->discount}}</p>
                  </div>
                  @endforeach
              </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">{{ __('message.New_Products') }}</h2>
            </div>
          <div class="col-md-12 block-3 products-wrap">
            <div dir="ltr"class="nonloop-block-3 owl-carousel">
                @foreach($products as $product)
                <div class="text-center item mb-4">
                  <div class="product-option">
                  <a href="{{ action('Client\CartController@store', ['product' => $product])  }}" onclick="showSwal('auto-close')"  title="Add to cart" ><i class="fas fa-shopping-cart"></i></a>

                    <!-- <a href="#" title="Add to cart" onclick="showSwal('auto-close')"><i class="fas fa-shopping-cart"></i></a> -->
                    <a href="#" title="Add to wishlist"><i class="fas fa-heart"></i></a>
                    <a href="#" title="Compare"><i class="far fa-copy"></i></a>
                  </div>
                  <a href="shop-single"> <img src="images/product_01.png" alt="Image"></a>
                  <h3 class="text-dark"><a href="shop-single">{{$product->name}}</a></h3>
                  <p class="price"><del>{{$product->price}}</del> &mdash; ${{$product->price-$product->discount}}</p>
                </div>
                @endforeach

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="images/product_03.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="images/product_01.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="images/product_02.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

              <div class="text-center item mb-4">
                <a href="shop-single"> <img src="images/product_04.png" alt="Image"></a>
                <h3 class="text-dark"><a href="shop-single">Umcka Cold Care</a></h3>
                <p class="price">$120.00</p>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="row mt-5">
            <div class="col-12 text-center">
              <a href="shop" class="btn btn-primary px-4 py-3">{{ __('message.View_all_products') }}</a>
            </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_1.jpg');">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url('images/bg_2.jpg');">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection
<script>
    function submitForm(id)
    {
        console.log(id);
        var form = document.createElement("form");
        var element1 = document.createElement("input");
        form.method = "GET";
        form.action = "{{ action('Client\ShopController@productDetails') }}";
        element1.value=id;
        element1.name="id";
        form.appendChild(element1);
        document.body.appendChild(form);
        form.submit();
    }
</script>
