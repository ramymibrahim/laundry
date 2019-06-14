@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Item</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('items')}}" method="POST">
                {{csrf_field()}}
                <input type="text" name="name" placeholder="Name" class="form-control" />
                <input type="number" step="0.01" name="price" placeholder="Price" class="form-control" />
                <button type="submit" class="btn btn-success">Insert</button>
            </form>
        </div>
    </div>
</div>
@endsection