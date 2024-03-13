@extends('admin.layout1')

@section('content2')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Category</div>
    <div class="card-body">

        <form action="{{ url('category/'.$categories->c_id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="c_id" id="c_id" value="{{ $categories->c_id }}">
            <label>Price</label><br>
            <input type="float" name="price" id="price" value="{{ $categories->price }}" class="form-control"><br>
            <label>Size</label><br>
            <input type="text" name="size" id="size" value="{{ $categories->size }}" class="form-control"><br>
            <label>Related Pizza ID</label><br>
            <input type="text" name="id" id="id" value="{{ $categories->id }}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success">
            <br>
    </div>
</div>

@stop
