@extends('layouts.app')

@section('content')
     <div class="container">
          <div class="row">
               <div class="col-12">
                    <div class="card mt-5 mb-5">
                         <div class="card-body">
                              <div class="row">
                                   <div class="col-sm-6 col-12 mb-1">
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
                                        <h3>Rating:</h3>
                                        <p>
                                             @if ($product->rating === 0)
                                                  Belum ada rating dari pembeli
                                             @endif
                                                  <i class="fas fa-star"></i> {{ $product->rating }} dari {{ count($product->purchase->where('rate', '!=', null)) }} pembeli
                                        </p>
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

          <div class="row review-product">
               <div class="col-12">
                    <h2>Review</h2>
                    <hr>
                    @if ($product->purchase->where('rate', '!=', null)->first())
                         @foreach ($comments as $comment)
                              <h3 class="username">{{ $comment->user->name }}</h3>
                              <?php
                                   for ($i=1; $i <= $comment->rate; $i++) { 
                                        echo '<i class="fas fa-star"></i>';
                                   }
                              ?>
                              <p class="review-text">{{ $comment->review }}</p>
                         @endforeach
                    @else 
                    <p style="font-size: 18px; font-family: 'Lato';">Belum ada review</p>
                    @endif
                    
                    @if ($purchase)
                         @if ($purchase->rate === null)
                              <form action="{{ route('purchase.review', $product->id) }}" method="post" id="form-review" class="col-lg-5 col-12">
                                   {{ csrf_field() }}
                                   {{ method_field('PUT') }}
                                   <div class="row">
                                        <div class="col-12">
                                             <div class="row">
                                                  <div class="col-12">
                                                       <p>Berikan Skor</p>
                                                  </div>
                                             </div>
                                             <div class="row section-rating">
                                                  <div class="col-12">
                                                       <div class="rating">
                                                            <input type="radio" name="rate" id="review5" value="5"><label for="review5" class="star"></label>
                                                            <input type="radio" name="rate" id="review4" value="4"><label for="review4" class="star"></label>
                                                            <input type="radio" name="rate" id="review3" value="3"><label for="review3" class="star"></label>
                                                            <input type="radio" name="rate" id="review2" value="2"><label for="review2" class="star"></label>
                                                            <input type="radio" name="rate" id="review1" value="1"><label for="review1" class="star"></label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row">
                                        <div class="col-12">
                                             <div class="form-group">
                                                  <label for="review">Tulis Tanggapan mu</label>
                                                  <textarea id="review" class="form-control" name="review" rows="4"></textarea>
                                             </div>
                                             <div class="button">
                                                  <button class="btn btn-primary">Kirim</button>
                                             </div>
                                        </div>
                                   </div>
                              </form>
                         @endif
                    @endif
               </div>
          </div>
     </div>
@endsection