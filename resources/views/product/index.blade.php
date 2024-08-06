<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>
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
    <title style="text-transform: uppercase;">HAMBURER</title>
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

<body class="blue container" style="overflow-x: hidden;">
    <!-- <h1 class="bg-red-400">hello</h1> -->
    <div class="allContent container" style="overflow-x: hidden;">
        <header class="container" style="background-color: #010A5E;" id="changecolor">
            <div class="textLogo" id="home">
                <a href="#home" class="d-flex">
                    <span class="text-white">HAMBU</span>
                    <span class="text-warning">RER</span>
                </a>
            </div>
            <div class="lastNav">

                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span id="toggleNavIcon">
                                <i class="navbar-toggler-icon text-white"></i>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active text-warning" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#aboutUs">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#review">Review</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                {{-- ------------- --}}

                                                <div class="dropdown">
                                                    <button class="btn text-light dropdown-toggle" style="border:none;"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        {{ Auth::user()->name }}
                                                    </button>
                                                    <ul class="dropdown-menu" style="background-color:#000000;">
                                                        <li>
                                                            <a class="dropdown-item text-warning"
                                                                href="{{ route('dashboard') }}">Dashboard</a>
                                                        </li>
                                                        <li class="">
                                                            <a class="dropdown-item text-warning"
                                                                href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                                {{ __('Logout') }}
                                                            </a>
                                                            <form id="logout-form" action="{{ route('logout') }}"
                                                                method="POST" class="d-none">
                                                                @csrf
                                                            </form>
                                                        </li>

                                                    </ul>
                                                </div>


                                                {{-- ---------- --}}


                                            </li>
                                        @endguest
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="moonIcon" id="moonIcon">
                    <i class="fa-solid fa-moon"></i>
                </div>
            </div>
        </header>

        <!--
      .
      .
      second section start
      .
      .
     -->
        <section class="secondSection" data-aos="fade-up" id="aboutUs">
            <div class="row container">
                <div class="col-s-12 col-md-6" style="display: flex;justify-content: center;" data-aos="fade-right"
                    data-aos-delay="300">
                    <div class="myImages"
                        style="display: flex;justify-content: center;align-items: center; width: 100%;height: 80%;">
                        <img src="{{ asset('assets/images/burger-1.png') }}" alt="" width="80%">
                    </div>
                </div>
                <div class="col-s-12 col-md-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="row1">
                        <p class="text1">HAPPY TUMMY WITH TASTY BURGERS.
                            <hr style="height:4px;width:20%;color:#ffc107;background-color: #ffc107;">
                        </p>
                    </div>
                    <div class="row2">
                        <p id="fParagraph">juicy burgers. That's what snow's Kitchen is all about and we love it! Our
                            favorite is the 'Smokehouse BBQ' which is loaded with beef bacon, fried onions, and hickory
                            BBQ sauce. Service is good but can be a bit slow during weekends and peak hours. Love nachos
                            and want something different? Go for Snow's Nacho Burger' - you will not regret it. For
                            many, this is the absolute king of burgers in Egypt .

                        </p>
                        <button class="btn btn-warning" id="fReadMoreBtn">Read More</button>
                    </div>

                </div>
                <div class="col-12">
                    <div class="row3">
                        <div class="options">
                            <div class="option"
                                style="display: flex;justify-content: space-between;align-items: center;">
                                <div class="Icon" style="width: 20%;">
                                    <i class="fa-solid fa-utensils p-4 text-warning text-center"
                                        style="display: inline-block;margin-left: 0%;"></i>
                                    <p class=" text-centerr ps-4">Delicious</p>
                                </div>
                                <div class="Icon" style="width: 20%;">
                                    <i class="fa-solid fa-droplet p-4 text-warning text-center"></i>
                                    <p class=" text-centerr ps-4">Fresh</p>
                                </div>
                                <div class="Icon" style="width: 20%;">
                                    <i class="fa-brands fa-envira p-4 text-warning text-center"></i>
                                    <p class=" text-centerr ps-4">Organic</p>
                                </div>
                            </div>
                            <div class="option" id="hiddenoptions">
                                <div class="Icon1" id="Icon1" style="width: 20%;">
                                    <i class="fa-solid fa-truck-fast p-4 text-warning text-center"></i>
                                    <p class=" text-centerr ps-4">Truck Fast</p>
                                </div>
                                <div class="Icon2" id="Icon2" style="width: 20%;">
                                    <i class="fa-solid fa-check p-4 text-warning text-center"></i>
                                    <p class=" text-centerr ps-4">Trust</p>
                                </div>
                                <div class="Icon3" id="Icon3" style="width: 20%;">
                                    <i class="fa-solid fa-medal p-4 text-warning text-center"></i>
                                    <p class=" text-centerr ps-4">Quality</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="btns" style="display: flex;justify-content: center;">
                        <button class="btn btn-warning text-dark" id="btnLearnMore1">Learn More</button>
                    </div>
                </div>
            </div>
    </div>
    </section>


    <!-- Third Section  -->
    <section class="ThridSection container mt-5 g-5">
        <div class="row gx-3 container">
            <div data-aos="fade-up" data-aos-delay="100" class="col-s-12 col-lg-4 mt-4"
                style="display: flex;justify-content: center;align-items: center;">
                <div
                    style="overflow: hidden; width: 80%; border-radius: 1rem;display: flex;justify-content: center;align-items: center;">
                    <img src="{{ asset('assets/images/burger-1.png') }}" alt="" width="40%"
                        style="transform: translate(-20%,30%);">
                    <div>
                        <h1 style="font-size: 1.25rem;font-weight: 900;">FOOD</h1>
                        <p>Lorem ipsum dolor sit. </p>
                        <p style="">
                            <btn class="btn btn-danger text-light" data-bs-target="#home"><a  href="{{ route('order.create') }}" target="_blank" class="btn text-light ">Buy Online</a></btn>
                        </p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-s-12 col-lg-4 mt-4"
                style="display: flex;justify-content: center;align-items: center;">
                <div class="bg-danger"
                    style="overflow: hidden; width: 80%; border-radius: 1rem;display: flex;justify-content: center;align-items: center;">
                    <img src="{{ asset('assets/images/snack-1.png') }}" alt="" width="40%"
                        style="transform: translate(-20%,15%);">
                    <div class="bg-danger">
                        <h1 style="font-size: 1.25rem;font-weight: 900;">SNACKS</h1>
                        <p>Lorem ipsum dolor sit.</p>
                        <p style="">
                            <btn class="btn btn-warning" data-bs-target="#home"><a  href="{{ route('order.create') }}" target="_blank" class="btn ">Buy Online</a></btn>
                        </p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="col-s-12 col-lg-4 mt-4"
                style="display: flex;justify-content: center;align-items: center;">
                <div class="bg-success"
                    style="overflow: hidden; width: 80%; border-radius: 1rem;display: flex;justify-content: center;align-items: center;">
                    <img src="{{ asset('assets/images/beverage-2.png') }}" alt="" width="40%"
                        style="transform: translate(-5%,15%);">
                    <div class="bg-success">
                        <h1 style="font-size: 1.25rem;font-weight: 900;">JUICE</h1>
                        <p>Lorem ipsum dolor sit.</p>
                        <p style="">
                            <btn class="btn btn-secondary" data-bs-target="#home"><a  href="{{ route('order.create') }}" target="_blank" class="btn text-light">Buy Online</a></btn>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>

    <div class="section4 mt-5 container text-center">
        <div class="row p-5 mt-5" style="background-color:#010D78 ;" id="changecolor" data-aos="fade-up"
            data-aos-delay="100">

            <div class="images col-sm-12 col-md-3">
                <img src="{{ asset('assets/images/burger-1.png') }}" alt="" width="100%">
            </div>
            <div class="text col-sm-12 col-md-9">
                <h6>Payday Promo</h6>
                <h1>GET A 10% DISCOUNT ON PAYDAY WEEK</h1>
                <p>Crispy Onion Rings, Topped With Semi Dijon Mustard, Creamy Buffalo Sauce, And Cheddar cheese</p>
                <button class="btn btn-warning"><a  href="{{ route('order.create') }}" target="_blank" class="btn text-dark">Buy Online</a></button>
            </div>
        </div>

        <div class="row p-5 mt-5" style="background-color:#010D78 ;" id="changecolor" data-aos="fade-up"
            data-aos-delay="100">

            <div class="images col-sm-12 col-md-3">
                <img src="{{ asset('assets/images/promo-2.png') }}" alt="" width="100%">
            </div>
            <div class="text col-sm-12 col-md-9">
                <h6>Payday Promo</h6>
                <h1>GET A 10% DISCOUNT ON PAYDAY WEEK</h1>
                <p>Crispy Onion Rings, Topped With Semi Dijon Mustard, Creamy Buffalo Sauce, And Cheddar cheese</p>
                <button class="btn btn-warning"><a  href="{{ route('order.create') }}" target="_blank" class="btn text-dark">Buy Online</a></button>
            </div>
        </div>

        <div class="row p-5 mt-5" style="background-color:#010D78 ;" id="changecolor" data-aos="fade-up"
            data-aos-delay="100">

            <div class="images col-sm-12 col-md-3">
                <img src="{{ asset('assets/images/burger-1.png') }}" alt="" width="100%">
            </div>
            <div class="text col-sm-12 col-md-9">
                <h6>Payday Promo</h6>
                <h1>GET A 10% DISCOUNT ON PAYDAY WEEK</h1>
                <p>Crispy Onion Rings, Topped With Semi Dijon Mustard, Creamy Buffalo Sauce, And Cheddar cheese</p>
                <button class="btn btn-warning"><a  href="{{ route('order.create') }}" target="_blank" class="btn text-dark">Buy Online</a></button>
            </div>
        </div>


    </div>


    <div class="category m-5" data-aos="fade-up" data-aos-delay="100" id="menu">
        <h1 class="text-center" style="font-size: 700;font-family: 'Oswald', sans-serif;">OUR BEST MENU</h1>
        <div style="width: 100%;display: flex;justify-content: center;margin-top: 20px;">
            <div style="width: 20%;background-color:#BF9B18 ; height: 2px;"></div>
        </div>
        <div style="display: flex;justify-content: center; margin-top: 50px;">
            <div class="buttonGroup row gap-4">
                <div class="col-s-6 col-md-3">
                    <button class="btn text-white" style="width: 100%;" id="changecolor">All</button>

                </div>
                <div class="col-s-6 col-md-3">
                    <button class="btn text-white " style="width: 100%;" id="changecolor">Food</button>

                </div>
                <div class="col-s-6 col-md-3">
                    <button class="btn text-white" style="width: 100%;" id="changecolor">Snack</button>

                </div>
                <div class="col-s-6 col-md-3">
                    <button class="btn text-white" style="width: 100%;" id="changecolor">Beverage</button>

                </div>
            </div>

        </div>
        <!-- all options -->
        <div class="optionAll mt-5 container" id="option" data-aos="fade-up" data-aos-delay="100">
            <div class="row container">
                <!-- food in all-->

                <div class="row container">




                    {{-- add food here --}}
                    @isset($products[0])
                        @if ($products[0]->typeId == '1')
                            @foreach ($products as $product)
                                <div class="col-s-12 col-md-6 col-lg-4 col-xl-3">
                                    <div class="card" style="background-color: transparent;">
                                        <div class="images"
                                            style="width: 100%; display: flex;justify-content: center;background-color: #010D78;height: 10rem;"
                                            id="changecolor">
                                            <img src="{{ $product->image }}" class="card-img-top" alt="..."
                                                style="margin: auto;width: 30%;">

                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center"
                                                style="font-size: 700;font-family: 'Oswald', sans-serif;color: white;">
                                                {{ $product->title }}
                                            </h1>
                                            <p class="text-white text-center">{{ $product->description }}
                                            </p>
                                            <h4 class="text-warning text-center">${{ $product->price }}</h4>
                                            <div class="centerDiv text-center">
                                                <a class="btn btn-success" href="{{ route('order.create') }}" target="_blank">
                                                    Buy Now
                                                </a>
                                                <?php
                                                    $_SESSION['product_name'] = $product->title; ?>



                                            </div>
                                            @guest
                                                @if (Route::has('register'))
                                                @endif
                                            @else
                                            <div style="display: flex;justify-content:space-between;">
                                                <div class="first">
                                                    <a href="{{ route('addproduct.edit', $product->id) }}"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                                </div>

                                                <div class="second">
                                                    <form action="{{ route('addproduct.destroy', $product->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure to delete {{ $product->title }}?')"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>


                                            @endguest

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endisset





                    {{-- add snacks here --}}

                    @isset($products[0])
                        @if ($products[0]->typeId == '2')
                            @foreach ($products as $product)
                                <div class="col-s-12 col-md-6 col-lg-4 col-xl-3">
                                    <div class="card" style="background-color: transparent;">
                                        <div class="images"
                                            style="width: 100%; display: flex;justify-content: center;background-color: #010D78;height: 10rem;"
                                            id="changecolor">
                                            <img src="{{ $product->image }}" class="card-img-top" alt="..."
                                                style="margin: auto;width: 30%;">

                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center"
                                                style="font-size: 700;font-family: 'Oswald', sans-serif;color: white;">
                                                {{ $product->title }}
                                            </h1>
                                            <p class="text-white text-center">{{ $product->description }}
                                            </p>
                                            <h4 class="text-warning text-center">${{ $product->price }}</h4>
                                            <div class="centerDiv text-center">
                                                <a class="btn btn-success" href="{{ route('order.create') }}" target="_blank">
                                                    Buy Now
                                                </a>
                                                <?php
                                                $_SESSION['product_name'] = $product->title; ?>

                                            </div>
                                            @guest
                                                @if (Route::has('register'))
                                                <li>Hello</li>
                                                @endif
                                            @else
                                            <div style="display: flex;justify-content:space-between;">
                                                <div class="first">
                                                    <a href="{{ route('addproduct.edit', $product->id) }}"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                                </div>

                                                <div class="second">
                                                    <form action="{{ route('addproduct.destroy', $product->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure to delete {{ $product->title }}?')"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>


                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endisset



                    {{-- add beverage here --}}
                    @isset($products[0])
                        @if ($products[0]->typeId == '3')
                            @foreach ($products as $product)
                                <div class="col-s-12 col-md-6 col-lg-4 col-xl-3">
                                    <div class="card" style="background-color: transparent;">
                                        <div class="images"
                                            style="width: 100%; display: flex;justify-content: center;background-color: #010D78;height: 10rem;"
                                            id="changecolor">
                                            <img src="{{ $product->image }}" class="card-img-top" alt="..."
                                                style="margin: auto;width: 30%;">

                                        </div>
                                        <div class="card-body">
                                            <h1 class="text-center"
                                                style="font-size: 700;font-family: 'Oswald', sans-serif;color: white;">
                                                {{ $product->title }}
                                            </h1>
                                            <p class="text-white text-center">{{ $product->description }}
                                            </p>
                                            <h4 class="text-warning text-center">${{ $product->price }}</h4>
                                            <div class="centerDiv text-center">
                                                <a class="btn btn-success" href="{{ route('order.create') }}" target="_blank">
                                                    Buy Now
                                                </a>
                                                <?php
                                                $_SESSION['product_name'] = $product->title; ?>

                                            </div>
                                            @guest
                                                @if (Route::has('register'))
                                                <li>Hello</li>
                                                @endif
                                            @else
                                            <div style="display: flex;justify-content:space-between;">
                                                <div class="first">
                                                    <a href="{{ route('addproduct.edit', $product->id) }}"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                                </div>

                                                <div class="second">
                                                    <form action="{{ route('addproduct.destroy', $product->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')

                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure to delete {{ $product->title }}?')"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </div>


                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    @endisset




                </div>















            </div>
        </div>




        <!-- food only-->
        <div class="food mt-5 container d-none" id="option" data-aos="fade-up">
            <div class="row container">


                {{-- Add Food here --}}
                @isset($products[0])
                    @if ($products[0]->typeId == '1')
                        @foreach ($products as $product)
                            <div class="col-s-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="card" style="background-color: transparent;">
                                    <div class="images"
                                        style="width: 100%; display: flex;justify-content: center;background-color: #010D78;height: 10rem;"
                                        id="changecolor">
                                        <img src="{{ $product->image }}" class="card-img-top" alt="..."
                                            style="margin: auto;width: 30%;">

                                    </div>
                                    <div class="card-body">
                                        <h1 class="text-center"
                                            style="font-size: 700;font-family: 'Oswald', sans-serif;color: white;">
                                            {{ $product->title }}
                                        </h1>
                                        <p class="text-white text-center">{{ $product->description }}
                                        </p>
                                        <h4 class="text-warning text-center">${{ $product->price }}</h4>
                                        <div class="centerDiv text-center">
                                            <a class="btn btn-success" href="{{ route('order.create') }}" target="_blank">
                                                Buy Now
                                            </a>
                                            <?php
                                            $_SESSION['product_name'] = $product->title; ?>

                                        </div>
                                        @guest
                                            @if (Route::has('register'))
                                            <li>Hello</li>
                                            @endif
                                        @else
                                        <div style="display: flex;justify-content:space-between;">
                                            <div class="first">
                                                <a href="{{ route('addproduct.edit', $product->id) }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                            </div>

                                            <div class="second">
                                                <form action="{{ route('addproduct.destroy', $product->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure to delete {{ $product->title }}?')"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>


                                        @endguest
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endisset

            </div>


        </div>

        <!-- snacks only -->
        <div class="food mt-5 container d-none" id="option" data-aos="fade-up">
            <div class="row container">


                {{-- Add Food here --}}
                @isset($products[0])
                    @if ($products[0]->typeId == '1')
                        @foreach ($products as $product)
                            <div class="col-s-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="card" style="background-color: transparent;">
                                    <div class="images"
                                        style="width: 100%; display: flex;justify-content: center;background-color: #010D78;height: 10rem;"
                                        id="changecolor">
                                        <img src="{{ $product->image }}" class="card-img-top" alt="..."
                                            style="margin: auto;width: 30%;">

                                    </div>
                                    <div class="card-body">
                                        <h1 class="text-center"
                                            style="font-size: 700;font-family: 'Oswald', sans-serif;color: white;">
                                            {{ $product->title }}
                                        </h1>
                                        <p class="text-white text-center">{{ $product->description }}
                                        </p>
                                        <h4 class="text-warning text-center">${{ $product->price }}</h4>
                                        <div class="centerDiv text-center">
                                            <a class="btn btn-success" href="{{ route('order.create') }}" target="_blank">
                                                Buy Now
                                            </a>
                                            <?php
                                            $_SESSION['product_name'] = $product->title; ?>

                                        </div>
                                        @guest
                                            @if (Route::has('register'))
                                            <li>Hello</li>
                                            @endif
                                        @else
                                        <div style="display: flex;justify-content:space-between;">
                                            <div class="first">
                                                <a href="{{ route('addproduct.edit', $product->id) }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                            </div>

                                            <div class="second">
                                                <form action="{{ route('addproduct.destroy', $product->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure to delete {{ $product->title }}?')"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>


                                        @endguest
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endisset

            </div>


        </div>
        <!-- beverage only -->
        <div class="food mt-5 container d-none" id="option" data-aos="fade-up">
            <div class="row container">


                {{-- Add Food here --}}
                @isset($products[0])
                    @if ($products[0]->typeId == '1')
                        @foreach ($products as $product)
                            <div class="col-s-12 col-md-6 col-lg-4 col-xl-3">
                                <div class="card" style="background-color: transparent;">
                                    <div class="images"
                                        style="width: 100%; display: flex;justify-content: center;background-color: #010D78;height: 10rem;"
                                        id="changecolor">
                                        <img src="{{ $product->image }}" class="card-img-top" alt="..."
                                            style="margin: auto;width: 30%;">

                                    </div>
                                    <div class="card-body">
                                        <h1 class="text-center"
                                            style="font-size: 700;font-family: 'Oswald', sans-serif;color: white;">
                                            {{ $product->title }}
                                        </h1>
                                        <p class="text-white text-center">{{ $product->description }}
                                        </p>
                                        <h4 class="text-warning text-center">${{ $product->price }}</h4>
                                        <div class="centerDiv text-center">
                                            <a class="btn btn-success" href="{{ route('order.create') }}" target="_blank">
                                                Buy Now
                                            </a>
                                            <?php
                                            $_SESSION['product_name'] = $product->title; ?>

                                        </div>
                                        @guest
                                            @if (Route::has('register'))
                                            <li>Hello</li>
                                            @endif
                                        @else
                                        <div style="display: flex;justify-content:space-between;">
                                            <div class="first">
                                                <a href="{{ route('addproduct.edit', $product->id) }}"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>

                                            </div>

                                            <div class="second">
                                                <form action="{{ route('addproduct.destroy', $product->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure to delete {{ $product->title }}?')"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>


                                        @endguest
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endisset

            </div>


        </div>
    </div>


    <section class="section6 container text-white mt-5" data-aos="fade-up" data-aos-delay="100" id="review">
        <h1 class="text-center" style="font-size: 2.5rem;font-weight: 900;">CUSTOMERS REVIEW</h1>
        <div class="owl-carousel owl-theme mt-5">
            <div class="item" style="background-color: #010D78;" id="changecolor">
                <div class="text text-centerr p-4">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique culpa ut amet voluptas
                        asperiores alias sed consequatur.</p>
                </div>
                <div class="bodyItem" style="display: flex;justify-content: space-between;align-items: center;">
                    <div class="imgAndName ms-2"
                        style="display: flex;justify-content: space-between;align-items: center;width: 40%;">
                        <img src="https://scontent.fcai17-1.fna.fbcdn.net/v/t39.30808-6/294913322_3310887052490759_3009747604475150080_n.jpg?_nc_cat=105&cb=99be929b-b574a898&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=Oz-dAy8Dx8MAX-nQ83H&_nc_ht=scontent.fcai17-1.fna&oh=00_AfBJ8ZwoWgV94QD0E9xIyXC6qLIZ4-4CcWNmyLh6JldsiA&oe=659625E8"
                            alt="" style="width: 30%;border-radius: 50%;">
                        <div class="name ps-4">
                            <h4>Ali Nasser</h4>
                            <p class="text-secondary">Back-End developer</p>
                        </div>
                    </div>
                    <div class="icons" style="width: 60%;">
                        <i class="fa-solid fa-quote-right text-warning"
                            style="font-size: 7rem;float: right;margin-right: 1rem;"></i>
                    </div>
                </div>
            </div>
            <div class="item" style="background-color: #010D78;" id="changecolor">
                <div class="text text-centerr p-4">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique culpa ut amet voluptas
                        asperiores alias sed consequatur.</p>
                </div>
                <div class="bodyItem" style="display: flex;justify-content: space-between;align-items: center;">
                    <div class="imgAndName ms-2"
                        style="display: flex;justify-content: space-between;align-items: center;width: 40%;">
                        <img src="https://darling-fairy-5f60d0.netlify.app/img/review-3.jpg" alt=""
                            style="width: 30%;border-radius: 50%;">
                        <div class="name ps-4">
                            <h4>Mostafa Osama</h4>
                            <p class="text-secondary">Full Stack</p>
                        </div>
                    </div>
                    <div class="icons" style="width: 60%;">
                        <i class="fa-solid fa-quote-right text-warning" style="font-size: 7rem;float: right;"></i>
                    </div>
                </div>
            </div>
            <div class="item" style="background-color: #010D78;" id="changecolor">
                <div class="text text-centerr p-4">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique culpa ut amet voluptas
                        asperiores alias sed consequatur.</p>
                </div>
                <div class="bodyItem" style="display: flex;justify-content: space-between;align-items: center;">
                    <div class="imgAndName ms-2"
                        style="display: flex;justify-content: space-between;align-items: center;width: 40%;">
                        <img src="https://scontent.fcai17-1.fna.fbcdn.net/v/t39.30808-6/401623119_1502337957253450_5305609511787253114_n.jpg?_nc_cat=108&cb=99be929b-b574a898&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=W6-ijIiWuDUAX8wxyQ2&_nc_ht=scontent.fcai17-1.fna&oh=00_AfBXwJ30UUdAoLVwaB0vLFhPkXkGkRXELetE5VbKzRraxg&oe=6595884E"
                            alt="" style="width: 30%;border-radius: 50%;">
                        <div class="name ps-4">
                            <h4>Abdurrahman Abdelhameed</h4>
                            <p class="text-secondary">Front-End developer</p>
                        </div>
                    </div>
                    <div class="icons" style="width: 60%;">
                        <i class="fa-solid fa-quote-right text-warning" style="font-size: 7rem;float: right;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section7 container  mb-5" style="background-color:#ffc107;margin-top: 3rem;" data-aos="fade-up">
        <div class="row container">
            <div class="col-s-12 col-md-6 p-3 mt-4">
                <h1 class="text-dark mt-3"
                    style="font-size: 2.25rem;font-weight: 900;font-family: Oswald, sans-serif;">GET EXCLUSIVE UPDATE
                </h1>
                <p>to keep on</p>
            </div>
            <div class="col-s-12 col-md-6 mt-5">
                <div class="form-group row contanier">
                    <div class="col-s-12 col-md-7 mt-3">
                        <input class="form-control" type="email" placeholder="user@gmail.com"
                            aria-label="default input example" id="email">
                        <p id="result" class="fs-5"></p>
                    </div>
                    <div class="col-s-12 col-md-5 mt-3 mb-3">
                        <button class="btn btn-dark text-white w-100" id="validationBtnEmail" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa-solid fa-paper-plane"></i>
                            <i>Subscribe</i>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- my modal -->



    <!-- Modal -->
    <section id="idSec">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content bg-dark">
                    <div class="modal-body">
                        <div class="images" style="width: 100%;display: flex;justify-content: center;">
                            <img src="https://gifdb.com/images/high/animated-transparent-background-check-mark-lb1gygckicpca0fb.gif"
                                alt="" width="25%" style="border-radius: 50%;">
                        </div>
                        <div class="text-center mt-5">
                            <p class="text-warning">Welcome, You have joined successfully
                                <i class="fa-solid fa-check ms-2 fs-3"></i>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--



    SUPPORT
FAQ's
Privacy Policy
Term & Condition
Contact
   -->


    <!-- FOOTER -->

    <footer class="container mt-5" data-aos="fade-up" id="contact">
        <!-- Footer Start -->
        <div class="container bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
            <div class="row pt-5">
                <div class="col-lg-7 col-md-12">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch
                            </h5>
                            <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                            <div class="d-flex justify-content-start mt-4">
                                <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-outline-light btn-square" href="#"><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web
                                    Design</a>
                                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps
                                    Design</a>
                                <a class="text-white mb-2" href="#"><i
                                        class="fa fa-angle-right mr-2"></i>Marketing</a>
                                <a class="text-white mb-2" href="#"><i
                                        class="fa fa-angle-right mr-2"></i>Research</a>
                                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mb-5">
                    <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                    <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor.
                        Accu kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>

                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
            style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="row">
                <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                    <p class="m-0 text-white">&copy; <a href="#">Domain Name</a>. All Rights Reserved.
                    </p>
                </div>
                <div class="col-lg-6 text-center text-md-right">
                    <ul class="nav d-inline-flex">
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="#">Privacy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="#">Terms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="#">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white py-0" href="#">Help</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Footer End -->




    </footer>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>


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


    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                responsiveClass: true,
                smartSpeed: 500,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    1200: {
                        items: 2
                    },
                    2000: {
                        items: 3
                    }
                }
            });
        });
    </script>
</body>

</html>
