<!DOCTYPE html>
@extends('/Admin/leftSide')
@section('content')
<html>
<head>
    <title>Admins Table</title>
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
                        <h1>Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('admin.ordersTablePage')}}">Orders</a></li>
                        </ol>
                    </div>
                    <!-- Success message -->
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
                            <div class="col-md-12">
                                <h2 class="h3 mb-3 text-black">Your Order</h2>
                                <div class="p-3 p-lg-5 border">
                                  <table class="table site-block-order-table mb-5">
                                    <thead>
                                      <th>Product</th>
                                      <th>Total</th>
                                    </thead>
                                    <tbody>
                                        @if(count($data["products"])>0)
                                            @foreach($data["products"] as $item)
                                             <tr>
                                                <td>{{$item->name}} <strong class="mx-2">x</strong> {{$item->pivot->quantity}}</td>
                                                <td>{{$item->price}}</td>
                                              </tr>
                                            @endforeach
                                        @endif

                                      <tr>
                                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                                        <td class="text-black font-weight-bold"><strong>${{$data["total"]}}</strong></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
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
</script>

</html>
@endsection
