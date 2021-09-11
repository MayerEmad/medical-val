@extends('temp')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>WishList</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/user/wishlist.css') }}">
</head>
<body>
	<div class="container-fluid wishlist-page">
		<div class="row text-center f-row">
			<i class="far fa-heart"></i>
		</div>
		<h1 class="text-center display-4">My Wishlist</h1>

		<div class="container-fluid">
			<table class="table">

			    <thead class="thead-light">
			    	<tr>
			    		<td>Product(s)</td>
			    		<td>Price</td>
			    		<td>Qty.</td>
			    		<td></td>
			    	</tr>
			    </thead>

			    <tbody>
			    	<tr>
			    		<th>
                            <a href="#">
                                <i class="far fa-trash-alt"></i>
                            </a>
                            <img src="{{ asset('img/panadol.jpg') }}" width="200px">
                            <div class="col-lg-8 mt-4" style="float: right;">
                                <p class="">LoveBug Probiotics, Toddler Probiotics, Tiny Tummies Daily Probiotic + Prebiotic, 12 Mos.
                                    Up To 4 Yrs., 30 Single Serve Stick Packs, 1.59 oz ( 45 g)</p>
                                <p class="mb-0" style="font-size: 12px;">Product ID: LVD-00034</p>
                                <p style="font-size: 12px;">Weight: 0.25 lbs</p>
                                <a href="#" style="color: #6dae21">Remove</a>
                            </div>
                        </th>
			    		<th>69.99$</th>
			    		<th><input type="number" value="1" class="form-control" style="width: 60px;"></th>
			    		<th>
                            <li>
                                <a href="#">
                                    <span class="btn btn-secondary" style="">Add to cart</span>
                                </a>
                            </li>
                        </th>
			    	</tr>
			    	<tr>
                        <th>
                            <a href="">
                                <i class="far fa-trash-alt"></i>
                            </a>
                            <img src="{{ asset('img/panadol.jpg') }}" width="200px">
                            <div class="col-lg-8 mt-4" style="float: right;">
                                        <p class="">LoveBug Probiotics, Toddler Probiotics, Tiny Tummies Daily Probiotic + Prebiotic, 12 Mos.
                                        Up To 4 Yrs., 30 Single Serve Stick Packs, 1.59 oz ( 45 g)</p>
                                        <p class="mb-0" style="font-size: 12px;">Product ID: LVD-00034</p>
                                        <p style="font-size: 12px;">Weight: 0.25 lbs</p>
                                        <a href="#" style="color: #6dae21">Remove</a>
                                    </div>
                        </th>
			    		<th>69.99$</th>
			    		<th><input type="number" value="1" class="form-control" style="width: 60px;"></th>
			    		<th>
                            <li>
                                <a href="#">
                                    <span class="btn btn-secondary">Add to cart</span>
                                </a>
                            </li>
                        </th>
			    	</tr>
			    </tbody>

			</table>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
</html>
@endsection
