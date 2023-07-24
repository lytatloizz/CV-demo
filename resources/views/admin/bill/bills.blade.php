@extends('admin.index')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-lg-12">
                <h2>ALL Bill
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
                            <th scope="col">Price</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bills as $bill)
                        <tr>
                            <th scope="row">{{$bill->bill_id}}</th>
                            <td>{{$bill->user_name}}</td>
                            <td>{{exchange_price($bill->bill_price)}}$</td>
                            <td>{{$bill->bill_description}}</td>
                            <td>{{$bill->bill_qty}}</td>
                            <td>
                                <div>
                                    <a href="{{ route('billDelete',$bill->bill_id) }}" class="btn btn-danger" onclick="return confirmDeleted()">Detele</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
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
        return confirm('Do you readly want detele this bill.');
    }
</script>
@endsection