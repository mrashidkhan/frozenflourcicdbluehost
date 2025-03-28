@extends('front.layout.layout')

@section('slider')
    @if (session('success'))
        <div class="alert alert-success"
            style="color:#d4edda ; background-color: black; border: 1px solid #c3e6cb; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger"
            style="color: white; background-color: black; border: 1px solid #f5c6cb; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            <ul style="list-style-type: none; padding-left: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 4"></button>
        </div>
        <div class="container-fluid p-0" >
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img id="carousel-img-0" src="img/frozenflour-caraousel3.png" class="d-block w-100" alt="..."
                        style="max-width: 100%; height: auto;margin-top: 70px;">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img id="carousel-img-1" src="img/caraousel-barlay-paratha2.png" class="d-block w-100" alt="..."
                        style="max-width: 100%; height: auto;margin-top: 100px;">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img id="carousel-img-2" src="img/caraousel-Barley-kachori.png" class="d-block w-100" alt="..."
                    style="max-width: 100%; height: auto;margin-top: 100px;">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img id="carousel-img-3" src="img/caraousel-wheat-paratha.png" class="d-block w-100" alt="..."
                        style="max-width: 100%; height: auto;margin-top: 110px;">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img id="carousel-img-4" src="img/caraousel-wheat-paratha5.png" class="d-block w-100" alt="..."
                        style="max-width: 100%; height: auto;margin-top: 110px;">
                </div>
            </div>
        </div>

        <style>
            /* Make images responsive */
            #carousel-img-0,
            #carousel-img-1,
            #carousel-img-2,
            #carousel-img-3,
            #carousel-img-4
             {
                max-width: 100%;
                height: auto;
            }

            /* Adjust the carousel inner margin-top based on screen size */
            @media (max-width: 768px) {
                .carousel-inner {
                    margin-top: 50px;
                    /* Increased margin-top for small screens */
                }

                #carousel-img-1,
                #carousel-img-2,
                #carousel-img-3,
                #carousel-img-4 {
                    height: 250px;
                    /* Adjust image height for mobile */
                }
            }

            @media (min-width: 769px) and (max-width: 992px) {
                .carousel-inner {
                    margin-top: 70px;
                    /* Adjust margin-top for tablets */
                }

                #carousel-img-1,
                #carousel-img-2,
                #carousel-img-3,
                #carousel-img-4 {
                    height: 350px;
                    /* Adjust image height for tablets */
                }
            }

            @media (min-width: 993px) {
                .carousel-inner {
                    margin-top: 0;
                    /* No extra margin for large screens */
                }

                #carousel-img-1,
                #carousel-img-2,
                #carousel-img-3,
                #carousel-img-4 {
                    height: 500px;
                    /* Adjust image height for larger screens */
                }
            }
        </style>
        <script>
            // No additional JavaScript required for responsive behavior
        </script>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@section('content')
    <!-- Blog Start -->
    <div class="container-xl py-5" style="margin-top: 5px;"> <!-- Adjusted top margin -->
        <div class="section-header text-center mx-auto mb-5 mt-100 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 style="color: #7F0000" class="display-6 mb-2 "><i>Featured Products</i></h1>
        </div>

        @php $i = 0; @endphp
        @foreach ($products->chunk(4) as $productChunk)
    <div class="row g-4 mb-4 @if ($i == 0) active @endif">
        @php $i = 1; @endphp
        @foreach ($productChunk as $value)
            <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
                <a href="{{ route('productview', $value->id) }}">
                    @php
                        // Get the first image URL for the product
                        $firstImage = $value->images->first(); // Assuming 'images' is the relationship name
                    @endphp
                    <img class="img-fluid" src="{{ asset('uploads/' . ($firstImage ? $firstImage->image_url : 'default-image.jpg')) }}" alt=""
                        style="width: 100%; height: 200px; object-fit: cover;">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4"
                            href="{{ route('productview', $value->id) }}">{{ $value->product_name }}</a>
                        <i class="fa fa-tag text-primary me-2"></i><small class="text-dark">Rs.
                            {{ number_format($value->base_price) }} ( {{ number_format($value->weight) }} pieces )</small>
                        <div class="text-muted border-top pt-4">
                            <div class="d-flex border-top">
                                <small class="w-50 text-center border-end py-2">
                                    <a class="text-body" href="{{ route('cart.view') }}">
                                        <i class="fa fa-eye text-secondary me-2"></i>View Cart
                                    </a>
                                </small>
                                <small class="w-50 text-center py-2">
                                    <a class="text-body" href="{{ route('productview', $value->id) }}">
                                        <i class="fa fa-shopping-bag text-secondary me-2"></i>Shop Now
                                    </a>
                                </small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endforeach

        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
            {{-- <a class="btn btn-primary rounded-pill py-3 px-5" href="#">Load More</a> --}}
            <a class="btn rounded-pill py-3 px-5" href="{{ route('shop') }}" style="background-color: #7F0000; color: #fff; border: none;">
                Browse More Products
            </a>
        </div>
    </div>
    <!-- Blog End -->
@endsection

@section('navbar')
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Brand</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
@endsection
