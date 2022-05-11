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

    #slider-range{
      width:80%;
      min-width:150px;
    }
    .form-control{
        width:80%!important; height:36px!important;
        min-width:150px!important; -webkit-appearance: listbox !important;
    }
    @media (max-width: 576px){

        /*this class I created it my self because its not downloaded*/
        .col-xs-6{
            /* padding-right: 2% !important;
            padding-left: 2% !important;
            width: 82% !important;
            margin: 4px 6% 0px 6%; */
        }
    }
    @media(min-width: 768px){
        .site-wrap {
            /* sticky issue */
            overflow-x: unset !important;
        }
        .sticky {
            position: -webkit-sticky !important; /* Safari */
            align-self: flex-start !important;
            position: sticky !important;
            top: 0 !important;
        }
    }
    @media (max-width: 991px){
        .lead{
          font-size: 1rem !important;
        }
    }
</style>
@section("content")
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/index">{{ __('message.Home') }}</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{ __('message.Store') }}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">

      <div class="container-fluid">
        {{-- style="overflow: overlay;height: 100vh;" sticky issue --}}
        <div class="row"  >
          {{-----------------------------Mysearch----------------------------}}
          <div class="col-1g-3 col-md-3 col-sm-12 sticky" style="background: #dbeaf79c">
                <div class="title-section text-center">
                    <h2 class="text-uppercase">{{ __('message.FILTER') }}</h2>
                </div>
                <div class="m-auto row"  aria-orientation="vertical" style="width: 100%;">
                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 mb-3">
                        <h3 class="mb-2 h6 text-uppercase lead d-block">{{ __('message.Filter by Category') }}</h3>
                        <select name="text" id="category_id" class="form-control border-1 pl-1 bg-white" onchange="changeSubCategories(value);">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 mb-3">
                        <h3 class="mb-2 h6 text-uppercase lead d-block">{{ __('message.Filter by Sub Category') }}</h3>
                        <select name="text" id="sub_category_id" class="form-control border-1 pl-1 bg-white">
                            {{-- <option value="-1"></option>
                            @foreach($subCategories as $subCategory)
                                <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                            @endforeach --}}
                        </select>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 mb-3">
                        <h3 class="mb-2 h6 text-uppercase lead d-block">{{ __('message.Filter by Name') }}</h3>
                        <input type="text" name="text" id="product_name" class="form-control border-1 pl-1 bg-white"/>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 mb-3">
                        <h3 class="mb-2 h6 text-uppercase lead d-block">{{ __('message.Filter by Price') }}</h3>
                        <div id="slider-range" class="border-primary"></div>
                        <input type="text" name="text" id="amount" class="form-control border-0 pl-0" disabled="" />
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 mb-3">
                        <h3 class="mb-2 h6 text-uppercase lead d-block">{{ __('message.Filter by Sale') }}</h3>
                        <label class="switch">
                            <input type="checkbox" id="discount">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 mb-2">
                        <button class="btn btn-primary mb-4 p-0" onclick="return productFilter()" id="filter-btn" style="width: 94%;margin: auto; height: 36px;" data-bs-toggle="pill" data-bs-target="#v-pills-filter" type="submit" role="tab" aria-controls="v-pills-filter" aria-selected="false">
                        {{ __('message.FILTER') }}
                        </button>
                    </div>
                    <form  id="productDetailsForm" action="" method="GET">
                    </form>
                </div>
          </div>


          <div class="col-sm-12 col-md-9 col-lg-9">
            <div class="title-section text-center col-lg-9 col-sm-12 col-md-9 sticky" style="z-index: 3">
            <h2 class="text-uppercase">{{ __('message.POPULAR_PRODUCTS') }}</h2>
            </div>
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-Products" role="tabpanel" aria-labelledby="v-pills-Products-tab">
                <div class="row" id="products-search-div">
                    @foreach($products as $product)
                    <div class="col-xs-6 col-sm-6 col-lg-4 col-md-6 text-center item mb-4" onclick="submitForm('{{$product->id}}')">
                        <div class="product-option">
                            <a href="{{ action('Client\CartController@store', ['product' => $product])  }}" onclick="showSwal('auto-close','{{ __('message.Item_added') }}')"  title="Add to cart" ><i class="fas fa-shopping-cart"></i></a>
                            <a href="{{ action('Client\WishListController@store', ['product' => $product])  }}" title="Add to wishlist"><i class="fas fa-heart"></i></a>
                            <a href="{{ action('Client\CompareController@store', ['product' => $product])  }}" title="Compare"><i class="far fa-copy"></i></a>
                        </div>
                        @if($product->discount>0)
                            <span class="tag" @if (session()->get('locale') == 'ar') style="left:7px !important;" @endif>
                                {{ __('message.Sale') }}
                            </span>
                        @endif
                         <img src="{{ asset('images/product_01.png') }}" alt="Image">
                        <h3 class="text-dark">
                            @if (session()->get('locale') == 'ar'){{$product->ar_name}}
                            @else{{$product->name}}
                            @endif
                        </h3>
                        <p class="price"><del>{{$product->price}}</del> &mdash; ${{$product->price-$product->discount}}</p>
                    </div>
                    @endforeach
                </div>
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

    <form  id="changeParentCatForm" action="" method="GET">
        {{-- @csrf --}}
    </form>
@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    window.onload = function() {

        //onloaad filter if we have parentCat or parent and sub cat
        var parentCategory=<?php echo json_encode($parentCat); ?>;
        var subCategory=<?php echo json_encode($subCat); ?>;
            if(parentCategory!=null){
                if(subCategory!=null){
                    //alert(subCategory);
                    console.log(subCategory['id']);
                    productFilter(parentCategory['id'],subCategory['id']);
                }else{
                    productFilter(parentCategory['id'],-1);
                }

            }
        //get sub categories after loading or you get undefined
        //onload we will get the sub categories
        if(parentCategory==null){
            changeSubCategories($("#category_id").val());
        }else{
            $('#category_id option').each(function(){
                if($(this).attr('value') == parentCategory['id']){
                        $(this).attr('selected',true);
                }
            });
            changeSubCategories(parentCategory['id']);
        }
    }
    // function changeParentCategory(parent_category_id){
    //     var categories= <?php echo json_encode($categories); ?>;
    //     var catObject;
    //     for(var i=0;i<categories.length;i++){
    //         if(categories[i]['id']==parent_category_id){
    //             catObject=categories[i];
    //             break;
    //         }
    //     }
    //     //console.log(catObject);
    //     let url="/shop/"+catObject;
    //     $('#changeParentCatForm').attr('action',url);
    //     $( "#changeParentCatForm" ).submit();
    // }
    function changeSubCategories(parent_category_id) { //alert(parent_category_id);
        $.ajax({
            url:"{{route('shop.getSubCategories')}}",
            method:"GET",
            data:{
                parent_category_id:parent_category_id,
                },
            dataType:'json',
            success:function(data)
            {
                $("#sub_category_id").empty();
                $('#sub_category_id').append("<option value="+ -1 +">{{ __('message.All Sub Categories') }}</option>");
                var lang= <?php echo json_encode(session()->get('locale')); ?>;
                for(var i=0;i<data.length;i++){
                    if(lang=='ar'){name=data[i]['ar_name'];}
                    else {name=data[i]['name'];}
                    $('#sub_category_id').append("<option value="+data[i]['id']+">"+name+"</option>");
                }

                var subCategory=<?php echo json_encode($subCat); ?>;
                if(subCategory!=null){
                    $('#sub_category_id option').each(function(){
                        if($(this).attr('value') == subCategory['id']){
                                $(this).attr('selected',true);
                        }
                    });
                }
            }
        });
    }

    function productFilter(parentCatId = null,subCatId = null)
    {
        var price_range=$("#amount").val();
        var product_name=$("#product_name").val();
        var hasSale=$('#discount').is(":checked");
        var category_id=(parentCatId==null)?$("#category_id").val():parentCatId;
        var sub_category_id=(subCatId==null)?$("#sub_category_id").val():subCatId;;

        $.ajax({
            url:"{{route('shop.productfilter')}}",
            method:"GET",
            data:{
                price_range:price_range,
                product_name:product_name,
                hasSale:hasSale,
                category_id:category_id,
                sub_category_id:sub_category_id
                },
            dataType:'json',
            success:function(data)
            {
                $("#products-search-div").html('');
                $("#products-search-div").append(data);
            }
        });
    }

    function submitForm(id){

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

 {{-- // function goToDetails(id){
    //     let url=""//"/details/"+id;
    //     $('#productDetailsForm').attr('action',url);
    //     $( "#productDetailsForm" ).submit();
    // }

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
    // }); --}}
