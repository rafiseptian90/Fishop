@extends('layouts.app')

@section('content')
     <div class="container">
        <div class="row brand">
            <div class="col-12 text-center">
                <img src="{{ asset('assets/logo-fi.png') }}" alt="">
            </div>
        </div>
            <div class="row filtering mb-4" style="margin-top: 8%;">
                    <div class="col-md-12 col-12">
                            <div class="row">
                                <form action="{{ route('product') }}" method="get" class="form-inline" style="padding: 0;">
                                    <div class="col-md-10 col-10">
                                        <input type="text" name="search" id="search" class="form-control" placeholder="Search Product or Category" style="width:100%">
                                    </div>
                                    <div class="col-md-2 col-2">
                                        <button class="btn btn-primary btn-search">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                    </div>

                    {{-- <div class="col-md-6 col-6">
                            <div class="form-group" style="float:right;">
                                <select id="category" class="form-control" name="category">
                                    <option selected value="{{ null }}">All</option>
                                    @foreach (\App\Category::all() as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div> --}}
            </div>

        <div class="row list-products">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row img-product">
                                        <div class="col-12">
                                            <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}">
                                        </div>
                                </div>
                                <div class="row desc">
                                    <div class="col-md-6 col-6">
                                            <h3 class="name-product">{{ $product->name }}</h3>
                                            <span class="category">{{ $product->category->name }}</span>
                                    </div>
                                    <div class="col-md-6 col-6 text-right">
                                            <p class="price">Rp.{{ number_format($product->price) }}</p>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
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
                </div>
            @endforeach
        </div>
     </div>
@endsection

@push('script')
     <script>
          $('.navbar').addClass('bg-dark');
     </script>
@endpush