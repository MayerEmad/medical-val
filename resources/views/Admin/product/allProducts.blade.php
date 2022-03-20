<!DOCTYPE html>
@extends('/Admin/leftSide')
@section('content')
<html>
<head>
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
                            <h1>Products Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
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
                            @if(count($products))  <!--add this in a new blade-->
                                <form id="delete-form" action="" method="POST" style="display:none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <h2 class="mb-4">products </h2>
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

                            @else
                               <h1>No Products</h1>
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
          var table = $('.yajra-datatable').DataTable({
              processing: true,
              serverSide: true,
              ajax:{
                  url: "{{ route('product.productsearch') }}"
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
              $("#edit-product").attr('href',url);
          });
         $('body').on('click', '#show-product', function ()
          {
              var product_id = $(this).data("id");
              let url="{{ route('product.show',[':id']) }}".replace(':id',product_id );
              $("#show-product").attr('href',url);
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
