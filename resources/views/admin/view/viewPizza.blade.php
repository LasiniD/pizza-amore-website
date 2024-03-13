@extends('admin.layout1')

@section('content2')

<div class="card" style="margin: 20px">
    <div class="card-header">Pizza page</div>
    <div class="card-body">
        <div class="card-body">
            <p class="card-text">ID: {{ $pizza->id }}</p>
            <h5 class="card-title">Name: {{ $pizza->name }}</h5>
            <p class="card-text">Description: {{ $pizza->description }}</p>
        </div>
        <hr>
    </div>
</div>

@stop
