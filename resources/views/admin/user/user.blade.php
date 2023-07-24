@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>USER</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <!-- /. ROW  -->
        <div class="row">
            <form action="{{ (isset($user) ?  route('userUpdate') : route('userStore')) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($user))

                @method('PUT')
                <input type="hidden" name="user_id" value="{{ $user->user_id }}">

                @if ($errors->has('user_id'))
                <div class="form-group col-md-12">
                    <span class="text-danger">{{ $errors->first('user_id') }}</span>
                </div>
                @endif

                @endif
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">user name</label>
                    <input type="text" class="form-control" value="{{ (isset($user) ? $user->user_name : '') }}" name="user_name" id="exampleInputEmail1" placeholder="Name">
                    @if ($errors->has('user_name'))
                    <span class="text-danger">{{ $errors->first('user_name') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">user email</label>
                    <input type="email" class="form-control" value="{{ (isset($user) ? $user->user_email : '') }}" name="user_email" id="exampleInputEmail1" placeholder="Email">
                    @if ($errors->has('user_email'))
                    <span class="text-danger">{{ $errors->first('user_email') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">user role</label>
                    <input type="number" class="form-control" name="user_role" rows="4" value="{{ (isset($user) ? $user->user_role : '') }}">
                    @if ($errors->has('user_role'))
                    <span class="text-danger">{{ $errors->first('user_role') }}</span>
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