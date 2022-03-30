@extends("layout")
@section("content")
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Profile</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Profile Data</h2>
          </div>
          <div class="col-md-12">

            <!-- error message -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @break
                    @endforeach
                </ul>
            </div>
            @endif
            @if(Session::has('error'))
             <div class="alert alert-danger">
                 {{Session::get('error')}}
             </div>
             @endif
            <!-- Success message -->
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif

            <form action="{{ route('profile-update',['user'=>$user]) }}" method="POST" enctype="multipart/form-data" files="true">
                @csrf
                @method('PUT')
              <div class="p-3 p-lg-5 border">

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name"
                        value=@if($user->name!=''){{$user->name}}@else{{ old('name') }}@endif
                    >
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder=""
                        value=@if($user->email!=''){{$user->email}}@else{{ old('email') }}@endif
                    readonly>
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
                      <input type="phone" class="form-control" id="phone" name="phone" placeholder=""
                        value=@if($user->phone!=''){{$user->phone}}@else{{ old('phone') }}@endif
                      >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="address" class="text-black">Address <span class="text-danger">*</span></label>
                      <input type="address" class="form-control" id="address" name="address" placeholder=""
                        value=@if($user->address!=''){{$user->address}}@else{{ old('address') }}@endif
                      >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="block" class="text-black">Block <span class="text-danger">*</span></label>
                      <input type="block" class="form-control" id="block" name="block" placeholder=""
                            value=@if($user->block!=''){{$user->block}}@else {{ old('block') }}@endif
                       >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="street" class="text-black">Street <span class="text-danger">*</span></label>
                      <input type="street" class="form-control" id="street" name="street" placeholder=""
                            value=@if($user->street!=''){{$user->street}}@else{{ old('street') }}@endif
                       >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="house_building_number" class="text-black">House Building Number <span class="text-danger">*</span></label>
                        <input type="house_building_number" class="form-control" id="house_building_number" name="house_building_number" placeholder=""
                            value=@if($user->house_building_number!=''){{$user->house_building_number}}@else{{ old('house_building_number') }}@endif
                        >
                    </div>
                    <div class="col-md-6">
                      <label for="address_instructions" class="text-black">Address Instructions <span class="text-danger"></span></label>
                      <input type="address_instructions" class="form-control" id="address_instructions" name="address_instructions" placeholder=""
                            value=@if($user->address_instructions!=''){{$user->address_instructions}}@else{{ old('address_instructions') }}@endif
                      >
                    </div>
                </div>
                <input type="hidden" class="form-control" id="id" name="id" value={{$user->id}}>
                <br>
                <div class="form-group row">
                  <div class="col-lg-3">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save">
                  </div>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>



    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Offices</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Canada</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
        </div>
      </div>

    </div>

@endsection
