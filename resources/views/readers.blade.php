@extends('layouts.app')

@section('content')

<div id="content-desktop">
<div id="carouselExampleIndicators" class="container carousel slide my-2" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">


    @php 
    $i=0;

        foreach($images as $im)
        {
          @endphp
   
    <div class="carousel-item@php if($i==0) echo ' active'; @endphp">
      <img src="{{ asset('public/uploads/images/banners/')}}/{{$im->image}}" class="d-block w-100" height="200" alt="">
    </div>
     @php $i++;
   }
    @endphp


  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div id="content-mobile">
  <div id="carouselExampleIndicatorsm" class="container carousel slide my-2" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicatorsm" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicatorsm" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicatorsm" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">

      @php 
    $i=0;

        foreach($images as $im)
        {
          @endphp
   
    <div class="carousel-item@php if($i==0) echo ' active'; @endphp">
      <img src="{{ asset('public/uploads/images/banners/')}}/{{$im->image}}" class="d-block w-100" height="100" alt="">
    </div>
     @php $i++;
   }
    @endphp
   



  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsm" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsm" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<div class="container">
  <div class="row">

<div class="col-md-9">
     <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a id="anchor" href="{{ url('')}}"><small>Home</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small>Readers Forum</small></li>
  </ol>
</nav>

</div>

<div class="col-md-3"  id="content-desktop">

  <div class="input-group">
       <input class="form-control" type="text" placeholder="Search news.." id="search_product_name" autocomplete="off">
               <button class="btn btn-secondary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>

  </div>

     <div id="productLists" class="me-5">
    
  </div>
  
</div>

</div>

  </div>

<div class="container">

  <h4 class="display-6" style="color: grey;">Readers Forum News</h4>

  <div class="row row-cols-1 row-cols-md-4 g-4">


       @foreach($assam as $as)

@php $date=$as->created_at;

$date=strtotime($date);

 @endphp


    <div class="col">

        <div class="card">
        <a href="{{ url('readers-forum')}}/{{$as->slug}}" id="anchor">

  

  <img src="{{asset ('public/uploads/images/readers/')}}/{{$as->image}}" class="card-img-top" alt="" height="180">

</div>
<h5 class="mt-1"><small>{{$as->title}}</small></h5></a>

 <ul class="list-inline">
  <li class="list-inline-item">By</li>
  <li class="list-inline-item"><p class="text-danger"><b>{{$as->user}}</b></p></li>
  <li class="list-inline-item">{{date("F d, Y",$date)}}</li>
</ul>




     

  </div>

  @endforeach

</div>

<ul class="nav justify-content-center mb-2">
  <li class="nav-item">
      {!! $assam->links() !!}
  </li>
</ul>
 

</div>



    
        @endsection