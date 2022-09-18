@extends('Frontend.master')
@section('main_content')
<div class="my-profile-page pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('Frontend.profile.layouts.sidebar')
                
            </div>
                @yield('content')
            
        </div>
    </div>
</div>
@endsection