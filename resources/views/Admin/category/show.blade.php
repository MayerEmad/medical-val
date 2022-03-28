<!DOCTYPE html>
@extends('/Admin/leftSide')
@section('content')
<html>
<head>
    <title>{{$category->name}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('/css/delete.css') }}">

</head>

<body>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        @if(count($category->subcategory))
                            <h1>{{$category->name}}</h1>
                        @elseif(count($category->products))
                            <h1>Products Table</h1>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">{{$category->name}}</li>
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
                        <div class="card-body">
                            @if(count($category->subcategory))
                                @foreach($category->subcategory as $cat)
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flip-card" style="height:100%">
                                        <div class="card bg-light flip-card-inner">
                                            <p class="pt-4 lead pr-1 pl-1" style="font-size: 30px;font-weight: 400;font-family: cursive;">{{$cat->name}}</p>
                                            <div class="card-body pl-0 pt-0 pb-0">
                                                <img class="img1" src="{{ asset('/img/categories/'.$cat->image) }}" width="106.5%" style="height: 260px;">
                                            </div>
                                            <div class="flip-card-back pt-5" style="background-color:#828282;">
                                                <div class="pt-2 mb-4">
                                                    <a href="{{ route('category.edit',['category'=>$cat->id]) }}" class="btn btn-success mr-3" type="button">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    <a onclick='deletefunction({{$cat->id}})' class="btn btn-danger" type="button">
                                                       <i class="fas fa-trash-alt"></i> Delete
                                                    </a>
                                                <form action="{{ route('category.destroy',['category'=>$cat->id]) }}" id="{{$cat->id}}" method="POST" style="display:none">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"></button>
                                                   </form>
                                                </div>
                                            </div>
                                            <a href="{{ route('category.show',['category'=>$cat->id]) }}" class="btn btn-light pro-btn mb-3 mr-2 ml-2" type="button">
                                                <i class="fab fa-product-hunt"></i> View Contents
                                            </a>

                                        </div>
                                </div>
                                @endforeach
                                <div class="col-lg-3">
                                    <a href="{{ route('category.subcategory',['category'=>$category]) }}" class="btn btn-sm btn-success">
                                        <i class="fas fa-plus"></i> Add Sub Category
                                    </a>
                                </div>
                            @elseif(count($category->products))  <!--add this in a new blade-->
                                <form id="delete-form" action="" method="POST" style="display:none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <h2 class="mb-4">{{$category->name}} products </h2>
                                <table class="table table-bordered yajra-datatable">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Quantity</th>
                                            <th>Rate</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                                <div class="col-lg-3">
                                    <a href="{{ route('product.create',['id'=>$category]) }}" class="btn btn-sm btn-success">
                                        <i class="fas fa-plus"></i> Add New Product
                                    </a>
                                </div>
                            @else
                                @if($category->parent_id==0)
                                    <div class="col-lg-3">
                                        <a href="{{ route('category.subcategory',['category'=>$category]) }}" class="btn btn-sm btn-success">
                                            <i class="fas fa-plus"></i> Add Sub Category
                                        </a>
                                    </div>
                                @endif
                                <div class="col-lg-3">
                                    <a href="{{ route('product.create',['id'=>$category]) }}" class="btn btn-sm btn-success">
                                        <i class="fas fa-plus"></i> Add New Product
                                    </a>
                                </div>
                            @endif

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
  $(function () {
    var category_id = '{{ $category->id }}';
    var table = $('.yajra-datatable').DataTable({
        columnDefs: [
            {
                "targets": [ 0 ], "visible": true,"searchable": false,"orderable" : true,
            },
            {
                "targets": [ 6 ], "visible": true,"searchable": false,"orderable" : false,
            }
        ],
        processing: true,
        serverSide: true,
        ajax:{
            url: "{{ route('category.productlist') }}",
            data: {"id": category_id}
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'price', name: 'price'},
            {data: 'discount', name: 'discount'},
            {data: 'quantity', name: 'quantity'},
            {data: 'rate', name: 'rate'},
            {data: 'action',  name: 'action',  orderable: true,  searchable: false},
        ]
    });

  });

   $('body').on('click', '#edit-product', function ()
    {
        var product_id = $(this).data("id");
        let url="{{ route('product.edit',[':id']) }}".replace(':id',product_id );
        $(this).attr('href',url);
    });
   $('body').on('click', '#show-product', function ()
    {
        var product_id = $(this).data("id");
        let url="{{ route('product.show',[':id']) }}".replace(':id',product_id );
        $(this).attr('href',url);
    });
   $('body').on('click', '#delete-product', function ()
    {
        var product_id = $(this).data("id");
        let url="{{ route('product.destroy',[':id']) }}".replace(':id',product_id );
        $("#delete-form").attr('action',url);
        $("#delete-form").submit();
    });
</script>
</html>
@endsection
