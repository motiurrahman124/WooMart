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
                <h3 class="card-title">Update Slider</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title1</label>
                    <input type="text" name="title1" class="form-control" id="exampleInputEmail1" value="{{ $slider->title1 }}" placeholder="Enter title1 here">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Title2</label>
                    <input type="text" name="title2" class="form-control" id="exampleInputEmail1" value="{{ $slider->title2 }}" placeholder="Enter title1 here">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" value="{{ $slider->description }}" placeholder="Enter description here">
                  </div>

                  
                  <div class="form-group">
                      <label for="exampleFormControlFile1">Background Image</label>
                      <input type="file" name="background_image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                  
                  <div class="form-group">
                      <label for="exampleFormControlFile1">Banner Image</label>
                      <input type="file" name="banner_image" class="form-control-file" id="exampleFormControlFile1">
                  </div>

                  
                <div class="form-group">
                  <label for="exampleInputEmail1">Discount</label>
                  <input type="number" name="discount" class="form-control" value="{{ $slider->discount }}" id="exampleInputEmail1" >
                </div>

                <input type="hidden" class="form-control" name="id"  id="inputEmail4"  value="{{$slider->id}}">
  
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