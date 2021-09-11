@extends('temp')
@section('content')
<html>
    <head>
        <link rel="stylesheet" href="{{asset('/css/user/contact.css')}}">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
    </head>
</html>
<section class="contact-section section_padding" >
    <div class="container">

        <div class="row">
            <div class="col-12 text-center mt-2 mb-2">
                <h1 class="contact-title">Get in Touch</h1>
            </div>
            <!-- form -->
            <div class="col-lg-6">
                <form class="form-contact contact_form" action="" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                            <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter email address'" placeholder="Enter email address"/>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary button-contactForm btn_4 boxed-btn">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
            <!-- map -->
            <div class="col-lg-6">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="600" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=2880%20assiout,%20egypt&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        </iframe>
                        <a href="https://fmovies2.org"></a>
                        <br>
                        <a href="https://www.embedgooglemap.net">google map on my website</a>
                    </div>
                </div>
            </div>
      </div>
      <!-- <div class="col-lg-12">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3>Egypt, Asyut.</h3>
            <p>Elgomhoria, CA 770</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-tablet"></i></span>
          <div class="media-body">
            <h3>+2 (012) 8213 1217</h3>
            <p>Sun to Fri 9am to 4pm</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3>recipe@info.com</h3>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endsection
