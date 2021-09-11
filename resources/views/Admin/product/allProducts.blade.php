@extends('/Admin/leftSide')
@section('content')
<html>
    <head>
        <style>
            .cat-font{
                font-size: 20px;
                font-weight: 400;
                font-family: cursive;
            }
            .image-size{
                width:70%;
            }
            .pro-name{
                font-size: 18px;
                font-family: cursive;
            }
        </style>
    </head>
    <body>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">All Products</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Products</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                    </div>
                    <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">
                                    ID
                                </th>
                                <th style="width: 17%">
                                    Product Name
                                </th>
                                <th style="width: 26%">
                                    Image
                                </th>
                                <th style="width: 15%">
                                    Category Name
                                </th>
                                <th style="width: 8%" class="text-center">
                                    Quantity
                                </th>
                                <th style="width: 5%" class="text-center">
                                    Price
                                </th>
                                <th style="width: 30%">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    542
                                </td>
                                <td>
                                    <p class="pro-name">
                                        LA-PRESH
                                    </p>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Product Image" class="image-size" src="{{ asset('/img/skinpro1.jpg') }}">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project_progress">
                                    <p class="cat-font">SkinCare</p>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-success">50</span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-dark">5$</span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="productdetails">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="/editproduct">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    205
                                </td>
                                <td>
                                    <p class="pro-name">
                                        Joo Faced
                                    </p>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Product Image" class="image-size" src="{{ asset('/img/makeup_pro1.jpg') }}">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project_progress">
                                    <p class="cat-font">MakeUp</p>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-danger">8</span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-dark">10$</span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="/productdetails">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="/editproduct">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    123
                                </td>
                                <td>
                                    <p class="pro-name">
                                        Brainy
                                    </p>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Product Image" class="image-size" src="{{ asset('/img/sup_pro1.jpg') }}">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project_progress">
                                    <p class="cat-font">Food Supplements</p>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-warning">23</span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-dark">8$</span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="/productdetails">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="/editproduct">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    123
                                </td>
                                <td>
                                    <p class="pro-name">
                                        Brainy
                                    </p>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Product Image" class="image-size" src="{{ asset('/img/sup_pro1.jpg') }}">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project_progress">
                                    <p class="cat-font">Food Supplements</p>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-warning">23</span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-dark">8$</span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="/productdetails">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="/editproduct">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    205
                                </td>
                                <td>
                                    <p class="pro-name">
                                        Joo Faced
                                    </p>
                                </td>
                                <td>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Product Image" class="image-size" src="{{ asset('/img/makeup_pro1.jpg') }}">
                                        </li>
                                    </ul>
                                </td>
                                <td class="project_progress">
                                    <p class="cat-font">MakeUp</p>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-danger">8</span>
                                </td>
                                <td class="project-state">
                                    <span class="badge badge-dark">10$</span>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="/productdetails">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="/editproduct">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>

        </div>

    </body>
</html>
@endsection
