<header class="header-area header-v2">
    <!-- top bar area start here  -->
    <div class="topbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center text-md-left">
                    <div class="topbar-left">
                        <ul class="social-meida">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center text-md-right">
                    <div class="topbar-right ">
                        <ul>
                            <li class="account dropdown">
                                <a href="#"> <i class="user-icon fas fa-user-circle"></i> {{Auth::user() ? AUth::user()->name : 'Account'}} <i class="angle-down fa fa-angle-down"></i></a>
                                <ul class="dropdon-itme">

                                    @if(Auth::user())
                                        <li><a href="{{route('profile')}}">profile</a></li>
                                        <li><a href="{{route('logout')}}">log out</a></li>

                                    @else
                                        <li><a href="{{route('login.form')}}">Sign In</a></li>
                                      <li><a href="{{route('signup.form')}}">Sign Up</a></li>
                                      <li><a href="reset-password.html">Reset Password</a></li>
                                    @endif
                                </ul>
                            </li>
                            <li class="currancy dropdown">
                                <a href="#">USD <i class="angle-down fa fa-angle-down"></i></a>
                                <ul class="dropdon-itme">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">BTD</a></li>
                                </ul>
                            </li>
                            <li class="language dropdown">
                                <a href="#"> <img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> English <i class="angle-down fa fa-angle-down"></i></a>
                                <ul class="dropdon-itme">
                                    <li><a href="#"><img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> English</a></li>
                                    <li><a href="#"><img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> Dautch</a></li>
                                    <li><a href="#"><img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> Hindi</a></li>
                                    <li><a href="#"><img src="{{asset('assets/Mainpage/images/flag.png')}}" alt="flag"> Bangla</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar area end here  -->
    <!-- header-middle-aera star here   -->
    <div class="header-middle-area">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6 order-0 order-lg-1">
                    <div class="brand-area">
                        <a href="{{ url('/') }}"><img src="{{asset('assets/Mainpage/images/logo1.png')}}" alt="Woomart" /></a>
                    </div>
                </div>
                <div class="col-lg-6  order-2 order-lg-2">
                    <div class="search-area">
                        <form action="{{url('shop')}}" method="get">
                            <div class="search-wrap">
                                <div class="form-group search-item-wraper search-item m-0">
                                    <input type="text" class="search-input" id="search" name="search" placeholder="Search Product..." autocomplete="off" />
                                    <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 order-1 order-lg-3">
                    <div class="middle-right">
                        <ul>
                            <li>
                                <a href="{{ route('show.wishlist') }}"><i class="flaticon-heart"></i> <span class="count" id="wishlist_number">{{ wishlistNumber() }}</span> </a>
                            </li>
                            <li>
                                <a href="{{ route('add.list') }}">
                                    <i class="flaticon-shopping-cart-empty-side-view"></i>
                                    <span class="count" id="cart_number">{{ cartNumber() }}</span>
                                </a>
                                <span class="card-amount" id="cart_amount">My Cart - {{ cartAmount() }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle-aera star here   -->
    <!-- header bottom area  start here  -->

    @if(isset($menu) && $menu == 'home')
    <div class="header-botom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="categories-list-v2 ">
                        <h3 class="catagory-name"><i class="fas fa-bars"></i> All Categories </h3>
                        <ul class="catagory-items">
                            @foreach ($categoriess  as $category )
                                <li class="has-catagory-submenu">
                                    <a href="{{url('shop?category_id='.$category->id)}}"><img src="{{asset('assets/Mainpage/images/icons/c1.svg')}}" alt="icon" /> {{$category->name}} @if(isset($category->child[0])) <i class="fas fa-angle-right float-right"></i> @endif </a>
                                    @if(isset($category->child[0]))
                                        <ul class="catagory-submenu-lsit">
                                            @foreach ($category->child as $subcategory )
                                                <li><a class="catagory-title" href="{{url('shop?category_id='.$category->id)}}">{{$subcategory->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <a id="menu-bars" class="text-right d-block d-md-none" href="#"><i class="fa fa-bars"></i></a>
                </div>
                <div class="col-lg-9 col-md-9 text-left text-md-right">
                    <nav class="main-menu-area">
                        <ul>
                            <li class="current-menu-item">
                                <a href="{{ route('home') }}">Home</i></a>

                            </li>
                            <li class="mega-menu-itms position-static">
                                <a href="shop.html">Shop <i class="fa fa-angle-down"></i></a>
                                <ul class="mega-menu row">
                                    @foreach ($megaCategories as $megaCategory )
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="{{url('shop?category_id'.$megaCategory->id)}}">{{$megaCategory->name}}</a></li>
                                            @foreach ($megaCategory->child as $childCategory )
                                            <li><a href="{{url('shop?category_id'.$childCategory->id)}}">{{$childCategory->name}}</a></li>                                                
                                            @endforeach
                                        </ul>                                                                                            
                                    </li>     
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="submenu-items">
                                    <li><a href="about.html">about</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="single-shop.html">shop details</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="single-blog.html">blog details</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="cart.html">cart</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="order-track.html">order track</a></li>
                                    <li><a href="sign-in.html">sign in</a></li>
                                    <li><a href="sign-up.html">sign up</a></li>
                                    <li><a href="reset-password.html">reset password</a></li>
                                    <li><a href="terms-conditions.html">terms conditions</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="404.html">404 page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Blog </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
     @else
    <div class="header-botom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="categories-list">
                        <ul class="catagory">
                            <li>
                                <a href="#">All Categories <i class="fa fa-angle-down"></i></a>
                                <ul class="catagory-items">
                                    @foreach ($categories as $category)
                                    <li><a href="{{url('shop?category_id='.$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a id="menu-bars" class="text-right d-block d-md-none" href="#"><i class="fa fa-bars"></i></a>
                </div>
                <div class="col-lg-9 col-md-9 text-left text-md-right">
                    <nav class="main-menu-area">
                        <ul>
                            <li>
                                <a href="{{ route('home') }}">Home </i></a>

                            </li>
                            <li class="mega-menu-itms position-static">
                                <a href="shop.html">Shop <i class="fa fa-angle-down"></i></a>
                                <ul class="mega-menu row">
                                    @foreach ($megaCategories as $megaCategory )
                                    <li class="col-3">
                                        <ul>
                                            <li class="mega-menu-title"><a href="{{url('shop?category_id'.$megaCategory->id)}}">{{$megaCategory->name}}</a></li>
                                            @foreach ($megaCategory->child as $childCategory )
                                            <li><a href="{{url('shop?category_id'.$childCategory->id)}}">{{$childCategory->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                <ul class="submenu-items">
                                    <li><a href="about.html">about</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="single-shop.html">shop details</a></li>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="single-blog.html">blog details</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                    <li><a href="cart.html">cart</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="order-track.html">order track</a></li>
                                    <li><a href="sign-in.html">sign in</a></li>
                                    <li><a href="sign-up.html">sign up</a></li>
                                    <li><a href="reset-password.html">reset password</a></li>
                                    <li><a href="terms-conditions.html">terms conditions</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="404.html">404 page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Blog </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- header bottom area  end here  -->
</header>
