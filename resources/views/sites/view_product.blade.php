@extends('layouts.app')

@section('content')
     <div class="container">
          <div class="row">
               <div class="col-12">
                    <div class="card mt-5 mb-5">
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-sm-6 col-12">
                                        <img src="{{ asset('storage/' . $product->photo) }}" alt="{{ $product->name }}" style="width:100%; height:350px">
                                   </div>

                                   <div class="col-sm-6 col-12 description">
                                        <h1 class="product-name">{{ $product->name }}</h1>
                                        <h3>Kategori:</h3>
                                        <p>{{ $product->category->name }}</p>
                                        <h3>Deskripsi:</h3>
                                        <p>{!! $product->description !!}</p>
                                        <h3>Harga:</h3>
                                        <p>Rp.{{ number_format($product->price) }}</p>
                                        <h3>Terjual:</h3>
                                        <p>{{ $product->sold_out }}</p>
                                        <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                             <i class="fas fa-angle-left"></i> Back
                                        </a>
                                        <a href="{{ route('cart.store') }}" class="btn btn-primary" id="buy" data-id="{{ $product->id }}">
                                             <i class="fas fa-shopping-cart"></i> Buy
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
@endsection