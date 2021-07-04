@extends('admin.layouts.app')
@section('content')
     <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create News</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->   

              @if(Session::has('flash_error'))
                  <div class="container alert alert-danger mt-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_error') }}
                  </div>
              @endif

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('news.store') }}">
                @csrf
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">

                      <div class="form-group">
                            <label for="parent_id" class="form-label">Region</label>

                            <select class="form-control" name="region" required>
    <option disabled selected>Select Region</option>
    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
    <option value="Assam">Assam</option>
    <option value="Nagaland">Nagaland</option>
    <option value="Manipur">Manipur</option>
    <option value="Mizoram">Mizoram</option>
    <option value="Tripura">Tripura</option>
    <option value="Sikkim">Sikkim</option>
    <option value="Meghalaya">Meghalaya</option>
    <option value="National">National</option>
    <option value="World">World</option>
    
   
  </select>
                          </div>

                            <div class="form-group">
                            <label for="parent_id" class="form-label">Category</label>

                            <select class="form-control" name="category" required>
    <option value="None" selected>None</option>
    <option value="Sports">Sports</option>
    <option value="Entertainment">Entertainment</option>
   
  </select>
                          </div>

                           <div class="form-group">
                            <label for="parent_id" class="form-label">User</label>

                            <select class="form-control" name="user" required>
    <option value="" disabled selected>Select User</option>



    @foreach($data as $row)
  

    <option value="{{@$row->id}}">{{@$row->name}}</option>

     @endforeach

    
  </select>
                          </div>


                         <div class="form-group">
                             <label for="image" class="form-label">News Image</label>
                                <input type="file" class="form-control" name="image" required>
                          </div>
                          
                          <div class="form-group">
                            <label for="name" class="form-label">Title</label>
                               <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="News title" required>
                          </div>
                          <!-- <div class="form-group">
                            <label for="designation" class="form-label">User Name</label>
                               <input type="text" class="form-control" id="exampleInputPassword1" name="small_d" placeholder="Course small description" required>
                          </div> -->
                       

                          <div class="form-group">
                            <label for="percentage">Content<!-- <span class="required">*</span> --></label>
                                <textarea placeholder="Enter course description" rows="8" class="form-control" id="description" name="description"></textarea>
                                <script>
                                      CKEDITOR.replace( 'description' );
                                </script> 
                                @if ($errors->has('description'))
                                  <span class="required">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                                @endif  
                            </div>

                          <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" checked />
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif  
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" />
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif  
                              Inactive
                          </label>
                          
                          
                          
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Create News</button>
                          </div>

                        </div>

                    </div>
                 </div>
                </div>
              </form>
          </div>
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>



    <!-- /.content -->

@endsection
