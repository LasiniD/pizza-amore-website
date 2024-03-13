@extends('admin.layout1')

@section('content2')

<div class="card" style="margin: 20px">
    <div class="card-header">Cart</div>
    <div class="card-body">
        <table id="cart" class="table table-bordered">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Total</th>

                    <th></th>
                </tr>
            </thead>
            <tbody>
                @if(session('cart'))
                    @foreach (session('cart') as $id=>$details)
                        <tr rowId="{{ $id }}">
                            <td data-th="Product">
                                <div class="col-sm-9 hidden-xs">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </td>
                            <td data-th="Size">{{ $details['size'] }}</td>
                            <td data-th="Price">{{ $details['price'] }}</td>
                            <td data-th="Subtotal" class="text-center"></td>
                            <td class="actions">
                                <a href="" class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>


@endsection

@section('scripts')
<script type="text/javascript">
    $(".delete-product").click(function (e){
        e.preventDefault();
        var ele = $(this);

        if(confirm("Do you really want to delete?")){
            s
        }
    });
</script>

@endsection
