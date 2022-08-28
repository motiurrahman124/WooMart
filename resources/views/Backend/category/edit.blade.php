@extends('Backend.dashboard')
@section('main_content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
    
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category Name</label>
                      <input type="text" name="name" class="form-control" value="{{ $category->name }}" id="exampleInputEmail1">
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Select Root Category</label>

                      <select name="parent_id" class="form-control" id="exampleInputEmail1">
                        <option value="{{ 0 }}">Select Root Category</option>
                        
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                      </select>

                    </div>

                    
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Brand Image</label>
                        <input type="file" name="banner" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="icheck-primary d-inline">
                      <input type="checkbox" name="is_top_product_category" id="checkboxDanger3">
                      <label for="checkboxDanger3">
                        Top Product Category
                      </label>
                    </div>

                    <input type="hidden" class="form-control" name="id"  id="inputEmail4"  value="{{$category->id}}">
                    
                    
    
                  </div>

                  <!-- /.card-body -->
    
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
    </section>
    </div>

@endsection