@extends('layouts.app')

@section('content')
     <div class="container">
        <div class="row brand">
            <div class="col-12 text-center">
                <img src="{{ asset('assets/logo-fi.png') }}" alt="">
            </div>
        </div>
          <div class="row filtering mt-4">
               <div class="col-md-10 col-12 search mt-5">
                    <form action="#" method="get" class="form-inline">
                        <div class="row">
                            <div class="col-md-10 col-10">
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search Product">
                            </div>
                            <div class="col-md-2 col-2">
                                <button class="btn btn-primary btn-search">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
               </div>

               <div class="col-md-2 col-sm-4 category mt-5">
                    <div class="form-group">
                         <select id="category" class="form-control" name="category">
                              <option selected value="{{ null }}">All</option>
                              <option>Web</option>
                              <option>Android</option>
                              <option>Desktop</option>
                         </select>
                    </div>
               </div>
          </div>

          <div class="row list-products">
               <div class="col-md-4 mb-3">
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

               <div class="col-md-4 mb-3">
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
                <div class="col-md-4 mb-3">
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
               <div class="col-md-4 mb-3">
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

               <div class="col-md-4 mb-3">
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
                <div class="col-md-4 mb-3">
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
               <div class="col-md-4 mb-3">
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

               <div class="col-md-4 mb-3">
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
                <div class="col-md-4 mb-3">
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
@endsection

@push('script')
     <script>
          $('.navbar').addClass('bg-dark');
     </script>
@endpush