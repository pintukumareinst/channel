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
                <h3 class="card-title">Edit news</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if(Session::has('flash_success'))
                  <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>
              @endif
              <form enctype="multipart/form-data" role="form" id="myform" method="post" action="{{ route('news.update',$data->id) }}">
                @csrf

                @method('PATCH')
                
                <div class="container">
                 <div class="row">
                    <div class="col-sm-12">
                          <div class="form-group">
                            <label for="image">Image</label><br>
                            <img src="{{ URL::to('/public') }}/uploads/images/news/{{ $data->image }}" alt="" class="img-responsive" width="100px" />
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="form-control" name="image">
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="name" class="form-label">Title</label>
                               <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="{{$data->title}}">
                          </div>
                       

                          <div class="form-group">
                            <label for="parent_id" class="form-label">Region</label>

                            <select class="form-control" name="region" required>

                                 <option value="Arunachal Pradesh" @php if($data->region=='Arunachal Pradesh') echo "selected"; @endphp>Arunachal Pradesh</option>
    <option value="Assam" @php if($data->region=='Assam') echo "selected"; @endphp>Assam</option>
    <option value="Nagaland" @php if($data->region=='Nagaland') echo "selected"; @endphp>Nagaland</option>
    <option value="Manipur" @php if($data->region=='Manipur') echo "selected"; @endphp>Manipur</option>
    <option value="Mizoram" @php if($data->region=='Mizoram') echo "selected"; @endphp>Mizoram</option>
    <option value="Tripura" @php if($data->region=='Tripura') echo "selected"; @endphp>Tripura</option>
    <option value="Sikkim" @php if($data->region=='Sikkim') echo "selected"; @endphp>Sikkim</option>
    <option value="Meghalaya" @php if($data->region=='Meghalaya') echo "selected"; @endphp>Meghalaya</option>
    <option value="National" @php if($data->region=='National') echo "selected"; @endphp>National</option>
    <option value="World" @php if($data->region=='World') echo "selected"; @endphp>World</option>
   
  </select>
                          </div>

                          <div class="form-group">
                            <label for="parent_id" class="form-label">Category</label>

                            <select class="form-control" name="category" required>

          
    <option value="Sports" @php if($data->category=='Sports') echo "selected"; @endphp>Sports</option>
    <option value="Entertainment" @php if($data->category=='Entertainment') echo "selected"; @endphp>Entertainment</option>
   
  </select>
                          </div>

                            <div class="form-group">
                            <label for="parent_id" class="form-label">User</label>

                            <select class="form-control" name="user" required>

    @foreach($data2 as $row2)
    

    
    <option value="{{$row2->id}}" @php if($row2->name==$data->user) echo "selected"; @endphp>{{$row2->name}}</option>

     @endforeach

    
  </select>
                          </div>

                         
                          <div class="form-group">
                            <label for="percentage">Content<!-- <span class="required">*</span> --></label>
                                <textarea rows="5" class="form-control" id="description" name="description">{{$data->content}}</textarea>
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
