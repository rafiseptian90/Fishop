@extends('layouts.app')

@section('content')
     @if(\App\Purchase::where('user_id', auth()->user()->id)->first())
     <section id="purchase">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-md-6 col-12">
                         <div class="card">
                              <div class="card-body">
                                   <div class="card-title">
                                        <h3>My History</h3>
                                   </div>
                                   <table class="table table-hover table-responsive" style="width:100%">
                                        <thead>
                                             <th>No</th>
                                             <th>Nama Produk</th>
                                             <th>Tanggal Pembelian</th>
                                             <th>Status</th>
                                             <th>Aksi</th>
                                        </thead>

                                        <tbody>
                                             @foreach ($purchases as $purchase)
                                                  <tr>
                                                       <td>{{ $loop->index + 1 }}</td>
                                                       <td>{{ $purchase->product->name }}</td>
                                                       <td>{{ $purchase->created_at->format('d-m-Y') }}</td>
                                                       <td>{{ $purchase->status }}</td>
                                                       <td>
                                                            <a href="{{ route('view.product', $purchase->product_id) }}" class="btn btn-primary">
                                                                 <i class="fas fa-eye"></i> View
                                                            </a>
                                                       </td>
                                                  </tr>
                                             @endforeach    
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     @else
          <div class="container">
               <div class="row mt-5">
                    <div class="col-12">
                         <div class="no-history">
                              <i class="fas fa-exclamation-circle fa-5x mb-2"></i>
                              <h3>Oops... You not have history<br>try to buy something</h3>
                         </div>
                    </div>
               </div>
          </div>
     @endif
@endsection