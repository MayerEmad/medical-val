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
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
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
                    >
                    <div class="row d-flex align-items-stretch" id="searchable_div">
                    @foreach($categories as $cat)

                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flip-card" style="height:100%">
                        <div class="card bg-light flip-card-inner">
                            <p class="pt-4 lead pr-1 pl-1" style="font-size: 30px;font-weight: 400;font-family: cursive;">{{$cat->name}}</p>
                            <div class="card-body pl-0 pt-0 pb-0">
                                <img class="img1" src="{{ asset('/img/categories/'.$cat->image) }}" width="106.5%" style="height: 260px;">
                            </div>
                            <div class="flip-card-back pt-5" style="background-color:#828282;">
                                <div class="pt-2 mb-4">
                                    <a href="{{route('category.edit',['category'=>$cat->id])}}" class="btn btn-success mr-3" type="button">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    @if(Auth::user()->hasRole('superadmin'))
                                        <a onclick='deletefunction({{$cat->id}})' class="btn btn-danger" type="button">
                                            <i class="fas fa-trash-alt"></i> Delete
                                        </a>
                                        <form action="{{ route('category.destroy',['category'=>$cat->id]) }}" id="{{$cat->id}}" method="POST" style="display:none">
                                            @csrf @method("DELETE")
                                            <button type="submit"></button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                            <a href="{{ route('category.show',['category'=>$cat->id]) }}"class="btn btn-light pro-btn mb-3 mr-2 ml-2" type="button">
                                <i class="fab fa-product-hunt"></i> View Contents
                            </a>

                        </div>
                    </div>

                    @endforeach
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
            });
        }

</script>
