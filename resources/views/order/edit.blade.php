<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/home-image.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/large-logo.png') }}">
    <!-- font icon css file -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontIcon/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- aos css file -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/AOS/aos.css') }}">
    <!-- bootstrap css file  -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">
    <!-- main css file  -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- tailwind css file -->
    <!-- <link rel="stylesheet" href="/dist/output.css"> -->
    <title style="text-transform: uppercase;">Create An Order</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body class="bg-warning">

    <h1 class="text-center text-danger my-5">Edit This Order</h1>

    <form action="{{ route('order.update',$order->id) }}" method="post" class="w-75 mx-auto my-5">
        @csrf
        @method('put')
        <div class="my-2 form-group">
            <label for="title" class="mb-2">Your Name</label>
            <input value='{{ $order->name }}' type="text" class="form-control" name="name">
            @error('name')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="my-2 form-group">
            <label for="phone" class="mb-2">Your Phone</label>
            <input value='{{ $order->phone  }}' type="text" class="form-control" name="phone">
            @error('phone')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>
        <div class="my-2 form-group">
            <label for="price" class="mb-2">Price</label>
            <input value='{{ $order->price }}' type="text" class="form-control" name="price">
            @error('price')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>
        <div class="my-2 form-group">
            <label for="address" class="mb-2">Your Address</label>
            <input value='{{ $order->address }}' type="text" class="form-control" name="address">
            @error('address')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>




        <div class="my-2 form-group">
            <label for="location" class="mb-2">location (link):</label>
            <input value='{{ $order->location }}' type="url" class="form-control" name="location">
            @error('location')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="my-2 form-group">
            <label for="amount" class="mb-2">Amount</label>
            <input value='{{ $order->amount}}' type="text" class="form-control" name="amount">
            @error('amount')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

        </div>
        {{-- <input type="text" name="product_id"> --}}
        {{-- <input type="text" value="{{}}"> --}}
        <input type="submit" value="Update Order" class="w-100 btn btn-success">
    </form>

    <!-- jquery js file -->
    <script src="{{ asset('assets/vendor/jQuery/jquery-3.7.1.min.js') }}"></script>
    <!-- aos js file -->
    <script src="{{ asset('assets/vendor/AOS/aos.js') }}"></script>
    <!-- bootstrap js file -->
    <script src="{{ asset('assets/vendor/bootstrap/bootstrap.js') }}"></script>
    <!-- main js file  -->
    <script src="{{ asset('assets/js/main.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>


</body>
</html>
