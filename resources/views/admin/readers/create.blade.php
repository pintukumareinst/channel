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
                <h3 class="card-title">Create Readers Forum</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->   

              @if(Session::has('flash_error'))
                  <div class="container alert alert-danger mt-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_error') }}
                  </div>
              @endif

              <form enctype="multipart/form-data" method="post" action="{{ route('readers.store') }}">
                @csrf
                <div class="container">
                 <div class="row">

                    <div class="col-sm-12">

                  

                    

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
                            <button type="submit" class="btn btn-primary">Create</button>
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
