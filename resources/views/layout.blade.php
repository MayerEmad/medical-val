<html>
<head>
  <title>SAIDALYIAONLINE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  {{-- font awsome --}}
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  {{-- icon Title --}}
  <link rel="icon" href="images/logo-title.png" type="image/icon type">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="css/user/bootstrap.min.css">

  <link rel="stylesheet" href="css/user/magnific-popup.css">
  <link rel="stylesheet" href="css/user/jquery-ui.css">
  <link rel="stylesheet" href="css/user/owl.carousel.min.css">
  <link rel="stylesheet" href="css/user/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/user/aos.css">

  <link rel="stylesheet" href="css/user/style.css">
  @if (session()->get('locale') == 'ar')
        <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
    @endif
  {{-- pop up --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

</head>
<body>
    <div class="site-wrap">
        <!-- navbar -->
        <div class="site-navbar py-2">

            <div class="search-wrap">
                <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <!-- <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                </form> -->
                <form action="{{ route('search') }}" method="GET" class="search-form">
                        <input type="text" name="query1" id="query1" value="{{ request()->input('query1') }}" class="form-control" placeholder="Search keyword and hit enter...">

                    </form>
                </div>
            </div>
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a href="index" class="js-logo-clone"><img class="mobile-image" src="images/logo.png" alt="logo" width="75px"></a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li class="nav-item"><a href="index">{{ __('message.HOME') }}</a></li>
                                <li class="nav-item"><a href="shop">{{ __('message.Store') }}</a></li>
                                <li class="dropdown dropdown-large">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ __('message.Products') }} <b class="caret"></b></a>
                                    <ul class="dropdown-menu dropdown-menu-large row" style="left: -100px;">
                                        <li class="col-lg-3 col-md-12 col-sm-12">
                                            <ul>
                                                <li class="dropdown-header">Glyphicons</li>
                                                <li><a href="#">Available glyphs</a></li>
                                                <li class=""><a href="#">How to use</a></li>
                                                <li><a href="#">Examples</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-header">Dropdowns</li>
                                                <li><a href="#">Example</a></li>
                                                <li><a href="#">Aligninment options</a></li>
                                                <li><a href="#">Headers</a></li>
                                                <li><a href="#">Disabled menu items</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-lg-3 col-md-12 col-sm-12">
                                            <ul>
                                                <li class="dropdown-header">Button groups</li>
                                                <li><a href="#">Basic example</a></li>
                                                <li><a href="#">Button toolbar</a></li>
                                                <li><a href="#">Sizing</a></li>
                                                <li><a href="#">Nesting</a></li>
                                                <li><a href="#">Vertical variation</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-header">Button dropdowns</li>
                                                <li><a href="#">Single button dropdowns</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-lg-3 col-md-12 col-sm-12">
                                            <ul>
                                                <li class="dropdown-header">Input groups</li>
                                                <li><a href="#">Basic example</a></li>
                                                <li><a href="#">Sizing</a></li>
                                                <li><a href="#">Checkboxes and radio addons</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown-header">Navs</li>
                                                <li><a href="#">Tabs</a></li>
                                                <li><a href="#">Pills</a></li>
                                                <li><a href="#">Justified</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-lg-3 col-md-12 col-sm-12">
                                            <ul>
                                                <li class="dropdown-header">Navbar</li>
                                                <li><a href="#">Default navbar</a></li>
                                                <li><a href="#">Buttons</a></li>
                                                <li><a href="#">Text</a></li>
                                                <li><a href="#">Non-nav links</a></li>
                                                <li><a href="#">Component alignment</a></li>
                                                <li><a href="#">Fixed to top</a></li>
                                                <li><a href="#">Fixed to bottom</a></li>
                                                <li><a href="#">Static top</a></li>
                                                <li><a href="#">Inverted navbar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="about">{{ __('message.About') }}</a></li>
                                <li class="nav-item"><a href="contact">{{ __('message.Contact') }}</a></li>
                                @if (Auth::check())
                                    <li class="nav-item"><a href="profile">Profile</a></li>
                                    @if(Auth::user()->hasRole('editoradmin') || Auth::user()->hasRole('superadmin'))
                                         <li class="nav-item"><a href="admin">Dashboard</a></li>
                                    @endif
                                @else
                                    <li class="nav-item"><a href="login">Log In</a></li>
                                @endif

                            </ul>
                        </nav>
                    </div>
                    <div class="icons">
                        <!-- <a href="search" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a> -->
                        <a href="'.route('search').'" class="icons-btn d-inline-block js-search-open" type="button"><span class="icon-search"></span></a>

                        <a href="/cart" class="icons-btn d-inline-block bag">
                            <span class="icon-shopping-cart"></span>
                            <span class="number">2</span>
                        </a>
                        <a href="/wishlist" class="icons-btn d-inline-block heart">
                            <span class="icon-heart"></span>
                            <span class="number">2</span>
                        </a>
                        <a href="/compare" class="icons-btn d-inline-block heart">
                            <span class="icon-book"></span>
                            <span class="number">5</span>
                        </a>
                <select class="selectpicker changeLang" data-width="fit">
    <option data-content='<span class="flag-icon flag-icon-us"></span> English' value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
  <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabic</option>
</select>

                        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                            class="icon-menu"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- content --}}
        <div class="container-fluid" style="padding: 0px;">
            @yield('content')
        </div>


        {{-- footer --}}
        <footer class="site-footer">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

                  <div class="block-7">
                    <h3 class="footer-heading mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                      sed dolorum excepturi iure eaque, aut unde.</p>
                  </div>

                </div>
                <div class="col-lg-6 mx-auto mb-5 mb-lg-0">
                  <h3 class="footer-heading mb-4">Quick Links</h3>
                  <ul class="list-unstyled">
                    <li class="col-sm-6 col-lg-4 col-md-6">
                        <ul class="list-unstyled">
                            <li class="cat-header">Glyphicons</li>
                            <ul class="list-unstyled pl-3">
                                <li><a href="#">Available glyphs</a></li>
                                <li class=""><a href="#">How to use</a></li>
                                <li><a href="#">Examples</a></li>
                            </ul>
                            <li class="cat-header">Dropdowns</li>
                            <ul class="list-unstyled pl-3">
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Aligninment options</a></li>
                                <li><a href="#">Headers</a></li>
                                <li><a href="#">Disabled menu items</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li class="col-sm-6 col-lg-4 col-md-6">
                        <ul class="list-unstyled">
                            <li class="cat-header">Glyphicons</li>
                            <ul class="list-unstyled pl-3">
                                <li><a href="#">Available glyphs</a></li>
                                <li class=""><a href="#">How to use</a></li>
                                <li><a href="#">Examples</a></li>
                            </ul>
                            <li class="cat-header">Dropdowns</li>
                            <ul class="list-unstyled pl-3">
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Aligninment options</a></li>
                                <li><a href="#">Headers</a></li>
                                <li><a href="#">Disabled menu items</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li class="col-sm-6 col-lg-4 col-md-6">
                        <ul class="list-unstyled">
                            <li class="cat-header">Glyphicons</li>
                            <ul class="list-unstyled pl-3">
                                <li><a href="#">Available glyphs</a></li>
                                <li class=""><a href="#">How to use</a></li>
                                <li><a href="#">Examples</a></li>
                            </ul>
                            <li class="cat-header">Dropdowns</li>
                            <ul class="list-unstyled pl-3">
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Aligninment options</a></li>
                                <li><a href="#">Headers</a></li>
                                <li><a href="#">Disabled menu items</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li class="col-sm-6 col-lg-4 col-md-6">
                        <ul class="list-unstyled">
                            <li class="cat-header">Glyphicons</li>
                            <ul class="list-unstyled pl-3">
                                <li><a href="#">Available glyphs</a></li>
                                <li class=""><a href="#">How to use</a></li>
                                <li><a href="#">Examples</a></li>
                            </ul>
                            <li class="cat-header">Dropdowns</li>
                            <ul class="list-unstyled pl-3">
                                <li><a href="#">Example</a></li>
                                <li><a href="#">Aligninment options</a></li>
                                <li><a href="#">Headers</a></li>
                                <li><a href="#">Disabled menu items</a></li>
                            </ul>
                        </ul>
                    </li>
                  </ul>
                </div>

                <div class="col-md-6 col-lg-3">
                  <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">Contact Info</h3>
                    <ul class="list-unstyled">
                      <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                      <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                      <li class="email">emailaddress@domain.com</li>
                    </ul>
                  </div>


                </div>
              </div>
              <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                  <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                </div>

              </div>
            </div>
        </footer>
    </div>


  <script src="js/user/jquery-3.3.1.min.js"></script>
  <script src="js/user/jquery-ui.js"></script>
  <script src="js/user/popper.min.js"></script>
  <script src="js/user/bootstrap.min.js"></script>
  <script src="js/user/owl.carousel.min.js"></script>
  <script src="js/user/jquery.magnific-popup.min.js"></script>
  <script src="js/user/aos.js"></script>

  <script src="js/user/main.js"></script>

  <script>
    (function($) {
        showSwal = function(type) {
            'use strict';
            if (type === 'auto-close') {
                swal({
                    title: '',
                    text: 'Item added succesfully.',
                    timer: 2000

                    })
                }else{
                swal("Error occured !");
            }
        }

    })(jQuery);


//     swal({
//   title: "Looks like you're from " + countName + ". ",
//   text: "Go to our International Store? ",
//   confirmButtonText: 'Yes take me there',
//   cancelButtonText: 'Stay on U.S.A Site',
//   imageAlt: 'Custom image',
//   dangerMode: false,
// }, function () {
//   // Your code
// });
  </script>
      <script type="text/javascript">

  var url = "{{ route('changeLang') }}";

  $(".changeLang").change(function(){
      window.location.href = url + "?lang="+ $(this).val();
  });

</script>
</body>
</html>
