@extends('layout.admin.main')

@section('content')
    <h5 style="font-weight: bold">Add Category</h5>
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="categoryName" style="font-weight: bold">Category Name:</label>
                        <input type="text" name="categoryName" id="categoryName" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Create Category" class="btn btn-primary btn-sm">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryName = document.querySelector('#categoryName');
        const form = document.querySelector('form');

        form.addEventListener('submit', function (event) {
            if (categoryName && categoryName.value.trim() === '') {
                alert('Please enter category name');
                event.preventDefault();
            }
        });
    });
</script>
@endpush
