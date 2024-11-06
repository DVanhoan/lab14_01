@extends('layout.admin.main')

@section('content')
<h5 style="font-weight: bold">Edit Category</h5>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <form action="{{ route('category.update', $category->categoryID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="categoryName" style="font-weight: bold">Category Name:</label>
                    <input type="text" name="categoryName" id="categoryName" class="form-control" value="{{ $category->categoryName }}">
                </div>
                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-primary btn-sm">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection