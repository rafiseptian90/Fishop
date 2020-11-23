@extends('layouts.app')

@section('content')
     <section id="carts">

          @if (Cookie::get('cart'))
               <div class="container">
                    <div class="row cart-header mt-4">
                         <div class="col-md-12">
                              <h1 class="cart-title">
                                   <i class="fas fa-shopping-cart"></i> Cart
                              </h1>
                         </div>
                    </div>
               </div>

          <div class="list-cart">
               <div class="container">
                    <div class="row">
                         <div class="col-md-9">
                              <div class="row">
                                   <div class="col-md-12">
                                        <h2 class="cart-text">
                                             Your Selection
                                        </h2>
                                   </div>
                              </div>
                              <div class="row cart-table">
                                   <div class="col-md-12">
                                        <table class="table table-hover table-responsive">
                                             <thead>
                                                  <th>No</th>
                                                  <th>Images</th>
                                                  <th style="min-width:18%">Software Name</th>
                                                  <th>Descrption</th>
                                                  <th>Price</th>
                                                  <th>Delete</th>
                                             </thead>

                                             <tbody>
                                                  <?php $subtotal = 0; $no = 1 ?>
                                                  @foreach (json_decode(Cookie::get('cart')) as $id => $product)
                                                  <?php $subtotal+=\App\Product::find($product)->price; ?>
                                                       <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>
                                                                 <img src="{{ asset('storage/' . \App\Product::find($product)->photo) }}" alt="" width="100px" height="100px">
                                                            </td>
                                                            <td>{{ \App\Product::find($product)->name }}</td>
                                                            <td>{!! \App\Product::find($product)->description !!}</td>
                                                            <td>Rp.{{ number_format(\App\Product::find($product)->price) }}</td>
                                                            <td>
                                                                 <a href="{{ route('cart.cancel') }}" class="remove-cart" data-id="{{ $id }}">
                                                                      <i class="fas fa-times"></i>
                                                                 </a>
                                                            </td>
                                                       </tr>
                                                  @endforeach
                                             </tbody>
                                        </table>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-3 col-sm-12">
                              <div class="row">
                                   <div class="col-12">
                                        <h2 class="cart-text">
                                             Cart Total
                                        </h2>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-12">
                                        <table class="table table-hover table-responsive" style="width: 100%;">
                                             <tr>
                                                  <td class="cart-total-title">Total :</td>
                                                  <td class="cart-total-body">Rp.{{ number_format($subtotal) }}</td>
                                             </tr>
                                             {{-- <tr>
                                                  <td class="cart-total-title">Total</td>
                                                  <td class="cart-total-body">IDR.1.200.000</td>
                                             </tr> --}}
                                        </table>

                                        <form method="post" action="{{ route('purchase.store') }}" enctype="multipart/form-data">
                                             {{ csrf_field() }}
                                             <div class="form-group">
                                                  <label for="payment_id">Pilih Pembayaran</label>
                                                  <select id="payment_id" class="form-control" name="payment_id">
                                                       @foreach (\App\Payment::all() as $payment)
                                                            <option value="{{ $payment->id }}">{{ $payment->name }}</option>
                                                       @endforeach
                                                  </select>
                                             </div>
                                             <div class="form-group">
                                                  <label for="proof">Bukti Pembayaran</label>
                                                  <input id="proof" class="form-control-file @error('proof') is-invalid @enderror" type="file" name="proof">
                                                  @error('proof')
                                                       <span class="invalid-feedback" role="alert">
                                                            <div class="alert alert-danger">
                                                                 <strong>{{ $message }}</strong>
                                                            </div>
                                                       </span>
                                                  @enderror
                                             </div>

                                             <button type="submit" class="btn-checkout">
                                                  <i class="far fa-money-bill-alt"></i> Checkout
                                             </button>
                                        </form>

                                        <br>

                                        <a href="#" class="continue-shop">
                                             Continue Shopping
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          @else
               <div class="no-cart">
                    <i class="far fa-frown fa-5x mb-3"></i>
                    <h3>
                         You not have a cart
                    </h3>
               </div>
          @endif
     </section>
@endsection
