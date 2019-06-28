@extends('layouts.app')

@section('content')
     <section id="purchase">
          <div class="container">
               <div class="row">
                    <div class="col-12">
                         <div class="card">
                              <div class="card-body">
                                   <div class="card-title">
                                        <h1>My History</h1>
                                   </div>
                                   <table class="table table-hover table-reponsive">
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
                                                            <button class="btn btn-danger">Delete</button>
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
@endsection