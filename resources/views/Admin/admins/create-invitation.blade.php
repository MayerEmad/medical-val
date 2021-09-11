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
                            <h1>Add New Admin</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Add New Admin</li>
                            </ol>
                        </div>
                    </div>
                        <!-- Success message -->
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
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
                    
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">

                        <!-- form start -->
                        <form action="{{ route('admin.inviteadmin') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label >Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Admin Name">
                                </div>
                                <div class="form-group">
                                    <label >Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Admin Email">
                                </div>
                                <div class="form-group">
                                    {{-- <label >Password</label> --}}
                                    <input type="hidden" name="password" class="form-control" id="password" value="123Abcabc" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Register as: </label>
                                    <select name="role" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                        <option value="admin">Admin</option>
                                        <option value="editoradmin">EditorAdmin</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>
                            </div>
                        </form>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        </div>
        <!-- /.content-wrapper -->

        <!-- jquery-validation -->
        <script src="{{ asset('/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/additional-methods.min.js') }}"></script>

        <!-- DataTables  & Plugins -->
        {{-- <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
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
        <script src="{{ asset('/js/buttons.colVis.min.js') }}"></script>  --}}

    </body>
</html>
@endsection
