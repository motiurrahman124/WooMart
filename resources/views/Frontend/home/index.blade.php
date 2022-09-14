@extends('Frontend.master')
@section('main_content')

<section class="slider-two-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="slider-two-slide">
                  @if(isset($data['sliders'][0]))
                  @foreach ($data['sliders'] as $slider )
                  <div class="single-slide" style=" background: url('{{asset($slider->background_image)}}') no-repeat center / cover;">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-7 ">
                           <div class="banner-content color-text">
                                <h1>{{$slider->title1}}</h1>
                                <h2>{{$slider->title2}}</h2>
                                <p>
                                    {{$slider->description}}
                                </p>
                                <a href="#" class="banner-btn">Shop Now</a>
                           </div>
                        </div>
                        <div class="col-lg-5 d-none d-lg-block ">
                            <div class="banner-image mt-3">
                                <img class="img-fluid" src="{{asset($slider->banner_image)}}" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
                  @endforeach
                  @endif
                </div>
            </div>
        </div>
    </div>
</section>


<section class="brands-area brands-v2 ">
    <div class="container">
        <div class="section-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-section">
                        <h2 class="section-title">Our Brands</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-lsit brand-slide">

                        @if(isset($data['brand'][0] ))

                        @foreach ($data['brand']  as $data)

                        <div class="single-barnd d-flex justify-content-center align-items-center">
                            <a href="#">
                                <figure class="barnd-thumbnail">
                                    <img src="{{$data->brand_image}}" alt="brand" />
                                </figure>
                            </a>
                        </div>

                        @endforeach


                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Categories area end here  -->
<!-- Product Categories area start here  -->
<section class="Product-categories-v2  mt-50">
    <div class="container">
        <div class="section-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-section">
                        <h2 class="section-title">Top Product Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="categories-lsit categories-slide">
                        @foreach ($top_categories as $top_category )
                        <div class="single-categories">
                            <a href="#">
                                <figure class="categories-thumbnail">
                                    <img src="{{$top_category->banner}}" alt="categories" />
                                    <div class="overlay-content"><span class="categories-title">{{$top_category->name}}</span></div>
                                </figure>
                            </a>
                            <span class="categories-name">{{$top_category->name}}</span>
                            <a href="#" class="arrow-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Categories area end here  -->
<!-- Featured Product area start here  -->
<section class="featured-product featured-two-v2 mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-section">
                                <h2 class="section-title">Featured Product</h2>
                            </div>
                        </div>
                    </div>
                    <div class="featured-slide">
                        <div class="featured-list m-b-30">
                            <div class="row">
                                @foreach ($products['featured_products'] as $featuredProduct )
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="grid-single-poduct text-center">
                                        <div class="product-front">
                                            <figure class="product-thumbnail ">
                                                <img src="{{$featuredProduct->primary_image}}" alt="product"  />
                                                <span class="off bg-color">{{$featuredProduct->is_percentage_discount ? '-'.$featuredProduct->discount.' %' : '-'.$featuredProduct->discount }}</span>
                                                <span class="new">new</span>
                                            </figure>
                                            <div class="product-info bg-white">
                                                <h2 class="product-title">{{$featuredProduct->name}}</h2>
                                                {{-- <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul> --}}
                                                <h3 class="price">$ {{$featuredProduct->price}}</h3>
                                            </div>
                                        </div>
                                        <div class="product-back">
                                            <figure class="product-thumbnail ">
                                                <a href="{{route('product.details', $featuredProduct->slug)}}"><img src="{{$featuredProduct->primary_image}}" alt="product"  /></a>
                                            </figure>
                                            <div class="product-meta">
                                                <ul>
                                                    <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                </ul>
                                            </div>
                                            <a class="add-cart" href="javascript:void(0)" onclick="addToCart({{ $featuredProduct->id}})"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                                @if($loop->iteration >= 4)
                                    @break
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="featured-list m-b-30">
                            <div class="row">
                                @foreach ($products['featured_products'] as $key => $featuredProduct )
                                @if($key < 3)
                                    @continue
                                @endif
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="grid-single-poduct text-center">
                                        <div class="product-front">
                                            <figure class="product-thumbnail ">
                                                <img src="{{$featuredProduct->primary_image}}" alt="product"  />
                                                <span class="off bg-color">{{$featuredProduct->is_percentage_discount ? '-'.$featuredProduct->discount.' %' : '-'.$featuredProduct->discount }}</span>
                                                <span class="new">new</span>
                                            </figure>
                                            <div class="product-info bg-white">
                                                <h2 class="product-title">{{$featuredProduct->name}}</h2>
                                                {{-- <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul> --}}
                                                <h3 class="price">$ {{$featuredProduct->price}}</h3>
                                            </div>
                                        </div>
                                        <div class="product-back">
                                            <figure class="product-thumbnail ">
                                                <a href="{{route('product.details', $featuredProduct->slug)}}"><img src="{{$featuredProduct->primary_image}}" alt="product"  /></a>
                                            </figure>
                                            <div class="product-meta">
                                                <ul>
                                                    <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                </ul>
                                            </div>
                                            <a class="add-cart" href="javascript:void(0)" onclick="addToCart({{ $featuredProduct->id}})"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                         </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Featured Product area start here  -->
<!-- Best Selling Products start here   -->
<section class="best-selling-product home-two-selling-v2 mt-50">
    <div class="container">
        <div class="section-wrap">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-section">
                        <h2 class="section-title">Best Selling Products</h2>
                    </div>
                </div>
            </div>
            <div class="best-selling-products-slide m-b-30">

                @foreach ($products['is_best_selling_products'] as $bestProduct)
                    <div class="grid-single-poduct text-center">
                        <div class="product-front">
                            <figure class="product-thumbnail style-two">
                                <img src="{{ $bestProduct->primary_image }}" alt="product"  />
                                <span class="off bg-color bg-color">{{$bestProduct->is_percentage_discount ? '-'.$bestProduct->discount.' %' : '-'.$bestProduct->discount }}</span>
                                <span class="new">new</span>
                            </figure>
                            <div class="product-info bg-white">
                                <h2 class="product-title">{{$bestProduct->name}}</h2>
                                <ul class="product-review">
                                    <li> <i class="fas fa-star"></i> </li>
                                    <li> <i class="fas fa-star"></i> </li>
                                    <li> <i class="fas fa-star"></i> </li>
                                    <li> <i class="fas fa-star"></i> </li>
                                    <li> <i class="far fa-star"></i> </li>
                                </ul>
                                <h3 class="price">$ {{$bestProduct->price}}</h3>
                            </div>
                        </div>
                        <div class="product-back">
                            <figure class="product-thumbnail style-two">
                                <a href="{{route('product.details', $bestProduct->slug)}}"><img src="{{$bestProduct->primary_image}}" alt="product"  /></a>
                            </figure>
                            <div class="product-meta">
                                <ul>
                                    <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                </ul>
                            </div>
                            <a class="add-cart" href="javascript:void(0)" onclick="addToCart({{ $bestProduct->id}})"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
</section>
<!-- Best Selling Products end here   -->
<section class="new-arrivals-area home-two-aravel mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-section">
                                <h2 class="section-title">New Arrivals</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="arrivals-slide-two m-b-30">

                                @foreach ($products['is_new_arrival_products'] as $newProduct)
                                <div class="grid-single-poduct text-center">
                                    <div class="product-front">
                                        <figure class="product-thumbnail style-two">
                                            <img src="{{$newProduct->primary_image}}" alt="product"  />
                                            <span class="off bg-color bg-color">{{$newProduct->is_percentage_discount ? '-'.$newProduct->discount.' %' : '-'.$newProduct->discount }}</span>
                                            <span class="new">new</span>
                                        </figure>
                                        <div class="product-info bg-white">
                                            <h2 class="product-title">{{ $newProduct->name }}</h2>
                                            <ul class="product-review">
                                                <li> <i class="fas fa-star"></i> </li>
                                                <li> <i class="fas fa-star"></i> </li>
                                                <li> <i class="fas fa-star"></i> </li>
                                                <li> <i class="fas fa-star"></i> </li>
                                                <li> <i class="far fa-star"></i> </li>
                                            </ul>
                                            <h3 class="price">$ {{ $newProduct->price }}</h3>
                                        </div>
                                    </div>
                                    <div class="product-back">
                                        <figure class="product-thumbnail style-two">
                                            <a href="{{route('product.details', $newProduct->slug)}}"><img src="{{ $newProduct->primary_image }}" alt="product"  /></a>
                                        </figure>
                                        <div class="product-meta">
                                            <ul>
                                                <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                            </ul>
                                        </div>
                                        <a class="add-cart" href="javascript:void(0)" onclick="addToCart({{ $newProduct->id}})"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                    </div>
                                </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- New Arrivals area end here  -->
<!-- blog area start here  -->
@if(isset($data['recent_blogs'][0]))

<section class="blog-area home-two-blog mt-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-wrap">
                    <div class="top-section">
                        <h2 class="section-title">Our Latest Blog</h2>
                    </div>
                    <div class="blog-list blog-slide m-b-30">

                        @foreach ($data['recent_blogs'] as $blog)

                        <article  class="single-post">
                            <div class="post-thumbnail">
                                <a href="single-blog.html">
                                    <img src="{{$blog->image}}" alt="blog" />
                                </a>
                                <span class="blog-date">{{ Carbon\Carbon::parse($blog->created_at)->Format('d M, Y') }}</span>
                            </div>
                            <div class="post-info">
                                <ul class="post-meta">
                                    <li class="author">
                                        <a href="#"><i class="far fa-user"></i>{{ $blog->author->name }}</a>
                                    </li>
                                    <li class="comments">
                                        <a href="#"><i class="far fa-comments"></i>{{$blog->comments_count}} Comments</a>
                                    </li>
                                </ul>
                                <h2 class="post-title">
                                    <a href="single-blog.html">{{ substr($blog->title,0,28) }}</a>
                                </h2>
                                <p class="post-content">{{ substr($blog->first_section_description,0,150) }}</p>
                                <a href="{{ route('single_blog', encrypt($blog->id)) }}" class="post-btn">
                                    Read More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </article>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection


@section('after_script')
<script>
    function addToCart (product_id) {

        $.ajax({

            url: "{{URL::route('add.cart')}}",
            method: "POST",
            data: {
                'product_id': product_id,
                '_token': "{{csrf_token()}}"
            },
            success: function (data) {

                console.log();

                document.getElementById('cart_number').innerHTML = data['item_number'];
                document.getElementById('cart_amount').innerHTML = "<b>My Cart </b> -tk " +data['total_price'].toFixed(2);
            // ei porjonto dekhben

                if (data['success'] == true) {

                    var toastMixin = Swal.mixin({
                         toast: true,
                         icon: 'success',
                        title: 'General Title',
                         animation: false,
                        position: 'top-right',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,

                        didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                         }
                    });


                toastMixin.fire({
                animation: true,
                title:data['message']
             });
                } else {


                    var toastMixin = Swal.mixin({
                         toast: true,
                         icon: 'success',
                        title: 'General Title',
                         animation: false,
                        position: 'top-right',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,

                        didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                         }
                    });


                     toastMixin.fire({
                     title: data['message'],
                    icon: 'error'
                     });

                }
            }

        });
    }
</script>

@endsection
