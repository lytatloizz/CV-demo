@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>ALL MANUFACTURES
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
                        @if(isset($manufacture_trash))
                        @foreach($manufacture_trash as $manufacture)
                        <tr>

                            <td>{{ $manufacture->manu_id }}</td>
                            <td>{{ $manufacture->manu_name }}</td>
                            <td>
                                <div>
                                    <a href="{{ route('manufactureRestore', $manufacture->manu_id) }}" class="btn btn-success">Restore</a>
                                    <a href="{{ route('manufactureDelete', $manufacture->manu_id) }}" class="btn btn-danger" onclick="return confirmDeleted()">Detele</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        @foreach($manufactures as $manufacture)
                        <tr>

                            <td>{{ $manufacture->manu_id }}</td>
                            <td>{{ $manufacture->manu_name }}</td>
                            <td>
                                <div>
                                    <a href="{{ route('manufactureEdit', $manufacture->manu_id) }}" class="btn btn-info">Details</a>
                                    <a href="{{ route('manufactureTrash', $manufacture->manu_id) }}" class="btn btn-danger">Detele</a>
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