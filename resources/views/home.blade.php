@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/public/css/style.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
              <div class="main-logo"><img src="/public/asset/img/logo.png" alt=""></div>
                <h1>О нас</h1>
                <p>Наша компания продает комиксы с 2005 года.</p>
                <p>У нас в коллекции есть очень редкие комиксы, комиксы в единственном экземпляре, комиксы для детей.</p>
                <h3 style="text-align:center;">Новинки компании:</h3>
                
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/public/asset/img/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block ">
        <h5>Метка первого слайда</h5>
        <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
      </div>

    <div class="carousel-item">
      <img src="/public/asset/img/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block">
        <h5>Метка первого слайда</h5>
        <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
      </div>

    <div class="carousel-item">
      <img src="/public/asset/img/3.jfif" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block">
        <h5>Метка первого слайда</h5>
        <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
      </div>

      <div class="carousel-item">
      <img src="/public/asset/img/4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block">
        <h5>Метка первого слайда</h5>
        <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
      </div>

      <div class="carousel-item">
      <img src="/public/asset/img/5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-caption d-none d-md-block">
        <h5>Метка первого слайда</h5>
        <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
      </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
