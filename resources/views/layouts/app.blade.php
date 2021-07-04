<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"></script>

 


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    
    @php

        if(!isset($news))
           echo '<title>The Communique Post</title>';
           else{

    foreach($news as $ti){

    }

      echo '<title>'.$ti->title.' - The Communique Post</title>';
    }


    @endphp


    <style type="text/css">
      #content-desktop {display: block;}
#content-mobile {display: none;}

@media screen and (max-width: 768px) {
 
#content-desktop {display: none;}
#content-mobile {display: block;} 

}
#anchor {
            text-decoration: none;
            color: grey;
        }

    </style>
  </head>
  <body>


    <div class="container-fluid" style="background-color: yellow;">


  <div class="row">
   
    <div class="col text-center text-success">
      
    @foreach($banner as $ba)
           <h3 style="font-family: Times New Roman;" class="h3-responsive animated infinite pulse delay-2s">{{$ba->name}}</h3>
           @endforeach

    </div>
    </div>
  </div>


    <div id="content-desktop">

 <div class="container-fluid" style="background-color: #164E87;">
 <!-- <div class="container-fluid"> -->

  <div class="row">
    <div class="col">

    </div>
    <div class="col text-center text-white">
      

           <!-- <h2 style="font-family: Times New Roman;">THE COMMUNITY</h2> -->

           <a href="{{ url('')}}"><img src="{{ asset('public/assets/logo.png')}}" width="160" class="py-2"></a>


    </div>

    <div class="col">

      <ul class="nav justify-content-center">
      
<a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>

    
          <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>
       
          <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg></a>
     
          <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>

</ul>

    </div>
  </div>

  </div>


  <nav class="navbar navbar-light">
  <div class="container">

<nav class="nav">
  <a class="nav-link text-secondary" href="{{ url('')}}">Home</a>
  <a class="nav-link text-secondary" href="{{ url('news')}}">News</a>
  <a class="nav-link text-secondary" href="{{ url('readers-forum')}}">Readers Forum</a>
   <a class="nav-link text-secondary" href="{{ url('c/sports')}}">Sports</a>
       <a class="nav-link text-secondary" href="{{ url('c/entertainment')}}">Entertainment</a>
         <a class="nav-link text-secondary" href="{{ url('r/national')}}">National</a>
            <a class="nav-link text-secondary" href="{{ url('r/world')}}">World</a>

 </nav>

<div class="d-flex">

       <a class="nav-link text-secondary" href="{{ url('contact')}}">Contact us</a>
       
        
</div>

  </div>
</nav>

<div class="container">
  
  <ul class="container nav nav-fill" style="border-bottom: 1px solid grey; border-top: 1px solid grey;">
  <li class="nav-item">
          <a class="nav-link text-secondary" href="{{ url('r/arunachal-pradesh')}}"><small><b>Arunachal Pradesh</b></small></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" href="{{ url('r/assam')}}"><small><b>Assam</b></small></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-secondary" href="{{ url('r/manipur')}}"><small><b>Manipur</b></small></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" href="{{ url('r/meghalaya')}}"><small><b>Meghalaya</b></small></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" href="{{ url('r/tripura')}}"><small><b>Tripura</b></small></a>
        </li>
                <li class="nav-item">
          <a class="nav-link text-secondary" href="{{ url('r/nagaland')}}"><small><b>Nagaland</b></small></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-secondary" href="{{ url('r/sikkim')}}"><small><b>Sikkim</b></small></a>
        </li><li class="nav-item">
          <a class="nav-link text-secondary" href="{{ url('r/mizoram')}}"><small><b>Mizoram</b></small></a>
        </li>

</ul>

</div>



</div>




<div id="content-mobile">

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #164E87;">
  <div class="container">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

                <!-- <h2 class="me-5 text-white" style="font-family: Times New Roman;">THE COMMUNITY</h2> -->
                  
                    <a href="{{ url('')}}" class="mx-auto pe-5"><img src="{{ asset('public/assets/logo.png')}}" width="150"></a>
                
              
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

         <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('')}}"><small><b>Home</b></small></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('news')}}"><small><b>News</b></small></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('readers-forum')}}"><small><b>Readers Forum</b></small></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('c/sports')}}"><small><b>Sports</b></small></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('c/entertainment')}}"><small><b>Entertainment</b></small></a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('r/national')}}"><small><b>National</b></small></a>
        </li>
                <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('r/world')}}"><small><b>World</b></small></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('contact')}}"><small><b>Contact us</b></small></a>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>
            <b>State</b></small>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ url('r/arunachal-pradesh')}}"><small>Arunachal Pradesh</small></a></li>
            <li><a class="dropdown-item" href="{{ url('r/assam')}}"><small>Assam</small></a></li>
            <li><a class="dropdown-item" href="{{ url('r/manipur')}}"><small>Manipur</small></a></li>
            <li><a class="dropdown-item" href="{{ url('r/meghalaya')}}"><small>Meghalaya</small></a></li>
            <li><a class="dropdown-item" href="{{ url('r/tripura')}}"><small>Tripura</small></a></li>
            <li><a class="dropdown-item" href="{{ url('r/nagaland')}}"><small>Nagaland</small></a></li>
            <li><a class="dropdown-item" href="{{ url('r/sikkim')}}"><small>Sikkim</small></a></li>
            <li><a class="dropdown-item" href="{{ url('r/mizoram')}}"><small>Mizoram</small></a></li>
                
          </ul>
        </li>

            <div class="input-group">

               <input class="form-control" type="text" placeholder="Search news.." id="search_product_name2" autocomplete="off">

        <button class="btn btn-secondary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>

  </div>


          
     <div id="productLists2" class="me-2 bg-light">
        
                            </div>




   
              </ul>

              <div class="d-flex">

          <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
    
          <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>
       
          <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg></a>
     
          <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg></a>
        
    
    </div>
     
    </div>
  </div>
</nav>

</div>

 

    
    @yield('content')

  <div class="alert mb-0 text-center text-white" id="content-mobile" style="background-color: #164E87;">
  <div class="row">
    <div class="col-sm">
      <!-- <img src="{{ asset('logo2.png')}}" alt=""> -->

      
        
           <img src="{{ asset('public/assets/logo.png')}}" width="200" alt="The Communique">

       <!--  <h2 style="font-family: Times New Roman;">THE COMMUNITY</h2>
 -->   

        <ul class="nav justify-content-center">
  <li class="nav-item">
  <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>

    </a>
  </li>
</ul>

 
    </div>


    <div class="col-sm">
      <nav class="nav flex-column">
        <a class="nav-link text-white" href="{{ url('about')}}">About us</a>
        <a class="nav-link text-white" href="{{ url('contact')}}">Contact us</a>
        <a class="nav-link text-white" href="{{ url('admin/login')}}">Admin</a>
        <a class="nav-link text-white" href="{{ url('help')}}">Help & Support</a>


      </nav>
    </div>

  </div>
</div>

<div class="container-fluid py-5" style="background-color: #164E87;" id="content-desktop">
  <div class="row">
    <div class="col">
      <center>
        
           <img src="{{ asset('public/assets/logo.png')}}" width="200" alt="The Communique" class="mt-2"></center>

<ul class="nav justify-content-center">
  <li class="nav-item">
  <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
</svg></a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>

    </a>
  </li>
</ul>

     
    </div>
    <div class="col">
      <nav class="nav flex-column">
      
        <a class="nav-link text-white" href="{{ url('r/arunachal-pradesh')}}">Arunachal Pradesh</a>
          <a class="nav-link text-white" href="{{ url('r/assam')}}">Assam</a>
        <a class="nav-link text-white" href="{{ url('r/meghalaya')}}">Meghalaya</a>
        <a class="nav-link text-white" href="{{ url('r/manipur')}}">Manipur</a>
      
      </nav>

    </div>
    <div class="col">
      <nav class="nav flex-column">
         <a class="nav-link text-white" href="{{ url('c/entertainment')}}">Entertainment</a>
        <a class="nav-link text-white" href="{{ url('c/sports')}}">Sports</a>
        <a class="nav-link text-white" href="{{ url('r/national')}}">National</a>
        <a class="nav-link text-white" href="{{ url('r/world')}}">World</a>
        
      
      </nav>
    </div>

    <div class="col">
      <nav class="nav flex-column">
        <a class="nav-link text-white" href="{{ url('about')}}">About us</a>
        <a class="nav-link text-white" href="{{ url('contact')}}">Contact us</a>
        <a class="nav-link text-white" href="{{ url('admin/login')}}">Admin</a>
        <a class="nav-link text-white" href="{{ url('help')}}">Help & Support</a>


      </nav>
    </div>

  </div>
</div>

    <!-- External JavaScripts
  ============================================= -->
  <script src="{{ asset('public/js/jquery.js')}}"></script>

   
<script type="text/javascript">
    $('#search_product_name').keyup(function(){
             var query = $(this).val();
             if(query != '')
             { 
              var _token = "{{@csrf_token()}}";
              $.ajax({
               url:"{{ url('https://dcommunique.com/fetchProducts') }}",
               method:"POST",
               data:{query:query, _token:_token},
               success:function(data){
                 $('#productLists').show();
                 $('#productLists').html(data);
                 $("#productLists").css("position","absolute");
                 $("#productLists").css("height","240px");
                 $("#productLists").css("overflow","scroll");
                 $("#productLists").css("z-index","99999");
                 $("#productLists").css("background","#fff");
                 $("#productLists").css("min-width","250px");
                 $(".product_a").css("font-size","18px");
                 $("#search_product_name").css("background","#FFF");
               }
              });
             }
             else{
                 $('#productLists').hide();
             }
         });

      $('#search_product_name2').keyup(function(){
             var query = $(this).val();
             if(query != '')
             {
              var _token = "{{@csrf_token()}}";
              $.ajax({
               url:"{{ url('https://dcommunique.com/fetchProducts') }}",
               method:"POST",
               data:{query:query, _token:_token},
               success:function(data){
                 $('#productLists2').show();
                 $('#productLists2').html(data);
                 $("#productLists2").css("position","absolute");
                 $("#productLists2").css("height","240px");
                 $("#productLists2").css("overflow","scroll");
                 $("#productLists2").css("z-index","99999");
                 $("#productLists2").css("background","#fff");
                 $("#productLists2").css("min-width","250px");
                 $(".product_a").css("font-size","18px");
                 $("#search_product_name2").css("background","#FFF");
               }
              });
             }
             else{
                 $('#productLists2').hide();
             }
         });

</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60dffebf4ac0ff17"></script>

  </body>
</html>

<!-- 3D90E3
164E87 -->