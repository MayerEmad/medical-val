@extends('/Admin/leftSide')
@section('content')
<html>
    <head>

        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/buttons.bootstrap4.min.css') }}">
    </head>
    <body>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Username</th>
                        <th>Time</th>
                        <th>Amount</th>
                        <th>Taxes</th>
                        <th>Discount</th>
                        <th>Items</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>name</td>
                        <td>dd/mm/yyyy</td>
                        <td>5</td>
                        <td>5%</td>
                        <td>10%</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>dd/mm/yyyy</td>
                        <td>5</td>
                        <td>5%</td>
                        <td>10%</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>dd/mm/yyyy</td>
                        <td>5</td>
                        <td>5%</td>
                        <td>10%</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>dd/mm/yyyy</td>
                        <td>5</td>
                        <td>5%</td>
                        <td>10%</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>dd/mm/yyyy</td>
                        <td>5</td>
                        <td>5%</td>
                        <td>10%</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td>dd/mm/yyyy</td>
                        <td>5</td>
                        <td>5%</td>
                        <td>10%</td>
                        <td>X</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>

        <!-- jQuery -->
        <script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('/js/jszip.min.js') }}"></script>
        <script src="{{ asset('/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('/js/buttons.colVis.min.js') }}"></script>


    </body>
</html>
@endsection
