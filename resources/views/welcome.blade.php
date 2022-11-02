@extends('header')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>
@section('content')
<div class="swiper-container swiper-container-autoheight mySwiper mainPage-carousel">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(/img/test.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(/img/test2.jpg);"></div>
        <div class="swiper-slide" style="background-image: url(/img/test3.jpg);"></div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
      });
    </script>
    <div id="result" class="blockquote text-center"></div>
    <section class="news pt-0">
      <div class="container mt-md-5">
        <h2 class="mx-4 my-0 text-center">Новости</h2>
        <ul class="row d-lg-flex list-unstyled image-block justify-content-center px-lg-0 mx-lg-0">
          <li class="col-lg-4 col-md-5 image-block full-width p-3">
            <div class="image-block-inner">
              <a class="mh-100">
                <img src="https://raw.githubusercontent.com/solodev/recent-blog-posts/master/images/news-1.jpg" alt="LunarXP Wins Space Innovator of the Year Award" class="img-responsive w-100"></a>
              <span class="hp-posts-cat">Новинки</span>
              <h4 class="mt-3">У нас появилось новое колечко вот</a></h4>
            </div>
          </li>
          <li class="col-lg-4 col-md-5 image-block full-width p-3">
            <div class="image-block-inner">
              <a class="mh-100">
                <img src="https://raw.githubusercontent.com/solodev/recent-blog-posts/master/images/news-2.jpg" alt="New Spending Bill Expands Funding for Space Exploration" class="img-responsive w-100"></a>
              <span class="hp-posts-cat">Новинки</span>
              <h4 class="mt-3">У нас появилось новое колечко вот</a></h4>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <script>
      var text = "С каждым ювелирным изделием в твоей шкатулке связана особая история. Все эти ускользающие мгновения, которые хочется сохранить навсегда, — в украшениях. Это то, что в твоём сердце.";
      var delay = 100; // cкорость
      var elem = document.getElementById("result");
      
      var print_text = function(text, elem, delay) {
          if(text.length > 0) {
              elem.innerHTML += text[0];
              setTimeout(
                  function() {
                      print_text(text.slice(1), elem, delay); 
                  }, delay
              );
          }
      }
      print_text(text, elem, delay);
    </script>
@endsection