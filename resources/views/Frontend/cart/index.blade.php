@extends('Frontend.master')
@section('main_content')
<div class="cart-page pb-60">
    <div class="container">
       <div id="cart_content">
        @include('Frontend.cart.cart_content')
       </div>
    </div>
</div>
@endsection
