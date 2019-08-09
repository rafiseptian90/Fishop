@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid jb-hero">
        <a href="{{ route('product') }}">
            <button class="btn-jb-start">
                <i class="fas fa-search"></i> Lihat Produk
            </button>
        </a>
    <div class="container">
        
        <div class="row">
            <div class="col-md-6 col-12">
                <h1 class="hero-text">
                    Permudah Pekerjaanmu Dengan Menggunakan Teknologi Software
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <h4 class="hero-text">
                    
                </h4>
            </div>
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

            <div class="row list-products owl-carousel">
                @foreach (\App\Product::orderBy('sold_out', 'desc')->limit(4)->get() as $product)
                        <div class="card ml-4 mb-4">
                            <div class="card-body">
                                <div class="row img-product">
                                    <div class="col-12">
                                        <img src="{{ asset('storage/' . $product->photo) }}" alt="">
                                    </div>
                                </div>
                                <div class="row desc">
                                    <div class="col-md-6 col-6">
                                        <h3 class="name-product">{{ $product->name }}</h3>
                                        <span class="category">{{ $product->category->name }}</span>
                                    </div>
                                    <div class="col-md-6 col-6 text-right">
                                        <p class="price">Rp.{{ number_format($product->price) }}</p>
                                        <i class="fas fa-star"></i> {{ str_limit($product->rating, 3, '') }}
                                    </div>
                                </div>
                                <div class="row" style="margin-top:10px;">
                                    <div class="col-12">
                                        <a href="{{ route('cart.store') }}" class="btn btn-primary" id="buy" data-id="{{ $product->id }}">
                                            <i class="fas fa-shopping-cart"></i> Buy
                                        </a>

                                        <a href="{{ route('view.product', $product->id) }}" class="btn btn-secondary" id="view" style="margin-left:3px;">
                                            <i class="fas fa-eye"></i> View
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
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

        const options = {
            strings: ["Menyediakan berbagai produk software berkualitas", "Dibuat Oleh Para Programmer Professional"],
            typeSpeed: 40,
            loop: true,
            backDelay: 2000,
            showCursor: false,
            fadeOut: true,
        }

        new Typed('h4.hero-text', options);

        $('.owl-carousel').owlCarousel({
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause:true,
            items: 3,
            loop: true,
            responsive : {
            // breakpoint from 0 up
                0 : {
                    items : 1,
                },
                // breakpoint from 480 up
                480 : {
                    items: 2,
                },
                768 : {
                    items: 3,
                }
            }
        });
    </script>
@endpush