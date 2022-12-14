@extends('Frontend.master')
@section('main_content')
<div class="contact-page pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-1 order-lg-0">
                <div class="section-wrap">
                    <div class="contact-info">
                        <h3>Get A Qoute</h3>
                        <p>Sollicitudin fames arcu pellentesque vel cursus. Orci dictum </p>
                        <ul class="contacts-info-list">
                            <li>
                                <i class="icon fas fa-phone-alt"></i>
                                (521) 4563-693
                            </li>
                            <li>
                                <i class="icon fas fa-envelope"></i>
                                example@domain.com
                            </li>
                            <li>
                                <i class="icon fas fa-map-marker"></i>
                                Your Street, City, State code.
                            </li>
                        </ul>
                        <ul class="social-meida-contact">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="section-wrap form-wrap">
                    <div class="primary-form">
                        <h3 class="form-top-title">Drop a line to us</h3>
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstName" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastName" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="message-box" id="message" name="message" rows="3" required></textarea>
                                      </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-style-two primary-bg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection