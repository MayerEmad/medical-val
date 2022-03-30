@extends('/Admin/leftSide')
@section('content')
<html>
    <head>
        <style>
            .badge{
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        @if($category->parent_id==0)
            {{$category_word="Category"}}
        @else
            {{$category_word="Sub Category"}}
        @endif
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body">
                        <!-- Message message -->
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
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="col-12" id="imgdiv">
                                    <img id="image-previewer"  src="{{ asset('/img/categories/'.$category->image) }}"alt="preview image" style="max-height:500px; max-width:500px;">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6">
                                <!-- form start -->
                            <form action="{{ route('category.update',['category'=>$category]) }}" method="POST" enctype="multipart/form-data" files="true">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group pt-2">
                                            <label>Category Name</label>
                                            <input type="text" name="name" class="form-control" id="category_name_id" value="{{$category->name}}" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label>{{$category_word}} Name in Arabic</label>
                                            <input type="text" name="ar_name" class="form-control" id="category_ar_name_id" value="{{$category->ar_name}}" placeholder="Arabic Name">
                                        </div>
                                        <div class="form-group pt-2">
                                            <label>Category Description</label>
                                            <textarea class="form-control" name="description" id="category_description_id"  rows="2">{{$category->description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>{{$category_word}} Description in Arabic</label>
                                            <textarea class="form-control" name="ar_description" id="category_ar_description_id"  rows="2">{{$category->ar_description}}</textarea>
                                        </div>
                                        <div class="form-group pt-2" style="width:200px;">
                                            <input type="file" name="image" id="theFileInput" style="display:none;"  value="{{$category->image}}" accept="image/*">
                                            <span onclick="useinputfile()" class="btn btn-success col-lg-12 fileinput-button">
                                                <i class="fas fa-plus"></i>
                                                <span>Edit photo</span>
                                            </span>
                                        </div>
                                        <input type="hidden" name="parent_id" value="{{ $category->parent_id }}">
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                <!-- /.card -->
                   </div>
                </div>

            </section>
            <!-- /.content -->

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


        <script>
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
            //not used here
            $("#imgdiv img:last-child").remove()
            $("#imgdiv").append('<img id="image-previewer" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"alt="preview image" style="max-height: 250px;">');
            $('#theFileInput').val(null);
            $('#deletebtn').hide();
        }
        </script>

</html>
@endsection
