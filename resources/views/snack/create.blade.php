@extends('layouts.master')

@section('content')
    <h1 class="text-center text-danger my-5">Create New Product</h1>

    <form action="{{ route('snack.store') }}" method="post" enctype="multipart/form-data" class="w-75 mx-auto my-5">
        @csrf
        <div class="my-2 form-group">
            <label for="title" class="mb-2">Product Title</label>
            <input value='{{ old('title') }}' type="text" class="form-control" name="title">
            @error('title')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="my-2 form-group">
            <label for="description" class="mb-2">Product Description</label>
            <input value='{{ old('description') }}' type="text" class="form-control" name="description">
            @error('description')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>
        <div class="my-2 form-group">
            <label for="price" class="mb-2">Price</label>
            <input value='{{ old('price') }}' type="text" class="form-control" name="price">
            @error('price')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>




        <div class="my-2 form-group">
            <label for="image" class="mb-2">Product Image</label>

            <input type="file" class="form-control" name="image">
            @error('image')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>
        <input type="submit" value="Add Class" class="w-100 btn btn-success">
    </form>
@endsection
