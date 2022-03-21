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
                    @endforeach
                </ul>
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
                    <input type="text" class="form-control" id="name" name="name" value={{$user->name}}>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="" value={{$user->email}} readonly>
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
                      <input type="phone" class="form-control" id="phone" name="phone" placeholder="" value={{$user->phone}} >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="area" class="text-black">Area <span class="text-danger">*</span></label>
                      <input type="area" class="form-control" id="area" name="area" placeholder="" value={{$user->area}} >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="block" class="text-black">Block <span class="text-danger">*</span></label>
                      <input type="block" class="form-control" id="block" name="block" placeholder="" value={{$user->block}} >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="street" class="text-black">Street <span class="text-danger">*</span></label>
                      <input type="street" class="form-control" id="street" name="street" placeholder="" value={{$user->street}} >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="floor" class="text-black">Floor <span class="text-danger">*</span></label>
                        <input type="floor" class="form-control" id="floor" name="floor" placeholder="" value={{$user->floor}} >
                    </div>
                    <div class="col-md-6">
                      <label for="departement" class="text-black">Departement <span class="text-danger">*</span></label>
                      <input type="departement" class="form-control" id="departement" name="departement" placeholder="" value={{$user->departement}} >
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
