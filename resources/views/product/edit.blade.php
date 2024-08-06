@extends('layouts.master')

@section('content')
    <h1 class="text-center text-danger my-5">Edit Product</h1>

    <form action="{{ route('addproduct.update', $product->id) }}" enctype="multipart/form-data" method="post" class="w-75 mx-auto my-5">
        @csrf
        @method('put')
        <div class="my-5 form-group">
            <label for="title" class="mb-2">Product Title</label>
            <input value="{{ $product->title }}" type="text" class="form-control" name="title">
            @error('title')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="my-5 form-group">
            <label for="description" class="mb-2">Product Description</label>
            <input value="{{ $product->description }}" type="text" class="form-control" name="description">
            @error('description')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="my-5 form-group">
            <label for="price" class="mb-2">Product Price</label>
            <input value="{{ $product->price }}" type="text" class="form-control" name="price">
            @error('price')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="my-5 form-group">
            <label for="price" class="mb-2">Product Price</label>
            <input value="{{ $product->price }}" type="text" class="form-control" name="price">
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
        <input type="submit" value="Update Product" class="w-100 btn btn-primary">
    </form>
@endsection
