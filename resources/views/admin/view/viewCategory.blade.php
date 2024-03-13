@extends('admin.layout1')

@section('content2')

<div class="card" style="margin: 20px">
    <div class="card-header">Categories page</div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">ID: {{ $categories->c_id }}</p>
            <h5 class="card-title">Price: {{ $categories->price }}</h5>
            <p class="card-text">Size: {{ $categories->size }}</p>
            <p class="card-text">Pizza id: {{ $categories->id }}</p>
        </div>
        <hr>
    </div>
</div>

@stop
