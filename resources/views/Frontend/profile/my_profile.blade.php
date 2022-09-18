@extends('Frontend.profile.master')
@section('content')
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
                <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data">
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
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="fname">Name</label>
                                <input type="text" value="{{$user->name}}" class="form-control"  name="name" placeholder="Abu Bokkor" required />
                                <span class="text-danger">{{$errors->first('name')}}</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" value="{{$user->phone}}" class="form-control" id="phone" name="phone" required />
                                <span class="text-danger">{{$errors->first('phone')}}</span>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" value="{{$user->email}}" class="form-control" id="email" name="email"  required/>
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="about-info">About</label>
                                <textarea class="form-control info-box" name="about" id="about-info" rows="3" placeholder="Write here about your self" >{{$user->about}}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="about-info">Profile Image</label>
                                <input type="file" class="form-control"  name="image" />
                            </div>
                            <div class="form-btn-area">
                                <button type="submit" class="form-btn">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection