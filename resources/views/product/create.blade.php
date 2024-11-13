@extends('layout.admin.main')

@section('content')
    <h5 style="font-weight: bold">Add Product</h5>
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <form action="{{ route('product.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="categoryId" style="font-weight: bold">Category</label>
                        <select name="categoryID" id="categoryID" class="form-control">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->categoryID }}">{{ $category->categoryName }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="productCode" style="font-weight: bold">Code:</label>
                        <input type="text" name="productCode" id="productCode" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="productName" style="font-weight: bold">Product Name:</label>
                        <input type="text" name="productName" id="productName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="listPrice" style="font-weight: bold">List Price:</label>
                        <input type="text" name="listPrice" id="listPrice" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Create Product" class="btn btn-primary btn-sm">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
