@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid jb-hero">
        <div class="container">
            <div class="row justify-content-center wow fadeInLeft" data-wow-duration="2s">
                <img src="{{ asset('assets/logo-fi.png') }}" alt="" class="hero-img">
            </div>
            <div class="row justify-content-center hero-text mt-3">
                <h2 class="hero-text-title wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s">
                    Menyediakan Berbagai Jenis Produk Software
                </h2>
            </div>
        </div>
    </div>

    <section id="features">
        <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body list-features text-center">
                                <div class="row">
                                    <div class="col-md-4">
                                        <i class="fas fa-globe fa-5x"></i>
                                        <h1 class="list-feature-title">Web</h1>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fab fa-android fa-5x"></i>
                                        <h1 class="list-feature-title">Android</h1>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fas fa-desktop fa-5x"></i>
                                        <h1 class="list-feature-title">Desktop</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="example-products">
        <div class="container">
            <div class="row heading">
                <div class="col-md-6 col-8">
                    <h2 class="sub-heading">
                        Most Popular On This Week
                    </h2>
                </div>
                <div class="col-md-6 col-4">
                    <a href="{{ route('product') }}" class="link-all-product">
                        <i class="fas fa-grip-horizontal"></i> Show All
                    </a>
                </div>
            </div>

            <div class="row list-products wow flipInY" data-wow-duration="2s">
                <div class="col-md-4 col-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row img-product">
                                <div class="col-12">
                                    <img src="{{ asset('assets/1.png') }}" alt="">
                                </div>
                            </div>
                            <div class="row desc">
                                <div class="col-md-6 col-6">
                                    <h3 class="name-product">Point Of Sales</h3>
                                    <span class="category">Web</span>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <p class="price">IDR.1.200.000</p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row img-product">
                                <div class="col-12">
                                    <img src="{{ asset('assets/2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="row desc">
                                <div class="col-md-6 col-6">
                                    <h3 class="name-product">Attedance Student</h3>
                                    <span class="category">Android</span>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <p class="price">IDR.1.500.000</p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row img-product">
                                <div class="col-12">
                                    <img src="{{ asset('assets/3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="row desc">
                                <div class="col-md-6 col-6">
                                    <h3 class="name-product">Library</h3>
                                    <span class="category">Dekstop</span>
                                </div>
                                <div class="col-md-6 col-6 text-right">
                                    <p class="price">IDR.1.000.000</p>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="greeting">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p class="text-greet">
                        Welcome to the very best in globally sourced premium goods. We offer free shipping, free returns and a secure shopping experience.
                    </p>
                    <a href="{{ route('product') }}">
                        <button class="btn-start">
                            Start Shopping
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        new WOW().init();
    </script>
@endpush