@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>PRODUCT</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <!-- /. ROW  -->
        <div class="row">
            <form action="{{ (isset($product) ?  route('productsUpdate') : route('productsStore')) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($product))

                @method('PUT')
                <input type="hidden" name="product_id" value="{{ $product->product_id }}">
                <input type="hidden" name="product_sold" value="{{ $product->product_sold }}">
                <input type="hidden" name="product_status" value="{{ $product->product_status }}">
                <input type="hidden" name="product_img" value="{{ $product->product_img }}">

                @if ($errors->has('product_id'))
                <div class="form-group col-md-12">
                    <span class="text-danger">{{ $errors->first('product_id') }}</span>
                </div>
                @endif
                @if ($errors->has('product_sold'))
                <div class="form-group col-md-12">
                    <span class="text-danger">{{ $errors->first('product_sold') }}</span>
                </div>
                @endif
                @if ($errors->has('product_status'))
                <div class="form-group col-md-12">
                    <span class="text-danger">{{ $errors->first('product_status') }}</span>
                </div>
                @endif

                @endif
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Product name</label>
                    <input type="text" class="form-control" value="{{ (isset($product) ? $product->product_name : '') }}" name="product_name" id="exampleInputEmail1" placeholder="Name">
                    @if ($errors->has('product_name'))
                    <span class="text-danger">{{ $errors->first('product_name') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Product price</label>
                    <input type="number" class="form-control" value="{{ (isset($product) ? $product->product_price : '') }}" name="product_price" id="exampleInputEmail1" placeholder="Price">
                    @if ($errors->has('product_price'))
                    <span class="text-danger">{{ $errors->first('product_price') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Product quantity</label>
                    <input type="number" class="form-control" value="{{ (isset($product) ? $product->product_qty : '') }}" name="product_qty" id="exampleInputEmail1" placeholder="Quantity">
                    @if ($errors->has('product_qty'))
                    <span class="text-danger">{{ $errors->first('product_qty') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Product feature</label>
                    <select class="form-control" name="product_feature">
                        <option value="0" {{ isset($product) ? ($product->product_feature == 0 ? 'selected' : '') : '' }}>New product</option>
                        <option value="1" {{ isset($product) ? ($product->product_feature == 1 ? 'selected' : '') : '' }}>Hot sale</option>
                    </select>
                    @if ($errors->has('product_feature'))
                    <span class="text-danger">{{ $errors->first('product_feature') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Product type</label>
                    <select class="form-control" name="product_type">
                        @foreach($types as $type)
                        <option value="{{$type->type_id}}" {{ isset($product) ? ($product->type_id == $type->type_id ? "selected" : "") : "" }}>{{$type->type_name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('product_type'))
                    <span class="text-danger">{{ $errors->first('product_type') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Product manufactory</label>
                    <select class="form-control" name="product_manufactory">
                        @foreach($manus as $manu)
                        <option value="{{$manu->manu_id}}" {{ isset($product) ? ($product->manu_id == $manu->manu_id ? "selected" : "") : "" }}>{{$manu->manu_name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('product_manufactory'))
                    <span class="text-danger">{{ $errors->first('product_manufactory') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Product description</label>
                    <textarea class="form-control" name="product_description" rows="4">{{ (isset($product) ? $product->product_description : '') }}</textarea>
                    @if ($errors->has('product_description'))
                    <span class="text-danger">{{ $errors->first('product_description') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <input accept="image/*" type="file" name="file-input" id="file-input" class="file-input__input" />
                    <label class="file-input__label btn-lg btn-block" for="file-input">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload" class="svg-inline--fa fa-upload fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                        </svg>
                        <span>Upload file</span></label>
                    <div class="help-block">
                        <img class="center-block img-responsive" id="img-preview" src="{{ (isset($product) ? asset('img/'.$product->product_img) : '') }}" alt="">
                    </div>
                    @if ($errors->has('file-input'))
                    <span class="text-danger">{{ $errors->first('file-input') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </form>
        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<script>
    const input = document.getElementById('file-input');
    const image = document.getElementById('img-preview');

    input.addEventListener('change', (e) => {
        if (e.target.files.length) {
            const src = URL.createObjectURL(e.target.files[0]);
            image.src = src;
        }
    });
</script>
@endsection