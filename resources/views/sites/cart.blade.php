@extends('layouts.app')

@section('content')
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
                                             <th style="min-width:18%">Nama Software</th>
                                             <th>Deksripsi</th>
                                             <th>Jumlah</th>
                                             <th>Harga</th>
                                        </thead>

                                        <tbody>
                                             <td>Point Of Sales</td>
                                             <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, nostrum doloremque, omnis libero deleniti repellat voluptates natus qui optio.</td>
                                             <td>1</td>
                                             <td>IDR.1.200.000</td>
                                             <td>
                                                  <a href="#" class="remove-cart">
                                                       <i class="fas fa-times"></i>
                                                  </a>
                                             </td>
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
                                             <td class="cart-total-title">Subtotal</td>
                                             <td class="cart-total-body">IDR.1.200.000</td>
                                        </tr>
                                        <tr>
                                             <td class="cart-total-title">Total</td>
                                             <td class="cart-total-body">IDR.1.200.000</td>
                                        </tr>
                                   </table>
                                   <a href="#">
                                        <button class="btn-checkout">
                                             <i class="far fa-money-bill-alt"></i> Checkout
                                        </button>
                                   </a>

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
@endsection