{{-- Thừa kế main.blade.php template --}}
@extends('layout.admin.main')

{{-- Nội dung section content main.blade.php --}}
@section('content')

<h5 style="font-weight: bold">List Products</h5>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <table class="table table-hover table-border">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->productCode }}</td>
                        <td>{{ $product->productName }}</td>
                        <td>{{ $product->listPrie }}</td>
                        <td>
                            <a href="{{ route('product.edit', $product->productCode) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form class="d-inline-block" action="{{ route('product.destroy', $product->productCode) }}" method="POST">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p1 class="d-flex justify-content-center">{{ $products->links() }}</p1>
            <p class="d-flex justify-content-end">
                <a href="{{ route('product.create') }}" class="btn btn-info btn-sm">Add Product</a>
            </p>
        </div>
    </div>
</div>

@endsection
