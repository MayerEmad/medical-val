@extends("layout")
@section("content")

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index">{{ __('message.Home') }}</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">{{ __('message.Checkout') }}</strong>
          </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('data-error'))
                <div class="alert alert-info">
                     <p> {{Session::get('data-error')}} <a href="profile" style="#bf2727">{{ __('message.Click here') }}</a>{{ __('message.to profile') }}</p>
                </div>
            @endif
            @if(Session::has('product-error'))
                <div class="alert alert-info">
                     <p> {{Session::get('product-error')}}</p>
                      {{-- <a href="cart" style="#bf2727">Click here</a> to cart --}}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger">
                     <p> {{Session::get('error')}} </p>
                </div>
            @endif
            <!-- Success message -->
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            @if (!Auth::check())
            <div class="bg-light rounded p-3">
              <p class="mb-0"><a href="/login" class="d-inline-block">{{ __('message.Click here') }}</a> {{ __('message.to login') }}</p>
            </div>
            @endif
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
                {{-- <h2 class="h3 mb-3 text-black">Billing Details</h2>
                <div class="p-3 p-lg-5 border">
                <div class="form-group">
                    <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                    <select id="c_country" class="form-control">
                    <option value="1">Select a country</option>
                    <option value="2">bangladesh</option>
                    <option value="3">Algeria</option>
                    <option value="4">Afghanistan</option>
                    <option value="5">Ghana</option>
                    <option value="6">Albania</option>
                    <option value="7">Bahrain</option>
                    <option value="8">Colombia</option>
                    <option value="9">Dominican Republic</option>
                    </select>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname">
                    </div>
                    <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                    <label for="c_companyname" class="text-black">Company Name </label>
                    <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                    <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address">
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                    <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                    </div>
                    <div class="col-md-6">
                    <label for="c_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                    </div>
                </div>

                <div class="form-group row mb-5">
                    <div class="col-md-6">
                    <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                    </div>
                    <div class="col-md-6">
                    <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                    </div>
                </div>

                <div class="form-group">
                    <label for="c_create_account" class="text-black" data-toggle="collapse" href="#create_an_account"
                    role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1"
                        id="c_create_account"> Create an account?</label>
                    <div class="collapse" id="create_an_account">
                    <div class="py-2">
                        <p class="mb-3">Create an account by entering the information below. If you are a returning customer
                        please login at the top of the page.</p>
                        <div class="form-group">
                        <label for="c_account_password" class="text-black">Account Password</label>
                        <input type="email" class="form-control" id="c_account_password" name="c_account_password"
                            placeholder="">
                        </div>
                    </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="c_ship_different_address" class="text-black" data-toggle="collapse"
                    href="#ship_different_address" role="button" aria-expanded="false"
                    aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address">
                    Ship To A Different Address?</label>
                    <div class="collapse" id="ship_different_address">
                    <div class="py-2">

                        <div class="form-group">
                        <label for="c_diff_country" class="text-black">Country <span class="text-danger">*</span></label>
                        <select id="c_diff_country" class="form-control">
                            <option value="1">Select a country</option>
                            <option value="2">bangladesh</option>
                            <option value="3">Algeria</option>
                            <option value="4">Afghanistan</option>
                            <option value="5">Ghana</option>
                            <option value="6">Albania</option>
                            <option value="7">Bahrain</option>
                            <option value="8">Colombia</option>
                            <option value="9">Dominican Republic</option>
                        </select>
                        </div>


                        <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                        </div>
                        <div class="col-md-6">
                            <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                        </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_diff_companyname" class="text-black">Company Name </label>
                            <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                        </div>
                        </div>

                        <div class="form-group row">
                        <div class="col-md-12">
                            <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_address" name="c_diff_address"
                            placeholder="Street address">
                        </div>
                        </div>

                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>

                        <div class="form-group row">
                        <div class="col-md-6">
                            <label for="c_diff_state_country" class="text-black">State / Country <span
                                class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                        </div>
                        <div class="col-md-6">
                            <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span
                                class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                        </div>
                        </div>

                        <div class="form-group row mb-5">
                        <div class="col-md-6">
                            <label for="c_diff_email_address" class="text-black">Email Address <span
                                class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                        </div>
                        <div class="col-md-6">
                            <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone"
                            placeholder="Phone Number">
                        </div>
                        </div>

                    </div>

                    </div>
                </div>

                <div class="form-group">
                    <label for="c_order_notes" class="text-black">Order Notes</label>
                    <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control"
                    placeholder="Write your notes here..."></textarea>
                </div>

                </div> --}}
                <div class="row mb-5">
                    <div class="col-md-12">
                      <h2 class="h3 mb-3 text-black">{{ __('message.Your Order') }}</h2>
                      <div class="p-3 p-lg-5" style="border: 1px solid #c7bebe !important;">
                        <table class="table site-block-order-table mb-5">
                          <thead>
                            <th>{{ __('message.Product') }}</th>
                            <th>{{ __('message.Price') }}</th>
                            <th>{{ __('message.Total') }}</th>
                          </thead>
                          <tbody>
                            @if(isset($data)&&count($data["products"])>0)
                                @foreach($data["products"] as $item)
                                 <tr>
                                    <td>{{$item->name}} <strong class="mx-2">x</strong> {{$item->qty}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->price * $item->qty}}</td>
                                  </tr>
                                @endforeach
                            @endif

                          <tr>
                            <td class="text-black font-weight-bold"><strong>{{ __('message.Order Total') }}</strong></td>
                            <td class="text-black font-weight-bold"><strong></strong></td>
                            <td class="text-black font-weight-bold"><strong>@if(isset($data))${{$data["total"]}}@endif</strong></td>
                          </tr>
                        </tbody>
                        </table>

                        {{-- <div class="border mb-3">
                          <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                              aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                          <div class="collapse" id="collapsebank">
                            <div class="py-2 px-4">
                              <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                                payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                          </div>
                        </div>

                        <div class="border mb-3">
                          <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button"
                              aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                          <div class="collapse" id="collapsecheque">
                            <div class="py-2 px-4">
                              <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                                payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                          </div>
                        </div>

                        <div class="border mb-5">
                          <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button"
                              aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                          <div class="collapse" id="collapsepaypal">
                            <div class="py-2 px-4">
                              <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                                payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                          </div>
                        </div> --}}

                        <div class="form-group">
                          <button class="btn btn-primary btn-lg btn-block" onclick="goToCheckOrderData()">
                            {{ __('message.Place Order') }}
                        </button>
                        </div>

                      </div>
                    </div>
                  </div>
          </div>

          <div class="col-md-6">

            <div class="row mb-5">
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">{{ __('message.Coupon') }}</h2>
                    <div class="p-3 p-lg-5" style="border: 1px solid #c7bebe !important">

                        <label for="c_code" class="text-black mb-3">{{ __('message.Enter your coupon code if you have one') }}</label>
                        <div class="input-group w-75">
                        <input type="text" class="form-control" id="c_code" placeholder={{ __('message.Code') }} aria-label="Coupon Code"
                            aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-sm px-4" type="button" id="button-addon2">{{ __('message.Apply Coupon') }}</button>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
          </div>
        </div>
        <!-- </form> -->
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
    <form  id="createOrderForm" action="" method="GET">
        @csrf
    </form>

   @endsection

<script>
function goToCheckOrderData(){
    let url="{{ route('checkOrderData')}}";
    $('#createOrderForm').attr('action',url);
    $( "#createOrderForm" ).submit();
}
</script>

