@extends('header')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>
@section('content')
<div class="container mx-auto mt-4">
    <div class="row">
      <div class="cart-group" style="display: flex;">
      @foreach ($products as $product)
      <form action="{{ route('basket.add', ['id' => $product->id]) }}" method="post" class="form-inline">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="{{$product->picture}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">{{$product->price}}</p>
              <button type="submit" class="btn btn-success">Добавить в корзину</button>
            </div>
          </div>
        </div>
      </form>
      @endforeach
    </div>
 </div>
@endsection