@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>ALL PRODUCTS
                    @if (session('success'))
                    <span class="alert alert-danger">
                        {{ session('success') }}
                    </span>
                    @endif
                </h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Sold</th>
                            <th scope="col">Manufactures</th>
                            <th scope="col">Protypes</th>
                            <th scope="col">Feature</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($products_trash))
                        @foreach($products_trash as $product)
                        <tr>
                            <th scope="row">{{$product->product_id}}</th>
                            <td>
                                <img src="{{asset('img/'.$product->product_img)}}" alt="" class="img-responsive">
                            </td>
                            <td>{{$product->product_name}}</td>
                            <td>{{exchange_price($product->product_price)}}$</td>
                            <td>{{$product->product_description}}</td>
                            <td>{{$product->product_qty}}</td>
                            <td>{{$product->product_sold}}</td>
                            <td>{{get_manu_name($product->manu_id)}}</td>
                            <td>{{get_type_name($product->type_id)}}</td>
                            <td>{{get_feature_name($product->product_feature)}}</td>
                            <td>
                                <div style="display: flex;">
                                    <a href="{{ route('productRestore',$product->product_id) }}" class="btn btn-success">Restore</a>
                                    <a href="{{ route('productDelete',$product->product_id) }}" class="btn btn-danger" onclick="return confirmDeleted()">Detele</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($products as $product)
                        <tr>
                            <th scope="row">{{$product->product_id}}</th>
                            <td>
                                <img src="{{asset('img/'.$product->product_img)}}" alt="" class="img-responsive">
                            </td>
                            <td>{{$product->product_name}}</td>
                            <td>{{exchange_price($product->product_price)}}$</td>
                            <td>{{$product->product_description}}</td>
                            <td>{{$product->product_qty}}</td>
                            <td>{{$product->product_sold}}</td>
                            <td>{{get_manu_name($product->manu_id)}}</td>
                            <td>{{get_type_name($product->type_id)}}</td>
                            <td>{{get_feature_name($product->product_feature)}}</td>
                            <td>
                                <div style="display: flex;">
                                    <a href="{{ route('productEdit',$product->product_id) }}" class="btn btn-info">Detail</a>
                                    <a href="{{ route('productTrash',$product->product_id) }}" class="btn btn-danger">Detele</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<script>
    function confirmDeleted() {
        return confirm('Do you readly want detele this product.');
    }
</script>
@endsection