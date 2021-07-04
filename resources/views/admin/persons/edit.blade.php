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
                <h3 class="card-title">Edit user</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if(Session::has('flash_success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('persons.update',$data->id) }}">
                @csrf

                @method('PATCH')
                
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group">
                            <label for="image">Image</label><br>
                            <img src="{{ URL::to('/public') }}/uploads/images/users/{{ $data->profile }}" alt="" class="img-responsive rounded-circle" width="100px" height="100px" />
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="form-control" name="image">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                               <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="{{$data->name}}">
                          </div>

                          <label for="chkYes">
                              <input type="radio" class="status" value="Active" name="status" @if($data->status == 'Active') checked @endif/>
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif  
                              Active
                          </label>
                          <label for="chkNo">
                              <input type="radio" class="status" value="InActive" name="status" @if($data->status == 'InActive') checked @endif />
                              @if ($errors->has('status'))
                                <span class="required">
                                    <strong>{{ $errors->first('status') }}</strong>
                                </span>
                            @endif  
                              Inactive
                          </label>
                           <div class="form-group">
                            <button id="submit" type="submit" class="btn btn-primary">Update</button>
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
