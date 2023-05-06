@extends('master')
@section('body')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Add Product</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center text-success">{{session('message')}}</h3>
                        <form action="{{route('product.create')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Product Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" placeholder="Enter Product Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Product Description</label>
                                <div class="col-md-8">
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter Product Description" required></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Product Price</label>
                                <div class="col-md-8">
                                    <input type="number" name="price" class="form-control" placeholder="Enter Product Price" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Product Quantity</label>
                                <div class="col-md-8">
                                    <input type="number" name="quantity" class="form-control" placeholder="Enter Product Price" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Product Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control" placeholder="Enter Product Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" class="btn btn-primary" value="Add Product">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
