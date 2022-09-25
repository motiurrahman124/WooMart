@extends('Backend.dashboard')
@section('main_content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Invoice</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Invoice</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="callout callout-info">
            <h5><i class="fas fa-info"></i> Note:</h5>
            This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
          </div>


          <!-- Main content -->
          <div class="invoice p-3 mb-3">
            <!-- title row -->
            <div class="row">
              <div class="col-12">
                <h4>
                  <i class="fas fa-globe"></i> AdminLTE, Inc.
                  <small class="float-right">Date: {{ Carbon\Carbon::parse($invoice->created_at)->Format('d/m/Y') }}</small>
                </h4>
              </div>
              <!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
              <div class="col-sm-4 invoice-col">
                <u>Billing Address</u> 
                <address>
                  <strong>{{ $invoice->billing->name }}</strong><br>
                  {{ $invoice->billing->street_address }}<br>
                  City: {{ $invoice->billing->city }}<br>
                  State: {{ $invoice->billing->district }}<br>
                  Phone: (+880) {{ $invoice->billing->phone }}<br>
                  Email: {{ $invoice->billing->email }}
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <u>Shipping Address</u>
                <address>
                  <strong>{{ $invoice->shipping->name }}</strong><br>
                  {{ $invoice->shipping->street_address }}<br>
                  City: {{ $invoice->shipping->city }}<br>
                  State: {{ $invoice->shipping->district }}<br>
                  Phone: (+880) {{ $invoice->shipping->phone }}<br>
                  Email: {{ $invoice->shipping->email }}
                </address>
              </div>
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <b>Invoice #007612</b><br>
                <br>
                <b>Order ID:</b> 4F3S8J<br>
                <b>Payment Due:</b> {{ Carbon\Carbon::parse($invoice->created_at)->Format('d/m/Y') }}<br>
                <b>Account:</b> 968-34567
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
              <div class="col-12 table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($orderDetails as $data)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{ $data->name }}</td>
                      <td><img src="{{$data->image}}"  width="60" height="45" alt="" /></td>
                      <td><div class="10">{{ substr($data->product->about_product,0,28) }}</div></td>
                      <td>${{ $data->price }}</td>
                      <td>{{ $data->qty }}</td>
                      <td>${{ $data->total_price }}</td>
                    </tr>
                    @endforeach
                  
                  </tbody>
                </table>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
              <!-- accepted payments column -->
              <div class="col-6">
                <p class="lead">Payment Methods:</p>
                <img src="{{ asset('assets/adminpage/dist/img/credit/visa.png')}}" alt="Visa">
                <img src="{{ asset('assets/adminpage/dist/img/credit/mastercard.png')}}" alt="Mastercard">
                <img src="{{ asset('assets/adminpage/dist/img/credit/american-express.png')}}" alt="American Express">
                <img src="{{ asset('assets/adminpage/dist/img/credit/paypal2.png')}}" alt="Paypal">

                <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                  plugg
                  dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
              </div>
              <!-- /.col -->
              <div class="col-6">
                <p class="lead">Amount Due {{ Carbon\Carbon::parse($invoice->created_at)->Format('d/m/Y') }}</p>

                <div class="table-responsive">
                  <table class="table">
                    <tr>
                      <th style="width:50%">Subtotal:</th>
                      <td>${{ $data->order->total_amount }}</td>
                    </tr>
                    <tr>
                      <th>Tax ({{ $data->order->vat }}%)</th>
                      <td>${{ $data->order->total_vat }}</td>
                    </tr>
                    <tr>
                      <th>Shipping:</th>
                      <td>${{ $data->order->delivery_fee }}</td>
                    </tr>
                    <tr>
                      <th>Total:</th>
                      <td>${{ $data->order->grand_total }}</td>
                    </tr>
                  </table>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- this row will not appear when printing -->
            <div class="row no-print">
              <div class="col-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                  Payment
                </button>
                <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                  <i class="fas fa-download"></i> Generate PDF
                </button>
              </div>
            </div>
          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection

