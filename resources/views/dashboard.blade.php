{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.base')
@section('content')
    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Découvrez des Vins d'Exception</h1>
                        <p class="mb-4">Plongez dans un univers où chaque gorgée raconte une histoire. Explorez notre sélection minutieuse de vins, soigneusement choisis pour leur qualité et leur caractère unique.</p>
                        <p>
                            <a href="/boutique" class="btn btn-secondary me-2">Explorer notre Boutique</a>
                            <a href="/decouvrir" class="btn btn-white-outline">En savoir plus</a>
                        </p>
                    </div>
                    
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{asset('images/wine-150955_1280.png')}}" class="img-fluid" style="height: 600px; margin-left: 200px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Hero Section -->
<!-- Start Product Section -->
<div class="product-section">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">Vous pourez certainement aimez ceci !</h2>
                <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
                <p><a href="shop.html" class="btn">Explore</a></p>
            </div> 
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{asset('images/wine-150955_1280.png')}}" class="img-fluid product-thumbnail" style="height: 400px;">
                    <h3 class="product-title">Nordic Chair</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div> 
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="images/product-2.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Kruzo Aero Chair</h3>
                    <strong class="product-price">$78.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="images/product-3.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Ergonomic Chair</h3>
                    <strong class="product-price">$43.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 4 -->
            <!-- Start Column 1 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{asset('images/wine-150955_1280.png')}}" class="img-fluid product-thumbnail" style="height: 400px;">
                    <h3 class="product-title">Nordic Chair</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div> 
            <!-- End Column 1 -->
            <!-- Start Column 2 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="{{asset('images/wine-150955_1280.png')}}" class="img-fluid product-thumbnail" style="height: 400px;">
                    <h3 class="product-title">Nordic Chair</h3>
                    <strong class="product-price">$50.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div> 
            <!-- End Column 2 -->

            <!-- Start Column 3 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="images/product-2.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Kruzo Aero Chair</h3>
                    <strong class="product-price">$78.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 3 -->

            <!-- Start Column 4 -->
            <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                <a class="product-item" href="cart.html">
                    <img src="images/product-3.png" class="img-fluid product-thumbnail">
                    <h3 class="product-title">Ergonomic Chair</h3>
                    <strong class="product-price">$43.00</strong>

                    <span class="icon-cross">
                        <img src="images/cross.svg" class="img-fluid">
                    </span>
                </a>
            </div>
            <!-- End Column 4 -->

        </div>
    </div>
</div>
<div class="product-section">
    <div class="container">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            @foreach ($types as $type)
                <li class="nav-item" role="presentation">
                    <button class="nav-link mx-3 @if($loop->first) active @endif" id="pills-tab-{{ $type->id }}" data-bs-toggle="pill" data-bs-target="#pills-content-{{ $type->id }}" type="button" role="tab" aria-controls="pills-content-{{ $type->id }}" aria-selected="true">
                        {{ $type->name }}
                    </button>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="pills-tabContent">
            @foreach ($types as $type)
                <div class="tab-pane fade @if($loop->first) show active @endif" id="pills-content-{{ $type->id }}" role="tabpanel" aria-labelledby="pills-tab-{{ $type->id }}">
                    <div class="row">
                        @if ($type->wines)
                        @foreach ($type->wines as $wine)
                        <!-- Start Column 2 -->
                        <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                            <a class="product-item" href="cart.html">
                                <img src="{{ asset('images/wine-150955_1280.png') }}" class="img-fluid product-thumbnail" style="height: 400px;">
                                <h3 class="product-title">{{ $wine->name }}</h3>
                                <strong class="product-price">$ {{ $wine->price }}</strong>
                                <span class="icon-cross">
                                    <img src="{{ asset('images/cross.svg') }}" class="img-fluid">
                                </span>
                            </a>
                        </div> 
                    @endforeach
                        @endif
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
