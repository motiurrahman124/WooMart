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
              <h3 class="card-title">Contact List</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  {{-- <div class="input-group-append">
                    <a type="button" href="{{route('product.create')}}" class="btn btn-info">Add New Product</a>
                  </div> --}}
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
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($contactList as $contact )
                  
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$contact->first_name}} {{ $contact->last_name }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                      @if($contact->read_unread)
                      <button class="btn btn-primary btn-sm" disabled>Read</button>
                      {{-- <a type="button" name="read" href="{{route('contact.unread',$contact->id)}}" class="btn btn-warning btn-sm" disable>Read</a> --}}
                      @else
                      <a type="button" name="unread" href="{{route('contact.read',$contact->id)}}" class="btn btn-warning btn-sm">Unread</a>
                      @endif
                    </td>
                    <td>
                      {{-- <a type="button" name="edit" href="{{route('product.edit',$product->slug)}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-lock-open"></i></a>
                      <a type="button" name="edit" href="{{route('product.edit',$product->slug)}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-lock"></i></a> --}}
                      {{-- <a type="button" name="edit" href="{{route('product.edit',$product->slug)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                      <a type="button" name="delete" href="{{route('product.delete',$product->id)}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a> --}}
                      
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

