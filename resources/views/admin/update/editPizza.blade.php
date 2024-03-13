@extends('admin.layout1')

@section('content2')

<div class="card" style="margin: 20px;">
    <div class="card-header">Edit Pizza</div>
    <div class="card-body">

        <form action="{{ url('pizza/'.$pizza->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $pizza->id }}">
            <label>Name</label><br>
            <input type="text" name="name" id="name" value="{{ $pizza->name }}" class="form-control"><br>
            <label>Description</label><br>
            <input type="text" name="description" id="description" value="{{ $pizza->description }}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success">
            <br>
    </div>
</div>

@stop
