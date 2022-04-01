@extends("layout")
<style>
    .site-section .container .row .col-lg-6 .dropdown-menu.show{
        display: block
    }
    .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    }

    .switch input {
    opacity: 0;
    width: 0;
    height: 0;
    }

    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }

    input:checked + .slider {
    background-color: #51eaea;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px #51eaea;
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
    border-radius: 34px;
    }

    .slider.round:before {
    border-radius: 50%;
    }
</style>
@section("content")
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index">{{ __('message.Home') }}</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ __('message.Store') }}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">{{ __('message.Filter by Name') }}</h3>
                <input type="text" name="text" id="product_name" class="form-control border-1 pl-1 bg-white"
                        style="width:80%; height:36px;" value="" />
            </div>

          <div class="col-lg-3">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">{{ __('message.Filter by Price') }}</h3>
                <div id="slider-range" class="border-primary"></div>
                <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
          </div>
          <div class="col-lg-3">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">{{ __('message.Filter by Sale') }}</h3>
                <label class="switch">
                    <input type="checkbox" id="discount">
                    <span class="slider round"></span>
                </label>
          </div>
          {{-- <div class="col-lg-6">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Filter by Reference</h3>
            <button type="button" class="btn btn-secondary btn-md dropdown-toggle px-4" id="dropdownMenuReference"
              data-toggle="dropdown">Reference</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuReference" style="">
                <a class="dropdown-item" href="#">Price, low to high</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Price, high to low</a>
            </div>
          </div> --}}
          <div class="col-lg-3">
                <button class="btn btn-primary mb-4 p-0" onclick="return productFilter()" id="filter-btn" style="width: 50%;margin: auto; height: 36px;" data-bs-toggle="pill" data-bs-target="#v-pills-filter" type="submit" role="tab" aria-controls="v-pills-filter" aria-selected="false">
                    {{ __('message.FILTER') }}
                </button>

          </div>
        </div>
        <form  id="productDetailsForm" action="" method="GET">
        </form>
        <div class="row" id="products-search-div">
            @foreach($products as $product)
                <div class="col-sm-6 col-lg-4 col-md-6 text-center item mb-4" onclick="submitForm('{{$product->id}}')">
                    <div class="product-option">
                        <a href="{{ action('Client\CartController@store', ['product' => $product])  }}" onclick="showSwal('auto-close','{{ __('message.Item_added') }}')"  title="Add to cart" ><i class="fas fa-shopping-cart"></i></a>
                        <a href="{{ action('Client\WishListController@store', ['product' => $product])  }}" title="Add to wishlist"><i class="fas fa-heart"></i></a>
                        <a href="{{ action('Client\CompareController@store', ['product' => $product])  }}" title="Compare"><i class="far fa-copy"></i></a>
                    </div>
                    @if($product->discount>0)
                        <span class="tag">{{ __('message.Sale') }}</span>
                    @endif
                     <img src="images/product_01.png" alt="Image">
                    <h3 class="text-dark">
                        @if (session()->get('locale') == 'ar'){{$product->ar_name}}
                        @else{{$product->name}}
                        @endif
                    </h3>
                    <p class="price"><del>{{$product->price}}</del> &mdash; ${{$product->price-$product->discount}}</p>
                </div>
            @endforeach
          {{-- @include('shop-pagination') --}}
        </div>
        {{-- <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> --}}
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

    function productFilter()
    {
        var price_range=$("#amount").val();
        var product_name=$("#product_name").val();
        var hasSale=$('#discount').is(":checked")
        $.ajax({
            url:"{{route('shop.productfilter')}}",
            method:"GET",
            data:{
                price_range:price_range,
                product_name:product_name,
                hasSale:hasSale
                },
            dataType:'json',
            success:function(data)
            {
                $("#products-search-div").html('');
                $("#products-search-div").append(data);
            }
        });
    }

    // function goToDetails(id){
    //     let url=""//"/details/"+id;
    //     $('#productDetailsForm').attr('action',url);
    //     $( "#productDetailsForm" ).submit();
    // }
    function submitForm(id){
    // $('#'+id).submit();
    console.log(id);
    var form = document.createElement("form");
    var element1 = document.createElement("input");
    // var element2 = document.createElement("input");
    form.method = "GET";
    form.action = "{{ action('Client\ShopController@productDetails') }}";
    element1.value=id;
    element1.name="id";
    form.appendChild(element1);
    // element2.value=pw;
    // element2.name="rowId";
    // form.appendChild(element2);
    document.body.appendChild(form);
    form.submit();
}
    // $(document).ready(function() {

    //         $(document).on('click', '.pagination a', function(event) {
    //             event.preventDefault();
    //             var page = $(this).attr('href').split('page=')[1];
    //             fetch_data(page);
    //         });

    //         function fetch_data(page) {
    //             alert('fetc');
    //             var price_range=$("#amount").val();
    //             var product_name=$("#product_name").val();
    //             $.ajax({
    //                 url: "/shop/pagination?page=" + page,
    //                 data:{
    //                     price_range:price_range,
    //                     product_name:product_name
    //                     },
    //                 success: function(data) {
    //                    // $('#products-search-div').html(data);
    //                 }
    //             });
    //         }
    // });

</script>
