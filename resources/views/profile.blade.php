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

            <form action="#" method="post">

              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <!---div class="col-md-6">
                    <label for="p_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="p_fname" name="p_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="p_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="p_lname" name="p_lname">
                  </div---->
                  <div class="col-md-12">
                    <label for="p_name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="p_name" name="p_name" value={{$user->name}}>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="p_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="p_email" name="p_email" placeholder="" value={{$user->email}} readonly>
                  </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="p_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                      <input type="phone" class="form-control" id="p_phone" name="p_phone" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="p_area" class="text-black">Area <span class="text-danger">*</span></label>
                      <input type="area" class="form-control" id="p_area" name="p_area" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                      <label for="p_street" class="text-black">Street <span class="text-danger">*</span></label>
                      <input type="street" class="form-control" id="p_street" name="p_street" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6">
                      <label for="p_block" class="text-black">Block <span class="text-danger">*</span></label>
                      <input type="block" class="form-control" id="p_block" name="p_block" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="p_floor" class="text-black">Floor <span class="text-danger">*</span></label>
                        <input type="floor" class="form-control" id="p_floor" name="p_floor" placeholder="">
                    </div>
                </div>
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
