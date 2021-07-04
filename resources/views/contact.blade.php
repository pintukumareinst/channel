@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">

<div class="col-md-12">
     <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a id="anchor" href="{{ url('')}}"><small>Home</small></a></li>
    <li class="breadcrumb-item active" aria-current="page"><small>Contact</small></li>
  </ol>
</nav>
 
</div>



</div>

<section class="mb-5">

    <img src="public/assets/contact-us.svg" width="100%" style="opacity: 0.8;">


    <div class="row">

       <div class="col-md-9 mt-4">

      <!--    <h2 class="h1-responsive font-weight-bold text-center">Contact us</h2>
  
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
 -->

            <form action="contact" method="POST">
                @csrf

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                           <label for="name" class="">Your name</label>
                            <input type="text" name="name" class="form-control" required>
                           
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="phone" class="">Phone</label>
                            <input type="number" name="phone" class="form-control" required>
                          
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                           <label for="email" class="">Email</label>
                            <input type="email" name="email" class="form-control">
                           
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row mb-2">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>

                            <textarea type="text" name="message" rows="4" class="form-control md-textarea"></textarea>
                                                  </div>

                    </div>
                </div>

                <center>
                        <button type="submit" class="btn btn-primary">Send</button>
                </center>

              
                <!--Grid row-->

            </form>

         
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