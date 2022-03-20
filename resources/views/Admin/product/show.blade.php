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
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Product Details</li>
                        </ol>
                    </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">{{ $product->name }}</h3>
                        <h3 class="d-inline-block d-sm-none">{{ $product->ar_name }}</h3>
                        <div class="col-12">
                            <img id="image-previewer"  src="{{ asset('/img/products/'.$product->image) }}"alt="preview image">
                        </div>
                        </div>
                        <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <p>{{ $product->ar_description }}</p>
                        <hr>
                        <h4>Quantity</h4>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <span class="badge badge-success">{{ $product->quantity }}</span>
                        </div>

                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
                                {{ $product->price }}
                            </h2>
                            <h4 class="mt-0">
                            <small>Ex Tax: $5.00 </small>
                            </h4>
                        </div>

                        </div>
                    </div>

                    <!-- <div class="row mt-4">
                        <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                            <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                        </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Description. </div>
                        <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Rating. </div>
                        </div>
                    </div> -->
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->

        </div>

    </body>
</html>
@endsection
