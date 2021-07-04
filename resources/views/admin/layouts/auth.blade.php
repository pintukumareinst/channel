<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Login | Admin</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('public/admin/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('public/admin/css/style.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
     @yield('content')
</div>
<!-- ./wrapper --> 
 
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<!-- [11:59 AM, 5/21/2021] Laravel Sir: https://www.itsolutionstuff.com/post/add-remove-multiple-input-fields-dynamically-with-jquery-laravel-58example.html
[11:59 AM, 5/21/2021] Laravel Sir: Course

id
logo
title
small_desc
youtube_link
slug
desc - ckeditor


Order - orders
id,
course_id
phone
email


Syllabus
course_id
question - string
answer - text
[12:00 PM, 5/21/2021] Laravel Sir: <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
[12:00 PM, 5/21/2021] Laravel Sir: <div class="form-group">  <label for="percentage">Description<span class="required">*</span></label>
                                <textarea placeholder="Enter Product Feature" rows="5" class="form-control" id="description" name="description">{{old('description')}}</textarea>
                                <script>
                                      CKEDITOR.replace( 'description' );
                                </script> 
                                @if ($errors->has('description'))
                                  <span class="required">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                                @endif  
                             </div>

                            <input placeholder="Search product..."  type="text" name="search" id="search_product_name" autocomplete="off">
                            <div id="productLists">
                            </div>


$('#search_product_name').keyup(function(){ 
             var query = $(this).val();
             if(query != '')
             {
              var _token = "{{@csrf_token()}}";
              $.ajax({
               url:"{{ url('fetchProducts') }}",
               method:"POST",
               data:{query:query, _token:_token},
               success:function(data){
                 $('#productLists').show();
                 $('#productLists').html(data);
                 $("#productLists").css("position","absolute");
                 $("#productLists").css("height","300px");
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



Route::post('fetchProducts','WelcomeController@fetchProducts');




 public function fetchProducts(Request $request)
    {
        if($request->get('query'))
        {
        $query = $request->get('query');
        $searchResults = Product::where('name', 'LIKE', "%{$query}%")->get();
        $output = '<ul>';
        foreach($searchResults as $row)
        {
            $output .= '<li><a href="'.url('/').'/p/'.$row->slug.'">'.$row->name.'</a></li>';
        }
          $output .= '</ul>';
          echo $output; 
        } 
    } -->
                            
<script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/admin/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/admin/js/adminlte.min.js')}}"></script>
</body>
</html>
