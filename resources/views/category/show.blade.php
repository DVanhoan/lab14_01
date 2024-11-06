@extends('layout.admin.main')

@section('content')
<h5 style="font-weight: bold">Category Detail</h5>
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
                    <tr>
                        <td>{{ $category->categoryID }}</td>
                        <td>{{ $category->categoryName }}</td>
                        <td>
                            <a href="{{ route('category.edit', $category->categoryID) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form class="d-inline-block" action="{{ route('category.destroy', $category->categoryID) }}" method="POST">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
@endSection