@extends('layout.admin.main')

@section('content')
<h5 style="font-weight: bold">Edit Product</h5>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <form action="{{ route('product.update', $category->categoryID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="categoryId" style="font-weight: bold">Category Name:</label>
                    <select name="categoryID" id="categoryID" class="form-control"></select>
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->categoryID }}" {{$category->categoryID == $product->categoryID ? 'selected' : ''}} >{{ $category->categoryName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="productCode" style="font-weight: bold">Code:</label>
                    <input type="text" name="productCode" id="productCode" class="form-control" value="{{ $product->productCode }}">
                </div>

                <div class="form-group">
                    <label for="productName" style="font-weight: bold">Product Name:</label>
                    <input type="text" name="productName" id="productName" class="form-control" value="{{ $product->productName }}">
                </div>

                <div class="form-group">
                    <label for="listPrie" style="font-weight: bold">List Price:</label>
                    <input type="text" name="listPrie" id="listPrie" class="form-control" value="{{ $product->listPrie }}">
                </div>

                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
