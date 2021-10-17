@extends('/Admin/leftSide')
@section('content')
<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">All Categories</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Default box -->
            <div class="card card-solid">
                <div class="row">
                    <div class="col-lg-8">
                              <!-- Success message -->
                              @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                              @endif
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex mt-3">
                            <input class="form-control me-2" id="search_text" type="search" placeholder="Search" aria-label="Search" value="" >
                            <button class="btn btn-outline-success ml-1 mr-2" onclick="return categorysearch()">Search</button>
                        </div>
                    </div>
                </div>

                <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch" id="searchable_div">
                    <h1>ok<h1>
                   </div>
                    <div class="row mt-2 mb-4">
                        <div class="col-lg-9"></div>
                        <div class="col-lg-3">
                            <a href="{{ route('category.create') }}" class="btn btn-sm btn-success">
                                <i class="fas fa-plus"></i> Add New Category
                            </a>
                        </div>
                    </div>
                </div>
            <!-- /.card -->
        </div>
    </body>
</html>
@endsection

<script>
        function categorysearch()
        {
            var search_text=$("#search_text").val();
            fetch_parent_category_data(search_text);
        }
        categorysearch();

        function fetch_parent_category_data(searchtext='')
        {
            $.ajax({
                url:"{{route('category.parentcategorysearch')}}",
                method:"GET",
                data:{searchtext:searchtext},
                dataType:'json',
                success:function(data)
                {
                    $("#searchable_div").html('');
                    $("#searchable_div").append(data);
                }
            })
        }

</script>
