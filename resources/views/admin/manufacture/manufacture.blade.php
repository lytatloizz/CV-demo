@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>MANUFACTURE</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <!-- /. ROW  -->
        <div class="row">
            <form action="{{ (isset($manufacture) ?  route('manufactureUpdate') : route('manufactureStore')) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($manufacture))

                @method('PUT')
                <input type="hidden" name="manu_id" value="{{ $manufacture->manu_id }}">

                @if ($errors->has('manu_id'))
                <div class="form-group col-md-12">
                    <span class="text-danger">{{ $errors->first('manu_id') }}</span>
                </div>
                @endif

                @endif
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Manufacture name</label>
                    <input type="text" class="form-control" value="{{ (isset($manufacture) ? $manufacture->manu_name : '') }}" name="manu_name" id="exampleInputEmail1" placeholder="Name">
                    @if ($errors->has('manu_name'))
                    <span class="text-danger">{{ $errors->first('manu_name') }}</span>
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