<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('carousel')
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="/services/pyschologue"><img src="{{ asset('storage/images/1.png') }}" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href="/services/toilettage-animaux"><img src="{{ asset('storage/images/2.png') }}" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
    <a href="/services/photographe"><img src="{{ asset('storage/images/3.png') }}" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection



@section('content')
<div class="bievenue mt-5">
  <h2 class="text-center">Bienvenue chez NearSpot !</h2>
</div>


@endsection