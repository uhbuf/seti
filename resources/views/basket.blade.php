@extends('header')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
@section('content')
<body>
    <section class="h-100 h-custom" style="background-color: #6c757d;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-8">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">
                          <h1 class="fw-bold mb-0 text-black">Корзина</h1>
                        </div>
                        @php
                         $countProduct=0;
                         $finishPrice=0
                        @endphp
                        @foreach ($products as $product)
                        @php
                            $finishPrice+=$product->pivot->quantity*$product->price;
                            $countProduct+=$product->pivot->quantity;
                        @endphp
                        <hr class="my-4">
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                              src="{{$product->picture}}"
                              class="img-fluid rounded-3" alt="Cotton T-shirt">
                          </div>
                          <<div class="col-md-3 col-lg-3 col-xl-3">
                            {{-- <h6 class="text-muted">Shirt</h6> --}}
                            <h6 class="text-black mb-0">{{$product->name}}</h6>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <form action="{{ route('basket.minus', ['id' => $product->id]) }}" method="post" class="d-inline">
                              <button type="submit" class="m-0 p-0 border-0 bg-transparent">
                                  <i class="fas fa-minus-square"></i>
                              </button>
                            </form>
                            <span class="mx-1">{{$product->pivot->quantity}}</span>
                            <form action="{{ route('basket.plus', ['id' => $product->id]) }}" method="post" class="d-inline">
                              <button type="submit" class="m-0 p-0 border-0 bg-transparent">
                                  <i class="fas fa-plus-square"></i>
                              </button>
                            </form>
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">{{$product->price}}</h6>
                          </div>
                          <div class="col-md-1 col-lg-1 col-xl-1 d-flex">
                            <form action="{{ route('basket.remove', ['id' => $product->id]) }}"
                              method="post">
                            @csrf
                            <button type="submit" class="m-0 p-0 border-0 bg-transparent">
                                <i class="fas fa-plus-square"></i>
                            </button>
                        </form>
                          </div>
                        </div>
                        @endforeach
      
                        <hr class="my-4">
      
                        <div class="pt-5">
                          <h6 class="mb-0"><a href="#!" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Обратно в каталог</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 bg-grey">
                      <div class="p-5">
                        <h3 class="fw-bold mb-5 mt-2 pt-1">Цена</h3>
                        <hr class="my-4">
      
                        <div class="d-flex justify-content-between mb-4">
                          <h5 class="text-uppercase">{{$countProduct}}</h5>
                          <h5>{{$finishPrice}}</h5>
                        </div>
      
                        <h5 class="text-uppercase mb-3">Доставка</h5>
      
                        <div class="mb-4 pb-2">
                          <select class="select">
                            <option value="1">Стандартная доставка 500</option>
                          </select>
                        </div>
      
                        <h5 class="text-uppercase mb-3">Код есть?</h5>
      
                        <div class="mb-5">
                          <div class="form-outline">
                            <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Examplea2">Ввод кода</label>
                          </div>
                        </div>
      
                        <hr class="my-4">
      
                        <div class="d-flex justify-content-between mb-5">
                          <h5 class="text-uppercase">Результирующая цена</h5>
                          <h5>{{$finishPrice+500}}</h5>
                        </div>
      
                        <button type="button" class="btn btn-dark btn-block btn-lg"
                          data-mdb-ripple-color="dark">Купить</button>
      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
@endsection