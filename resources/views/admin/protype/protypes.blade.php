@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>ALL PROTYPES
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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($protype_trash))
                        @foreach($protype_trash as $protype)
                        <tr>

                            <td>{{ $protype->type_id }}</td>
                            <td>{{ $protype->type_name }}</td>
                            <td>
                                <div>
                                    <a href="{{ route('protypeRestore', $protype->type_id) }}" class="btn btn-success">Restore</a>
                                    <a href="{{ route('protypeDelete', $protype->type_id) }}" class="btn btn-danger" onclick="return confirmDeleted()">Detele</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($protypes as $protype)
                        <tr>

                            <td>{{ $protype->type_id }}</td>
                            <td>{{ $protype->type_name }}</td>
                            <td>
                                <div>
                                    <a href="{{ route('protypeEdit', $protype->type_id) }}" class="btn btn-info">Details</a>
                                    <a href="{{ route('protypeTrash', $protype->type_id) }}" class="btn btn-danger">Detele</a>
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