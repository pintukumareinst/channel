@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <div class="row">
        <div class="col-md-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Banner</h3>
                <a href="{{route('banners.create')}}" class="btn btn-primary float-right">Create</a>
              </div>
              @if(Session::has('flash_success'))
                  <div class="container alert alert-success mt-2">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ Session::get('flash_success') }}
                  </div>  
              @endif
              <!-- /.card-header --> 
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>Title</th>
                                     
                      <th>Date</th>
                <!--       <th>Content</th>
 -->

                      <th>Status</th>
                      <th>Action</th>
                    </tr>  
                  </thead>
                  <tbody>

                    @foreach($data as $row)
                    <tr>
                  
                      <td>{{@$row->name}}</td>
                  
               <!--        <td>@php echo $row->description; @endphp</td> -->
                    
                      <td>{{@$row->created_at}}</td>
                        <td>{{@$row->status}}</td>
                      <td>
                        <a href="{{ route('banners.edit', $row->id) }}" class="btn"><i class="fas fa-edit" style="color: blue;"></i></a>

                        <button form="resource-delete-{{ $row->id }}"><i style="color: red;" class="fas fa-trash-alt"></i></button>

                        <form id="resource-delete-{{ $row->id }}" action="{{ route('banners.destroy', $row->id) }}" style="display: inline-block;" onSubmit="return confirm('Are you sure you want to delete this item?');" method="post">
                          @csrf
                          @method('DELETE')
                        </form>
                        
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                <br>

                {!! $data->links() !!}
              
            </div>
              <!-- /.card-body -->
              
        </div>
        <!-- /.card -->
        </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection
