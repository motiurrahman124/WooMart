@extends('Frontend.master')
@section('main_content')
<div class="register-page pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-wrap">
                    <div class="register-info">
                        <div class="register-top text-center">
                            <h2>Welcome Back</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue malesuada in sit sit ultrices nibh sit.</p>
                        </div>
                        <div class="register-form">
                            <form action="{{route('loginCheck')}}" method="POST">
                                @csrf
                                <div class="form-group ">
                                  <input type="text" class="form-control" name="email" id="username" placeholder="Email" />
                                  <i class="icon fas fa-user"></i>
                                </div>
                                <div class="form-group mb-3">
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                  <i class="icon fas fa-lock"></i>
                                </div>
                                <div class="form-bottom d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                    <a class="forgot-password" href="reset-password.html">Forgot password?</a>
                                </div>
                                <div class="form-btn text-center">
                                    <button type="submit" class="btn-style-two">Sign In</button>
                                </div>
                              </form>
                        </div>
                        <div class="register-bottom text-center">
                            
                            <p class="have-account mb-0">
                                Don’t have account? 
                                <a href="{{ route('signup.form') }}">Sign Up Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="register-right">
                    <img src="{{ asset('assets/Mainpage/images/register.jpg') }}" alt="register right image" />
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection