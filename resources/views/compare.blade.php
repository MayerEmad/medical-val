@extends("layout")
@section("content")
    <head>
         <!-- CSS reset -->
         <!-- Resource style -->
        <script src="js/user/modernizr.js"></script> <!-- Modernizr -->
        <style>
            .site-section .container .cd-products-table div .table tr .first-row{
                padding: 10px 35px 0px 35px;
            }
            @media(max-width: 1200px){
                .site-section .container .cd-products-table div .table tr th img{
                    width: 85%
                }
            }
            @media(max-width: 576px){
                .site-section .container .cd-products-table div .table tr th img{
                    width: 55%
                }
                .site-section .container .cd-products-table div .table tr .first-row{
                padding: 25px 28px 0px 28px;
                }
                .bg-light .container .row .col-md-12{
                    padding-left: 30px;
                }
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #ddd;
            }
            .table th{
                padding: 0px;
            }
            .table td{
                padding: 6px;
            }
            th, td {
                text-align: left;
                /*padding: 20px 0px 20px 10px;*/
                border: 1px solid #ddd;
                line-height: 27px;
            }

            tr:nth-child(even){background-color: #f2f2f2}
            .site-footer .footer-heading{
                font-size: 20px;
            }
            .site-footer .container .row .col-md-6 .block-7 p{
                line-height: 25px;
                margin-top: 30px;
                color: #8c92a0;
            }
            .site-footer .container .row .col-md-6 .list-unstyled{
                margin-top: 17px;
            }
            .site-footer .container .row .col-md-6 .block-5 .list-unstyled {
                margin-top: 30px;
            }
        </style>
    </head>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index" style="color: #2a326e">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Compare</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="cd-products-table">
            <div style="overflow-x:auto;">
                <table class="table">
                  <tr>
                    <th class="first-row">
                        <p>Products</p>
                    </th>
                    @foreach($products as $product)

                    <th class="col-lg-4 col-md-4 col-sm-4">
                        <img src="{{$product->image}}" alt="product image">
                    </th>
                    @endforeach
                    <!-- <th class="col-lg-4 col-md-4 col-sm-4">
                        <img src="images/product_02.png" alt="product image">
                    </th>
                    <th class="col-lg-4 col-md-4 col-sm-4">
                        <img src="images/product_03.png" alt="product image"> -->
                    <!-- </th> -->

                    
                  </tr>
                  <tr>
                    <td>Name</td>
                    @foreach($products as $product)

                    <td>{{$product->name}}</td>
                    @endforeach
                  </tr>
                  <tr>
                    <td>Price</td>
                    @foreach($products as $product)

                    <td>{{$product->price}}</td>
                    @endforeach
                  </tr>
                  <tr>
                    <td>Customer Rating</td>
                    @foreach($products as $product)

                    <td>{{$product->rate}}</td>
@endforeach
                  </tr>
                  <tr>
                    <td>Im. Date</td>
                    @foreach($products as $product)

<td>{{$product->created_at}}</td>
@endforeach
                  </tr>
                  <tr>
                    <td>Exp. Date</td>
                    @foreach($products as $product)

<td>{{$product->created_at}}</td>
@endforeach
                  </tr>
                </table>
              </div>
			
			{{-- <ul class="cd-table-navigation">
				<li><a href="#0" class="prev inactive">Prev</a></li>
				<li><a href="#0" class="next">Next</a></li>
			</ul> --}}
		</div> <!-- .cd-products-table -->
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
    <script src="js/user/jquery-2.1.4.js"></script>
@endsection