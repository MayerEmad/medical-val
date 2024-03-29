@extends("layout")
@section("content")
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index">{{ __('message.Home') }}</a> <span class="mx-2 mb-0">/</span> <strong
              class="text-black">{{ __('message.Thank you') }}</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">{{ __('message.Thank you') }}</h2>
            <p class="lead mb-5">{{ __('message.You order was successfuly completed') }}</p>
            <p><a href="shop" class="btn btn-md height-auto px-4 py-3 btn-primary">{{ __('message.Continue Shopping') }}</a></p>
          </div>
        </div>
      </div>
    </div>

@endsection
