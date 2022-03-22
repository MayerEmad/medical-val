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
    <!-- delete popUp -->
    <div id="delete-modal" class="modal" >
        <form class="modal-content" id="delete-user-f" action="" method="POST">
            @csrf
            <div class="container con-delete">
                <h1>Delete Item</h1>
                <p id="delete-user-p"></p>
                <div class="clearfix pl-5">
                    @method('DELETE')
                    <button type="submit"  class="deletebtn btn btn-danger ml-1">Delete</button>
                    <button type="button" onclick="document.getElementById('delete-modal').style.display='none'" class="cancelbtn btn btn-secondary mr-1">Cancel</button>
                </div>
            </div>
        </form>
    </div>

       <!-- epdate popUp -->
       <div id="edit-modal" class="modal" >
        <form class="modal-content" id="edit-user-f" action="" method="POST">
            @csrf
            <div class="container con-delete">
                <h1>Edit Item</h1>
                <p id="edit-user-p"></p>
                <div class="form-group">
                    <label>Admin Types: </label>
                    <select name="role" id="edit-modal-s" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="admin">Admin</option>
                        <option value="editoradmin">Editor Admin</option>
                    </select>
                </div>
                <div class="clearfix pl-5">
                    @method('PUT')
                    <button type="submit" id="update-user-b" value="" class="deletebtn btn btn-success ml-1">Update</button>
                    <button type="button" onclick="document.getElementById('edit-modal').style.display='none'" class="cancelbtn btn btn-secondary mr-1">Cancel</button>
                </div>
            </div>
        </form>
    </div>
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
                        <li class="breadcrumb-item active">Table</li>
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
                            <h2 class="mb-4">Users Data table </h2>
                            <table class="table table-bordered admin-datatable">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Permession</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
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

 //edit-user-permission
 $('body').on('click', '#edit-user', function ()
    {
        var admin_id = $(this).data("id");
        $("#edit-modal").show();
        $("#edit-user-p").html("Do you want to change Admin type?")
        $("#update-user-b").val(admin_id);

         let url="{{ route('admin.update',[':id']) }}".replace(':id',admin_id );
         $('#edit-user-f').attr('action',url)
        // When the user clicks anywhere outside of the modal, close it

    });


  $(function () {
    var table = $('.admin-datatable').DataTable({
        columnDefs: [
            {
                "targets": [ 1 ], "visible": false,"searchable": false,"orderable" : false,
            },
            {
                "targets": [ 4 ], "visible": true,"searchable": false,"orderable" : false,
            }
        ],
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.userstabledata') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id' },
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'type',name: 'type'},
            {data: 'action',name: 'action'},
        ]
    });

  });
</script>

</html>
@endsection
