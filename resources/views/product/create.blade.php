@extends('layouts.master')

@section('content')
    <h1 class="text-center text-danger my-5">{{trans('main_trans.Create_New_Product')}}</h1>

    <form action="{{ route('addproduct.store') }}" method="post" enctype="multipart/form-data" class="w-75 mx-auto my-5">
        @csrf
        <div class="my-2 form-group">
            <label for="title" class="mb-2">{{trans('main_trans.Product_Title')}}</label>
            <input value='{{ old('title') }}' type="text" class="form-control" name="title">
            @error('title')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="my-2 form-group">
            <label for="description" class="mb-2">{{trans('main_trans.Product_Description')}}</label>
            <input value='{{ old('description') }}' type="text" class="form-control" name="description">
            @error('description')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>
        <div class="my-2 form-group">
            <label for="price" class="mb-2">{{trans('main_trans.Price')}}</label>
            <input value='{{ old('price') }}' type="text" class="form-control" name="price">
            @error('price')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>
        <div class="my-2 form-group">
            <label for="typeId" class="mb-2">{{trans('main_trans.section')}}</label>
            <br>

            <select name="typeId" class="form-control">
                <option selected disabled class="form-control">Choose Classroom</option>
                <option value="1" class="form-control">Food</option>
                <option value="2" class="form-control">Snack</option>
                <option value="3" class="form-control">Beverage</option>
            </select>
            @error('typeId')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>




        <div class="my-2 form-group">
            <label for="image" class="mb-2">{{trans('main_trans.Product_Image')}}</label>

            <input type="file" class="form-control" name="image">
            @error('image')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>
        <input type="submit" value="{{trans('main_trans.add_product')}}" class="w-100 btn btn-success">
    </form>
@endsection
