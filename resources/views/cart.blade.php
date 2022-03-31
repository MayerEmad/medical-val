@extends("layout")
@section("content")

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Cart</strong>
          </div>
        </div>
        <div class="row">
             <!-- Success message -->
             @if(Session::has('success'))
             <div class="alert alert-success">
                 {{Session::get('success')}}
             </div>
             @endif
             @if(Session::has('error'))
             <div class="alert alert-danger">
                 {{Session::get('error')}}
             </div>
             @endif
             @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
             @endif
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                @if (Cart::count() > 0)
@foreach (Cart::content() as $item)

                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/product_02.png" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{ $item->name }}</h2>
                    </td>
                    <td>{{ $item->price }}</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button onclick=" submitFormminus('{{$item->rowId}}');" class="btn btn-outline-primary js-btn-minus"  type="button">&minus;</button>
                        </div>
                        <input type="text" id="item_val" class="form-control text-center" value="{{$item->qty}}" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <!-- <form id="{{$item->rowId}}" action="{{ action('Client\CartController@plusButton', ['rowId' =>  $item->rowId]) }}" method="GET" style="display:none"> -->
                        <div class="input-group-append">

                        <a onclick=" submitForm('{{$item->rowId}}');" class="btn btn-outline-primary js-btn-plus" >&plus;</a>
                        </div>

                        <!-- </form> -->

                      </div>

                    </td>
                    <td>${{ $item->price *$item->qty}}</td>

                    <td>
                      <a href="{{ action('Client\CartController@removeproduct', ['rowId' =>  $item->rowId]) }}" class="btn btn-primary height-auto btn-sm">X</a>
                    </td>

             <td style="display:none;">{{$item->rowId}} </td>
                  </tr>
                  @endforeach
    @endif
                  <!-- <tr>
                    <td class="product-thumbnail">
                      <img src="images/product_01.png" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Bioderma</h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                          aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
                  </tr> -->
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-primary btn-md btn-block">Continue Shopping</button>
              </div>
              {{-- <div class="col-md-6">
                <button class="btn btn-outline-primary btn-md btn-block">Continue Shopping</button>
              </div> --}}
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-md px-4">Apply Coupon</button>
              </div>
            </div>
          </div>
            @if (Cart::count() > 0)
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                            <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <div class="col-md-6">
                                <span class="text-black">Subtotal</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">{{$total}}</strong>
                            </div>
                        </div> --}}
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <span class="text-black">Total</span>
                            </div>
                            <div class="col-md-6 text-right">
                                <strong class="text-black">{{$total}}</strong>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout'">Proceed To
                            Checkout</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endif
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
    <form  id="checkoutForm" action="" method="GET">
        @csrf
    </form>
@endsection
<script>
  function submitForm(id){
    // $('#'+id).submit();
    console.log(id);

            $.ajax({
                url:"{{route('cart.plusButton')}}",
                method:"POST",
                data:{"rowId":id,
                     "_token": "{{ csrf_token() }}",
},
                dataType:'json',
                success:function(data)
                {
                  console.log(data);
                    $("#item_val").val(data.qty);
                }
            });

}
function submitFormminus(id){


$.ajax({
    url:"{{route('cart.minusButton')}}",
    method:"POST",
    data:{"rowId":id,
         "_token": "{{ csrf_token() }}",
},
    dataType:'json',
    success:function(data)
    {
      console.log(data);
        $("#item_val").val(data.qty);
    }
});
}
    // $('#'+id).submit();
    console.log(id);
    var form = document.createElement("form");
    var element1 = document.createElement("input");
    // var element2 = document.createElement("input");

    form.method = "GET";
    form.action = "{{ action('Client\CartController@minusButton') }}";

    element1.value=id;
    element1.name="rowId";
    form.appendChild(element1);

    // element2.value=pw;
    // element2.name="rowId";
    // form.appendChild(element2);

    document.body.appendChild(form);

    form.submit();
}

function goToCheckOut(){
    let url="{{ route('cart.checkout')}}";
    $('#checkoutForm').attr('action',url);
    $( "#checkoutForm" ).submit();
};

</script>
