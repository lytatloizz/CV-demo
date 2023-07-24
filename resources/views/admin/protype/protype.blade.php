@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>PROTYPE</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <!-- /. ROW  -->
        <div class="row">
            <form action="{{ (isset($protype) ?  route('protypeUpdate') : route('protypeStore')) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($protype))

                @method('PUT')
                <input type="hidden" name="type_id" value="{{ $protype->type_id }}">

                @if ($errors->has('type_id'))
                <div class="form-group col-md-12">
                    <span class="text-danger">{{ $errors->first('type_id') }}</span>
                </div>
                @endif

                @endif
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Protype name</label>
                    <input type="text" class="form-control" value="{{ (isset($protype) ? $protype->type_name : '') }}" name="type_name" id="exampleInputEmail1" placeholder="Name">
                    @if ($errors->has('type_name'))
                    <span class="text-danger">{{ $errors->first('type_name') }}</span>
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
@endsection