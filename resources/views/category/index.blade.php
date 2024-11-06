{{-- Thừa kế main.blade.php template --}}
@extends('layout.admin.main')

{{-- Nội dung section content main.blade.php --}}
@section('content')

<h5 style="font-weight: bold">List Categories</h5>
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <table class="table table-hover table-border">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->categoryID }}</td>
                        <td>{{ $category->categoryName }}</td>
                        <td>
                            <a href="{{ route('category.show', $category->categoryID) }}" class="btn btn-info btn-sm">Show</a>
                            <a href="{{ route('category.edit', $category->categoryID) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form class="d-inline-block" action="{{ route('category.destroy', $category->categoryID) }}" method="POST">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">{{ $categories->links() }}</div>
            <p class="d-flex justify-content-end">
                <a href="{{ route('category.create') }}" class="btn btn-info btn-sm">Add Category</a>
            </p>
        </div>
    </div>
</div>

@endsection
