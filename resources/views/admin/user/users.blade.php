@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>ALL USERS
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
                            <th scope="col">Name</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($users_trash))
                        @foreach($users_trash as $user)
                        <tr>
                            <th scope="row">{{$user->user_id}}</th>
                            <td>{{$user->user_name}}</td>
                            <td>{{$user->user_email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{get_user_role_name($user->user_role)}}</td>
                            <td>
                                <div style="display: flex;">
                                    <a href="{{ route('userRestore',$user->user_id) }}" class="btn btn-success">Restore</a>
                                    <a href="{{ route('userDelete',$user->user_id) }}" class="btn btn-danger" onclick="return confirmDeleted()">Detele</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->user_id}}</th>
                            <td>{{$user->user_name}}</td>
                            <td>{{$user->user_email}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{get_user_role_name($user->user_role)}}</td>
                            <td>
                                <div style="display: flex;">
                                    <a href="{{ route('userEdit',$user->user_id) }}" class="btn btn-info">Detail</a>
                                    <a href="{{ route('userTrash',$user->user_id) }}" class="btn btn-danger">Detele</a>
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
        return confirm('Do you readly want detele this user.');
    }
</script>
@endsection