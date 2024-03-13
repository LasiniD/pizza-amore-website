@extends('admin.layout1')

@section('content2')
<div class="container">
    <div class="row" style="margin: 20px">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                        <h2>CRUD</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/pizza/create') }}" class="btn btn-success btn-sm" title="Add New Pizza">
                        Add New
                    </a>
                </div>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pizza as $item)

                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->description }}</td>

                                <td>
                                    <a href="{{ url('/pizza/'.$item->id) }}" title="View Pizza"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                                    <a href="{{ url('/pizza/'.$item->id.'/edit') }}" title="Edit Pizza"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i></button></a>

                                    <form method="POST" action="{{ url('/pizza'.'/'.$item->id) }}" accept-charset="UTF-8" style="display: inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <a href="" title="Delete Pizza" onclick="return confirm('Confirm Delete?')"><button class="btn-danger btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true">Delete</i></button></a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
