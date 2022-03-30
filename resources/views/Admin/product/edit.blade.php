@extends('/Admin/leftSide')
@section('content')
<html>
    <head></head>
    <body>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.show',['category'=>$product->category_id]) }}">{{$product->name}} category</a></li>
                        <li class="breadcrumb-item active">Edit {{$product->name}} </li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">

                        <!-- /.card-header -->
                            <div class="card-body">

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

                            <form action="{{route('product.update',['product'=>$product])}}" method="POST" enctype="multipart/form-data" files="true">
                                @csrf
                                 @method('PUT')

                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="name" class="form-control" id="product_name_id" value="{{ $product->name }}" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label>Product Name in Arabic</label>
                                    <input type="text" name="ar_name" class="form-control" id="product_ar_name_id" value="{{ $product->ar_name }}" placeholder="Arabic Name">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <label>Quantity</label>
                                        <input type="text" name="quantity" class="form-control" id="product_quantity_id" value="{{ $product->quantity }}" placeholder="product quantity">
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label>Price</label>
                                        <input type="text" name="price" class="form-control" id="product_price_id" value="{{ $product->price }}" placeholder="product price">
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <label>Discount</label>
                                        <input type="text" name="discount" class="form-control" id="product_discount_id" value="{{ $product->discount }}" placeholder="discount ratio">
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label>Product Description</label>
                                    <textarea class="form-control" name="description" id="product_description_id"  rows="2">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Product Description in Arabic</label>
                                    <textarea class="form-control" name="ar_description" id="product_ar_description_id"  rows="2">{{ $product->ar_description }}</textarea>
                                </div>
                                <div class="form-group" id="imgdiv">
                                    <img id="image-previewer"  src="{{ asset('/img/products/'.$product->image) }}"alt="preview image" style="max-height:500px; max-width:500px;">
                                </div>
                                <div class="form-group">
                                    <input type="file" name="image" id="theFileInput" value="{{ $product->image }}" style="display:none;" accept="image/*">
                                    <span onclick="useinputfile()" class="btn btn-success col-lg-2 fileinput-button">
                                        <i class="fas fa-plus"></i>
                                        <span>Edit photo</span>
                                    </span>
                                    <span id="deletebtn" class="btn btn-danger delete" style="display:none;" onclick="deleteImage()" >
                                        <i class="fas fa-trash"></i>
                                        <span>Delete</span>
                                    </span>
                                </div>
                                <input type="hidden" name="category_id"  id="product_category_id" value="{{ $product->category_id }}" >
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary col-lg-4 "> Edit Product</button>
                                </div>
                            </form>

                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>



        </div>


        <!-- jquery-validation -->
        <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/additional-methods.min.js') }}"></script>
        <!-- Select2 -->
        <script src="{{ asset('/js/select2.full.min.js') }}"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="{{ asset('/js/jquery.bootstrap-duallistbox.min.js') }}"></script>
        <!-- InputMask -->
        <script src="{{ asset('/js/moment.min.js') }}"></script>
        <script src="{{ asset('/js/jquery.inputmask.min.js') }}"></script>
        <!-- date-range-picker -->
        <script src="{{ asset('/js/daterangepicker.js') }}"></script>
        <!-- bootstrap color picker -->
        <script src="{{ asset('/js/bootstrap-colorpicker.min.js') }}"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="{{ asset('/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <!-- Bootstrap Switch -->
        <script src="{{ asset('/js/bootstrap-switch.min.js') }}"></script>
        <!-- BS-Stepper -->
        <script src="{{ asset('/js/bs-stepper.min.js') }}"></script>
        <!-- dropzonejs -->
        <script src="{{ asset('/js/dropzone.min.js') }}"></script>

    </body>
    <script type="text/javascript">

        $('#theFileInput').change(function()
        {
            if (this.files && this.files[0])
            {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#image-previewer').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
                $('#deletebtn').show();
            }
        });
        function useinputfile()
        {
            $('#theFileInput').click();
        }
        function deleteImage()
        {
            $("#imgdiv img:last-child").remove()
            $("#imgdiv").append('<img id="image-previewer" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"alt="preview image" style="max-height: 250px;">');
            $('#theFileInput').val(null);
            $('#deletebtn').hide();
        }
    </script>
</html>
@endsection
