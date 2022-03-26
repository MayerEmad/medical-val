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

    <div class="d-flex align-items-start">
      {{-- <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
      </div> --}}
      {{-- <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">hhh</div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">sss</div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
      </div> --}}
    </div>

    <div class="site-section">
      <div class="container-fluid">
        <div class="row">

          <div class="col-1g-3 col-md-3 col-sm-12" style="background: #dbeaf79c">
            <div class="title-section text-center">
              <h2 class="text-uppercase">{{ __('message.FILTER') }}</h2>
            </div>
            <div class="nav flex-column nav-pills me-3 m-auto" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 75%;">
              <button class="nav-link active" id="v-pills-Products-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Products" type="button" role="tab" aria-controls="v-pills-Products" aria-selected="true">{{ __('message.Products') }}</button>
              <button class="nav-link" id="v-pills-Categories-tab" data-bs-toggle="pill" data-bs-target="#v-pills-Categories" type="button" role="tab" aria-controls="v-pills-Categories" aria-selected="false">{{ __('message.Categories') }}</button>
              <p class="lead mb-0 pl-4">{{ __('message.By_price') }}:</p>
              <div id="slider-range" class="border-primary mt-3"></div>
              <input type="text" style="background: #dbeaf700" name="text" id="amount" class="form-control border-0 pl-0" disabled="" />
              <button class="btn btn-primary mb-4 p-0" id="v-pills-filter-tab" style="width: 50%;margin: auto;" data-bs-toggle="pill" data-bs-target="#v-pills-filter" type="button" role="tab" aria-controls="v-pills-filter" aria-selected="false">{{ __('message.FILTER') }}</button>
              {{-- <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> --}}
            </div>
          </div>

          <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="title-section text-center col-lg-9 col-sm-12 col-md-9">
              <h2 class="text-uppercase">{{ __('message.POPULAR_PRODUCTS') }}</h2>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-Products" role="tabpanel" aria-labelledby="v-pills-Products-tab">
                <div class="row">
				   @foreach($products as $product)
                  <div class="col-sm-6 col-lg-4 col-md-6 text-center item mb-4">
                    <div class="product-option">
                    <a href="{{ action('Client\CartController@store', ['product' => $product])  }}" onclick="showSwal('auto-close')"  title="Add to cart" ><i class="fas fa-shopping-cart"></i></a>

                      <!-- <a href="#" title="Add to cart" onclick="showSwal('auto-close')"><i class="fas fa-shopping-cart"></i></a> -->
                      <a href="#" title="Add to wishlist"><i class="fas fa-heart"></i></a>
                      <a href="{{ action('Client\CompareController@store', ['product' => $product])  }}" title="Compare"><i class="far fa-copy"></i></a>

                    </div>
                    <a href="shop-single"> <img src="images/product_01.png" alt="Image"></a>
                    <h3 class="text-dark"><a href="shop-single">{{$product->name}}</a></h3>
                    <p class="price"><del>{{$product->price}}</del> &mdash; ${{$product->price-$product->discount}}</p>
                  </div>
				  @endforeach;
                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-Categories" role="tabpanel" aria-labelledby="v-pills-Categories-tab">
                <div class="row">
                @foreach($categories as $category)

                  <div class="col-sm-6 col-lg-4 col-md-6 text-center mb-4">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="images/makeup.jpg" alt="Avatar" style="width:100%;height:300px;">
                        </div>
                        <div class="flip-card-back">
                          <h1 class="pt-4">{{$category->name}}</h1>
                          <p class="pt-2">{{$category->description }}</p>
                          {{-- <p>We love that guy</p> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach;

                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-filter" role="tabpanel" aria-labelledby="v-pills-filter-tab">...</div>
              {{-- <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div> --}}
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="shop" class="btn btn-primary px-4 py-3">{{ __('message.View_all_products') }}</a>
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
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">{{ __('message.New_Products') }}</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
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
                @endforeach;

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
