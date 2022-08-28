@extends('Backend.dashboard')
@section('main_content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Simple Tables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Category List</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-append">
                    <a type="button" href="{{route('category.create')}}" class="btn btn-info">Add New Category</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Root Category</th>
                    <th>Banner Image</th>
                    <th>Top Product Category</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category )
                  
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{ $category->parent ? $category->parent->name : ' ' }}</td>
                    <td><img src="{{asset($category->banner)}}"  width="90" height="70" alt="" /></td>
                     <td>{{$category->is_top_product_category ? 'Yes' : 'No'}}</td>                 {{--ternery operator --}}
                    <td>
                      <a type="button" name="edit" href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                      <a type="button" name="delete" href="{{route('category.delete',$category->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                      
                    </td>
                  </tr>
                    
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection

