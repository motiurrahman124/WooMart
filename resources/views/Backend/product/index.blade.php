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
              <h3 class="card-title">Product List</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <div class="input-group-append">
                    <a type="button" href="{{route('product.create')}}" class="btn btn-info">Add New Product</a>
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
                    <th>Imge</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Discount Price</th>
                    <th>Active status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $product )
                  
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{asset($product->primary_image)}}"  width="90" height="70" alt="" /></td>
                    <td>{{$product->name}}</td>
                    <td>{{ $product->category ? $product->category->name : ' ' }}</td>
                    <td>{{ $product->brand ? $product->brand->title : ' ' }}</td>
                    <td>{{ $product->price}}</td>
                    <td>{{ $product->discount_price}}</td>
                    <td>
                      @if($product->enable)
                      <a type="button" name="delete" href="{{route('product.disable',$product->slug)}}" class="btn btn-danger btn-sm">Disable</a>
                      @else
                      <a type="button" name="edit" href="{{route('product.enable',$product->slug)}}" class="btn btn-primary btn-sm">Enable</a>
                      @endif
                    </td>
                    <td>
                      {{-- <a type="button" name="edit" href="{{route('product.edit',$product->slug)}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-lock-open"></i></a>
                      <a type="button" name="edit" href="{{route('product.edit',$product->slug)}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-lock"></i></a> --}}
                      <a type="button" name="edit" href="{{route('product.edit',$product->slug)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                      <a type="button" name="delete" href="{{route('product.delete',$product->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                      
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

