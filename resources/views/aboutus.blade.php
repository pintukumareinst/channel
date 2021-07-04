@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">

<div class="col-md-12">
     <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a id="anchor" href="{{ url('')}}"><small>Home</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small>About</small></li>
  </ol>
</nav>
 
</div>
 


</div>

<section class="mb-5">

    <img src="public/assets/aboutus.png" width="100%" style="opacity: 0.8;">


    <div class="row">

       <div class="col-md-9 mt-4">

           

         
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center mt-3">
            <ul class="list-unstyled">

                <li><i class="nav-icon fas fa-map-marker-alt fa-2x"></i>
                    <p>Itanagar, CA 94126, India</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@communique.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

  </div>

        @php 
        if(isset($submit)){ @endphp
<script type="text/javascript">
  alert('Your message has been sent successfully');
</script>
@php } @endphp
	
		@endsection