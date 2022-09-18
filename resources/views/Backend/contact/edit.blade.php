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
                  <h3 class="card-title">Add Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('product.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control" value="{{ $product->name }}" id="exampleInputEmail1" >
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Select Category</label>

                      <select name="category_id" class="form-control" id="exampleInputEmail1"  required>
                        <option value="{{ null }}">Select Category</option>
                        
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{  $category->id == $product->category_id ? 'selected' : ''}} >{{ $category->name }}</option>
                        @endforeach

                      </select>

                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Select Brand</label>

                      <select name="brand_id" class="form-control" id="exampleInputEmail1"  required>
                        <option value="{{ null }}">Select Brand</option>
                        
                        @foreach ($brand as $brand)
                        <option value="{{ $brand->id }}" {{$brand->id == $product->brand_id ? 'selected' : ''}}>{{ $brand->title }}</option>
                        @endforeach

                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Price</label>
                      <input type="number" name="price" class="form-control" value="{{ $product->price }}" id="exampleInputEmail1" required>
                      <span class="text-danger">{{ $errors->first('price') }}</span>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Discount</label>
                      <input type="number" name="discount" class="form-control" value="{{ $product->discount }}" id="exampleInputEmail1" required>
                      <span class="text-danger">{{ $errors->first('discount') }}</span>
                    </div>

                    <div class="icheck-primary d-inline">
                      <input type="checkbox" name="is_percentage_discount" id="checkboxDanger3" {{$product->is_percentage_discount ? 'checked' :''}}>
                      <label for="checkboxDanger3">
                        Is percentage discount
                      </label>
                    </div>

                    <div class="form-group">
                      <label for="exampleFormControlFile1">Description</label>
                      <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $product->description }}</textarea>
                      </div>

                      
                    
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Primary Image</label>
                      <input type="file" name="primary_image" class="form-control-file" id="exampleFormControlFile1" required>
                  </div>

                    <div class="icheck-primary d-inline">
                      <input type="checkbox" name="is_featured_product" id="is_featured_product" {{$product->is_featured_product ? 'checked' :''}}>
                      <label for="is_featured_product">
                        Featured Products
                      </label>
                    </div>

                    <div class="icheck-primary d-inline">
                      <input type="checkbox" name="is_best_selling_product" id="is_best_selling_product" {{$product->is_best_selling_product ? 'checked' :''}}>
                      <label for="is_best_selling_product">
                        Best Selling Products
                      </label>
                    </div>

                    <div class="icheck-primary d-inline">
                      <input type="checkbox" name="is_new_arrival_product" id="is_new_arrival_product" {{$product->is_new_arrival_product ? 'checked' :''}}>
                      <label for="is_new_arrival_product">
                        New Arrival Products
                      </label>
                    </div>

                    
                    
                    <input type="hidden" class="form-control" name="id"  id="inputEmail4"  value="{{$product->slug}}">
    
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