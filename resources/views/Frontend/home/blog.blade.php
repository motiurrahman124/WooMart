@extends('Frontend.master')
@section('main_content')
    

        <!-- offcanvase menu area end here  -->
        
        <div class="blog-page pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-wrap">
                            <h2 class="section-title mb-5">Our Latest Blog</h2>
                            <div class="row m-b-30">
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('single_blog') }}">
                                                <img src="{{asset('assets/Mainpage/images/blog/1.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="{{ route('single_blog') }}">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="{{ route('single_blog') }}" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('assets/Mainpage/images/blog/2.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('assets/Mainpage/images/blog/3.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('assets/Mainpage/images/blog/4.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('assets/Mainpage/images/blog/5.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <article  class="single-post">
                                        <div class="post-thumbnail">
                                            <a href="single-blog.html">
                                                <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="blog" />
                                            </a>
                                            <span class="blog-date">15 Sep, 20</span>
                                        </div>
                                        <div class="post-info">
                                            <ul class="post-meta">
                                                <li class="author">
                                                    <a href="#"><i class="far fa-user"></i>John Doe</a>
                                                </li>
                                                <li class="comments">
                                                    <a href="#"><i class="far fa-comments"></i>32 Comments</a>
                                                </li>
                                            </ul>
                                            <h2 class="post-title">
                                                <a href="single-blog.html">Nunc quis phasellus mi sed. </a>
                                            </h2>
                                            <p class="post-content">Leo at bibendum duis libero sed. Sapien lobortis vel id velit </p>
                                            <a href="single-blog.html" class="post-btn">
                                                Read More <i class="fas fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-area mt-50">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pagination-page d-flex align-items-center justify-content-between">
                                        <div class="page-count">
                                            <span>Page</span>
                                            <input class="page-number" type="text" value="2" />
                                            <span>of 30</span>
                                        </div>
                                        <ul class="page-controls">
                                            <li class="control-btn"><a href="#"><i class="fas fa-caret-left"></i> Prev</a></li>
                                            <li class="control-btn"><a href="#">Next <i class="fas fa-caret-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-area">
                            <div class="single-widget search-widget ">
                                <div class="widget-title text-center">
                                    <h3>Search Post</h3>
                                </div>
                                <div class="search-form widget-wrap">
                                    <form>
                                        <div class="form-group mb-0">
                                          <input type="text" class="form-control" id="search2" name="search" placeholder="search here..." />
                                          <button type="submit" class="search-icon fas fa-search"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="single-widget recent-post-widget ">
                                <div class="widget-title text-center">
                                    <h3>Recent Blog</h3>
                                </div>
                                <div class="recent-post-list widget-wrap">
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-widget add-banner-widget ">
                                <div class="widget-title text-center">
                                    <h3>Girls Collections</h3>
                                </div>
                                <img src="{{asset('assets/Mainpage/images/watch.jpg')}}" alt="iamge" />
                            </div>
                            <div class="single-widget recent-post-widget ">
                                <div class="widget-title text-center">
                                    <h3>Popular Blog</h3>
                                </div>
                                <div class="recent-post-list widget-wrap">
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="singe-post">
                                        <div class="media align-items-center">
                                            <div class="post-thumbnail mr-3">
                                                <a href="single-blog.html">
                                                    <img src="{{asset('assets/Mainpage/images/blog/6.jpg')}}" alt="iamge" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="post-date"><i class="fas fa-calendar"></i> 20 Sep, 2020</h4>
                                              <h3 class="post-title">
                                                <a href="single-blog.html">Morbi egestas gravida ridiculus mattis llamcorper varius.</a>
                                              </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer area start here  -->
        <footer class="footer-area-v2 ">
            <div class="widget-area ">
                <div class="container">
                    <div class="feature-lsit">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="media">
                                            <div class="icon mr-5 align-self-center">
                                                <i class="fas fa-shopping-basket"></i>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="mt-0">Shopping Cart</h4>
                                              <span>Step 1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="media">
                                            <div class="icon mr-5 align-self-center">
                                                <i class="fas fa-money-check-alt"></i>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="mt-0">Payment</h4>
                                              <span>Step 2</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="media">
                                            <div class="icon mr-5 align-self-center">
                                                <i class="fas fa-truck"></i>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="mt-0">Delivery</h4>
                                              <span>Step 3</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="single-feature">
                                        <div class="media">
                                            <div class="icon mr-5 align-self-center">
                                                <i class="fas fa-clipboard-check"></i>
                                            </div>
                                            <div class="media-body">
                                              <h4 class="mt-0">Confirmation</h4>
                                              <span>Step 4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-wrap">
                        <div class="row m-b-30">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-widget text-widget">
                                    <div class="footer-brand">
                                        <a href="index.html"><img src="{{asset('assets/Mainpage/images/white-logo2.png" alt="woomart" /></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum uismod</p>
                                    <ul class="social-media-widget">
                                        <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a class="pinterest" href="#"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-widget footer-menu">
                                    <h3 class="widget-title">Quick Menu</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Catergory</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-widget contact-widget">
                                    <h3 class="widget-title">Contact us</h3>
                                    <ul class="address-list">
                                        <li>354 King Street, Melbourne Victoria 5467 Australia</li>
                                        <li>(0321) 645-798-021</li>
                                        <li>yoursite.com</li>
                                        <li>info@mail.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="single-widget newsletter-widget">
                                    <h3 class="widget-title">Newsletter</h3>
                                    <div class="subscribe-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="subscribe" name="subscribe" placeholder="Subscribe Newsletter" />
                                            </div>
                                            <button type="submit" class="btn-style-two">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    @endsection
