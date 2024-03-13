@extends('admin.layout1')

@section('content2')

<div class="card" style="margin: 20px">
    <div class="card-header">Create New Categories</div>
    <div class="card-body">
        <form action="{{ url('category') }}" method="post">

            {!! csrf_field() !!}

            <label>Related Pizza Id</label><br>
            <input type="text" name="id" id="id" class="form-control"><br>
            <label>Price</label><br>
            <input type="float" name="price" id="price" class="form-control"><br>
            <label>Size</label>
            <input type="text" name="size" id="size" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>

        </form>
    </div>
</div>

@stop
