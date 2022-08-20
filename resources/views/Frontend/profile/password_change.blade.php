@extends('Frontend.master')
@section('main_content')
<div class="my-profile-page pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-wrap account-page-sidemenu">
                    <nav class="account-page-menu">
                        <ul>
                            <li class="menu-has-children current-menu-item">
                                <a href="#">Manag My Account</a>
                                <span class="toggle-account-menu">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                                <ul class="account-sub-menu">
                                    <li class="current-menu-item"><a href="{{route('profile')}}">My Profile</a></li>
                                    <li class="current-menu-item"><a href="{{route('password.change')}}">Password Change</a></li>
                                    <li><a href="address-book.html">Address Book</a></li>
                                    <li><a href="coupon.html">Coupon</a></li>
                                </ul>
                            </li>
                            <li><a href="my-order.html">My Order</a></li>
                            <li><a href="my-reviwe.html">My Reviwe</a></li>
                            <li><a href="my-wishlist.html">My Wishlist</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="section-wrap">
                    <div class="manage-my-account">
                        <div class="account-page-header">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-7">
                                    <h3 class="title">My Profile</h3>
                                </div>
                            </div>
                        </div>
                        <div class="profile-form">
                            <form action="{{route('password.change.process')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="profile-top">
                                    <div class="media align-items-center">
                                        <div class="profile-image">
                                            <img src="{{$user->image}}" alt="image" id="uplode-img" />
                                        </div>
                                        <div class="author-info">
                                          <h3>{{$user->name}}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="fname">Current Password</label>
                                            <input type="password" class="form-control"  name="current_password"  required />
                                            <span class="text-danger">{{$errors->first('current_password')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="fname">New Password</label>
                                            <input type="text" class="form-control"  name="password" min="6" required />
                                            <span class="text-danger">{{$errors->first('password')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label >Password Confirmation</label>
                                            <input type="text" class="form-control"  name="password_confirmation"  required />
                                            {{-- <span class="text-danger">{{$errors->first('current_password')}}</span> --}}
                                        </div>
                                    </div>   
                                    <div class="form-btn-area">
                                        <button type="submit" class="form-btn">Update</button>
                                    </div>                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection