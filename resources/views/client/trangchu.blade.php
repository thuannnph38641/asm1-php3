@extends('client.layouts.master')
@section('slider3')
  @include('client.components.slider')  
@endsection
@section('content')
<div class="container-fluid offer pt-5">
    <div class="row px-xl-5">
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                <img src="img/offer-1.png" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Spring Collection</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 pb-4">
            <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                <img src="img/offer-2.png" alt="">
                <div class="position-relative" style="z-index: 1;">
                    <h5 class="text-uppercase text-primary mb-3">20% off the all order</h5>
                    <h1 class="mb-4 font-weight-semi-bold">Winter Collection</h1>
                    <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Trendy Products</span></h2>
    </div>
    
    <div class="row px-xl-5 pb-3">
        @foreach ($products as $item)
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="/img/product-1.jpg" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{$item->name}}</h6>
                    <div class="d-flex justify-content-center">
                        <h6>{{$item->price_regular}}$</h6><h6 class="text-muted ml-2"><del>{{$item->price_sale}}$</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="{{ route('detailProduct', ['category_id' => $item->category_id, 'id' => $item->id, 'slug' =>$item->slug]) }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
   
    
</div>
@endsection