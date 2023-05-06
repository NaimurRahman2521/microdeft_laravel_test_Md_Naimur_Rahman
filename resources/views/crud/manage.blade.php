@extends('master')
@section('body')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header"><h2 class="text-center">All Product Information</h2></div>
                    <div class="card-body">
                        <h4 class="text-center text-danger">{{session('message')}}</h4>
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Product Name</th>
                                <th>Product Description</th>
                                <th>Product Price</th>
                                <th>Product Quantity</th>
                                <th>Product Image</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td><img src="{{asset($product->image)}}" alt="" height="60" width="80"></td>
                                    <td>
                                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this...')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
