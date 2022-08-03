@extends('Frontend.master')
@section('main_content')
<div class="register-page pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-wrap">
                            <div class="register-info">
                                <div class="register-top text-center">
                                    <h2>Join With US</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue malesuada in sit sit ultrices nibh sit.</p>
                                </div>
                                <div class="register-form">
                                    <form action="#">
                                        <div class="form-group ">
                                          <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name" />
                                          <i class="icon fas fa-user"></i>
                                        </div>
                                        <div class="form-group ">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                                            <i class="icon fas fa-envelope"></i>
                                        </div>
                                        <div class="form-group ">
                                          <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                                          <i class="icon fas fa-lock"></i>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re-enter Password" />
                                            <i class="icon fas fa-lock"></i>
                                        </div>
                                        <div class="form-bottom ">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="agree">
                                                <label class="form-check-label" for="agree">Agree with Terms & Policy</label>
                                            </div>
                                        </div>
                                        <div class="form-btn text-center">
                                            <button type="submit" class="btn-style-two">Sign Up</button>
                                        </div>
                                      </form>
                                </div>
                                <div class="register-bottom text-center">
                                    <div class="bottom-title">
                                        <h3>Or</h3>
                                    </div>
                                    <ul class="btn-list d-flex align-items-center justify-content-between">
                                        <li><a class="login-btn facebook" href="#"><i class="fab fa-facebook-f"></i>Log In with Facebook</a></li>
                                        <li><a class="login-btn google" href="#"><i class="fab fa-google"></i>Log In with Google</a></li>
                                    </ul>
                                    <p class="have-account mb-0">
                                        Already have an account? 
                                        <a href="sign-in.html">Sign In Now</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="register-right">
                            <img src="{{asset('assets/Mainpage/images/register2.jpg')}}" alt="register right image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection