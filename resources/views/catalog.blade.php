@extends('header')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>
@section('content')
<div class="container mx-auto mt-4">
    <div class="row">
      @foreach ($products as $product)
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">{{$product->price}}</p>
            <a href="#" class="btn btn-primary">В корзину</a>
          </div>
        </div>
     </div>
      @endforeach
    </div>
 </div>
@endsection