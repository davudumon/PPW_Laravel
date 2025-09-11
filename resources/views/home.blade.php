@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="hero-section container py-5 mt-5">
    <div class="row align-items-center">
      <div class="col-12 col-lg-6 order-1 order-lg-1 mb-4 mb-lg-0">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/carousel-1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/carousel-2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="assets/carousel-3.png" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6 order-2 order-lg-2 d-flex flex-column gap-3 
        align-items-center align-items-lg-start text-center text-lg-start">
        <h1>Discover Our <span class="fw-bold" style="color: #800000;">Loveable</span> Modern Fashion</h1>
        <p>Welcome to CAV — your go-to spot for all things fashion! Whether you’re hunting for the latest trends or
          looking to sell your stylish pieces, we make it super easy and fun. Shop cool clothes and accessories from
          trusted sellers or turn your closet into cash in just a few clicks.</p>
        <a href="product.html"><button type="button"
            class="btn btn-dark align-self-xl-start align-self-center">Take a Look!</button></a>
      </div>
    </div>
  </section>
@endsection

