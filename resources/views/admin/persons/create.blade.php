@extends('admin.layouts.app')
@section('content')
   
    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create user</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->  

              @if(Session::has('flash_error'))
                  <div class="container alert alert-danger mt-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_error') }}
                  </div>
              @endif

              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('persons.store') }}">
                @csrf
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">

                    

                         <div class="form-group">
                             <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" required>
                          </div>
                          
                          <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                               <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="Person name" required>
                          </div>
                          <!-- <div class="form-group">
                            <label for="designation" class="form-label">User Name</label>
                               <input type="text" class="form-control" id="exampleInputPassword1" name="small_d" placeholder="Course small description" required>
                          </div> -->
                       

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
                            <button id="submit" type="submit" class="btn btn-primary">Create User</button>
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
