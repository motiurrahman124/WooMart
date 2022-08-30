@extends('Frontend.master')
@section('main_content')
<div class="single-shop-page pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-wrap">
                    <div class="product-single-view">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-slier-big-image">
                                    <div class="product-priview-slide">
                                        <a href="{{$product->primary_image}}" data-fancybox="gallery">
                                            <img class="example-image" src="{{$product->primary_image}}" alt="image-1">
                                        </a>
                                        {{-- <a href="images/gallery/original/02_o_car.jpg" data-fancybox="gallery">
                                            <img class="example-image" src="images/gallery/original/02_o_car.jpg" alt="image-1">
                                        </a>
                                        <a href="images/gallery/original/03_r_car.jpg" data-fancybox="gallery">
                                            <img class="example-image" src="images/gallery/original/03_r_car.jpg" alt="image-1">
                                        </a>
                                        <a href="images/gallery/original/04_g_car.jpg" data-fancybox="gallery">
                                            <img class="example-image" src="images/gallery/original/04_g_car.jpg" alt="image-1">
                                        </a> --}}
                                    </div>
                                </div>
                                <div class="product-thumbnail-image">
                                    <ul class="product-thumb-silide">
                                        <li><img src="{{$product->primary_image}}" alt="cart" /></li>
                                        {{-- <li><img src="images/gallery/thumbs/02_o_car.jpg" alt="cart" /></li>
                                        <li><img src="images/gallery/thumbs/03_r_car.jpg" alt="cart" /></li>
                                        <li><img src="images/gallery/thumbs/04_g_car.jpg" alt="cart" /></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-details-content ">
                                    <h3 class="product-title">{{$product->name}}</h3>
                                    <div class="quickview-peragraph ">
                                        <p>{{$product->about_product}}</p>
                                    </div>
                                    <div class="price-box">
                                        @if($product->discount > 0) 
                                          <span class="price">${{$product->discount_price}}</span> <span class="old-price"><s>${{$product->price}}</s></span><span class="off"> {{$product->is_percentage_discount ? '-'.$product->discount.' %' : '-'.$product->discount }} </span>
                                        @else
                                           <span class="price">${{$product->price}}</span>
                                        @endif
                                    </div>
                                    {{-- <div class="single-variable color-variable">
                                        <h4>Color</h4>
                                        <ul>
                                            <li>
                                                <input type="radio" id="oragne" name="color" value="oragne" />
                                                <label class="color" style="background: #ff8615;" for="oragne"></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="black" name="color" value="black" />
                                                <label class="color" style="background: #000000;" for="black"></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="white" name="color" value="white" />
                                                <label class="color" style="background: #ffffff;" for="white"></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="blue" name="color" value="blue" />
                                                <label class="color" style="background: #007fdb;" for="blue"></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="violet" name="color" value="violet" />
                                                <label class="color" style="background: #b708e2;" for="violet"></label>
                                            </li>
                                            <li>
                                                <input type="radio" id="red" name="color" value="red" />
                                                <label class="color" style="background: #db3636;" for="red"></label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="single-variable size-variable">
                                        <h4>Sizes</h4>
                                        <ul>
                                            <li>
                                                <input type="radio" id="s" name="size" value="s" />
                                                <label class="size" for="s">S</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="M" name="size" value="M" />
                                                <label class="size" for="M">M</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="L" name="size" value="L" />
                                                <label class="size" for="L">L</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="XL" name="size" value="XL" />
                                                <label class="size" for="XL">XL</label>
                                            </li>
                                            <li>
                                                <input type="radio" id="XXL" name="size" value="XXL" />
                                                <label class="size" for="XXL">XXL</label>
                                            </li>
                                        </ul>
                                    </div> --}}
                                    <div class="quickview-cart-box">
                                        <h4>Quantity</h4>
                                        <div class="quickview-cart-wrap d-flex align-items-center ">
                                            <div class="quickview-quality">
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton btn">-</div>
                                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                    <div class="inc qtybutton btn">+</div>
                                                </div>
                                            </div>
                                            @if($product->quantity > 0 )
                                            <div class="stock in-stock ">
                                                <p>Available: <span>In stock</span></p>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-product-bottom d-flex justify-content-between align-items-center">
                                    <div class="button-list">
                                        <ul class="d-flex align-items-center">
                                            <li><a class="btn back-shop" href="shop.html"> <i class="fas fa-angle-left"></i> Back to shopping</a></li>
                                            <li><a class="btn buy-now" href="#"> Buy Now</a></li>
                                            <li><a class="btn add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a></li>
                                        </ul>
                                    </div> 
                                    <div class="fevatir-icon">
                                        <a href="#"><i class="flaticon-heart"></i></a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-wrap mt-50">
                    <div class="porduct-review">
                        <ul class="nav nav-tabs" id="reviewtab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Product Overview</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Customers Review</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="reviewtabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                                <div class="product-description">
                                    <h3 class="section-top-title">Product Description</h3>
                                    <p>
                                        {{$product->description}}
                                    </p>
                                    {{-- <div class="table-responsive">
                                        <table class="table description-table">
                                            <thead>
                                              <tr>
                                                <th scope="col">Size</th>
                                                <th scope="col">Chest</th>
                                                <th scope="col">Shoulder</th>
                                                <th scope="col">Lenght</th>
                                                <th scope="col">Sleeve</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <td>S</td>
                                                <td>56</td>
                                                <td>36</td>
                                                <td>45</td>
                                                <td>60</td>
                                              </tr>
                                              <tr>
                                                <td>M</td>
                                                <td>56</td>
                                                <td>36</td>
                                                <td>45</td>
                                                <td>60</td>
                                              </tr>
                                              <tr>
                                                <td>L</td>
                                                <td>56</td>
                                                <td>36</td>
                                                <td>45</td>
                                                <td>60</td>
                                              </tr>
                                              <tr>
                                                <td>XL</td>
                                                <td>56</td>
                                                <td>36</td>
                                                <td>45</td>
                                                <td>60</td>
                                              </tr>
                                              <tr>
                                                <td>XXL</td>
                                                <td>56</td>
                                                <td>36</td>
                                                <td>45</td>
                                                <td>60</td>
                                              </tr>
                                            </tbody>
                                        </table>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <div class="product-review-info">
                                    <h3 class="section-top-title">Customer’s Reviews</h3>
                                    <div class="review-list">
                                        <ul>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="parcent">80%</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span class="parcent">11%</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span class="parcent">9%</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span class="parcent">00%</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custmar-review">
                                        <div class="single-review">
                                            <div class="media">
                                                <div class="author-image mr-5">
                                                    <img class="autor-iamge" src="images/review-author-iamge.png" alt="images" />
                                                    <a class="author-name d-block" href="#">Rima Khan</a>
                                                </div>
                                                <div class="media-body">
                                                 <ul>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                 </ul>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit blandit tortor donec viverra viverra nisi placerat tempor.</p>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="single-review">
                                            <div class="media">
                                                <div class="author-image mr-5">
                                                    <img class="autor-iamge" src="images/review-author-iamge.png" alt="images" />
                                                    <a class="author-name d-block" href="#">Rima Khan</a>
                                                </div>
                                                <div class="media-body">
                                                 <ul>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                 </ul>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit blandit tortor donec viverra viverra nisi placerat tempor.</p>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="single-review">
                                            <div class="media">
                                                <div class="author-image mr-5">
                                                    <img class="autor-iamge" src="images/review-author-iamge.png" alt="images" />
                                                    <a class="author-name d-block" href="#">Rima Khan</a>
                                                </div>
                                                <div class="media-body">
                                                 <ul>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                 </ul>
                                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Blandit blandit tortor donec viverra viverra nisi placerat tempor.</p>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-wrap mt-50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-section ">
                                <h2 class="section-title">See Related Product</h2>
                            </div>
                        </div>
                    </div>
                    <div class="offer-product-slide">
                        <div class="grid-view-list m-b-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-listview">
                                        <div class="media">
                                            <div class="product-thumbnail mr-5">
                                                <span class="sale">Sale</span>
                                                <a href="single-shop.html">
                                                    <img src="images/product/list1.png" alt="list product" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="product-title mt-0">
                                                  <a href="single-shop.html">Fashion Girl Top</a>
                                                </h3>
                                                <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul>
                                                <div class="price-list">
                                                    <span class="price">$225.00</span>
                                                    <span class="old-price">$225.00</span>
                                                </div>
                                                <a class="add-cart" href="#"> 
                                                    <i class="flaticon-shopping-cart-empty-side-view"></i> 
                                                    Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-listview">
                                        <div class="media">
                                            <div class="product-thumbnail mr-5">
                                                <span class="sale">Sale</span>
                                                <a href="single-shop.html">
                                                    <img src="images/product/list2.png" alt="list product" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="product-title mt-0">
                                                  <a href="single-shop.html">Baby Suit</a>
                                                </h3>
                                                <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul>
                                                <div class="price-list">
                                                    <span class="price">$225.00</span>
                                                    <span class="old-price">$225.00</span>
                                                </div>
                                                <a class="add-cart" href="#"> 
                                                    <i class="flaticon-shopping-cart-empty-side-view"></i> 
                                                    Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-listview">
                                        <div class="media">
                                            <div class="product-thumbnail mr-5">
                                                <span class="sale">Sale</span>
                                                <a href="single-shop.html">
                                                    <img src="images/product/list3.png" alt="list product" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="product-title mt-0">
                                                  <a href="single-shop.html">Dimond Necklese</a>
                                                </h3>
                                                <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul>
                                                <div class="price-list">
                                                    <span class="price">$225.00</span>
                                                    <span class="old-price">$225.00</span>
                                                </div>
                                                <a class="add-cart" href="#"> 
                                                    <i class="flaticon-shopping-cart-empty-side-view"></i> 
                                                    Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-listview">
                                        <div class="media">
                                            <div class="product-thumbnail mr-5">
                                                <span class="sale">Sale</span>
                                                <a href="single-shop.html">
                                                    <img src="images/product/list4.png" alt="list product" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="product-title mt-0">
                                                  <a href="single-shop.html">Man Suit Set</a>
                                                </h3>
                                                <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul>
                                                <div class="price-list">
                                                    <span class="price">$225.00</span>
                                                    <span class="old-price">$225.00</span>
                                                </div>
                                                <a class="add-cart" href="#"> 
                                                    <i class="flaticon-shopping-cart-empty-side-view"></i> 
                                                    Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-view-list m-b-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-listview">
                                        <div class="media">
                                            <div class="product-thumbnail mr-5">
                                                <span class="sale">Sale</span>
                                                <a href="single-shop.html">
                                                    <img src="images/product/list1.png" alt="list product" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="product-title mt-0">
                                                  <a href="single-shop.html">Fashion Girl Top</a>
                                                </h3>
                                                <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul>
                                                <div class="price-list">
                                                    <span class="price">$225.00</span>
                                                    <span class="old-price">$225.00</span>
                                                </div>
                                                <a class="add-cart" href="#"> 
                                                    <i class="flaticon-shopping-cart-empty-side-view"></i> 
                                                    Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-listview">
                                        <div class="media">
                                            <div class="product-thumbnail mr-5">
                                                <span class="sale">Sale</span>
                                                <a href="single-shop.html">
                                                    <img src="images/product/list2.png" alt="list product" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="product-title mt-0">
                                                  <a href="single-shop.html">Baby Suit</a>
                                                </h3>
                                                <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul>
                                                <div class="price-list">
                                                    <span class="price">$225.00</span>
                                                    <span class="old-price">$225.00</span>
                                                </div>
                                                <a class="add-cart" href="#"> 
                                                    <i class="flaticon-shopping-cart-empty-side-view"></i> 
                                                    Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-listview">
                                        <div class="media">
                                            <div class="product-thumbnail mr-5">
                                                <span class="sale">Sale</span>
                                                <a href="single-shop.html">
                                                    <img src="images/product/list3.png" alt="list product" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="product-title mt-0">
                                                  <a href="single-shop.html">Dimond Necklese</a>
                                                </h3>
                                                <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul>
                                                <div class="price-list">
                                                    <span class="price">$225.00</span>
                                                    <span class="old-price">$225.00</span>
                                                </div>
                                                <a class="add-cart" href="#"> 
                                                    <i class="flaticon-shopping-cart-empty-side-view"></i> 
                                                    Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="product-listview">
                                        <div class="media">
                                            <div class="product-thumbnail mr-5">
                                                <span class="sale">Sale</span>
                                                <a href="single-shop.html">
                                                    <img src="images/product/list4.png" alt="list product" />
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h3 class="product-title mt-0">
                                                  <a href="single-shop.html">Man Suit Set</a>
                                                </h3>
                                                <ul class="product-review">
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="fas fa-star"></i> </li>
                                                    <li> <i class="far fa-star"></i> </li>
                                                </ul>
                                                <div class="price-list">
                                                    <span class="price">$225.00</span>
                                                    <span class="old-price">$225.00</span>
                                                </div>
                                                <a class="add-cart" href="#"> 
                                                    <i class="flaticon-shopping-cart-empty-side-view"></i> 
                                                    Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-area">
                    <div class="single-widget ">
                        <div class="widget-title text-center">
                            <h3>Filters</h3>
                        </div>
                        <div class="widget-wrap catagory-widget">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">Women’s Clothing</a></li>
                                <li><a href="#">Men’s Clothing</a></li>
                                <li><a href="#">Women’s Clothing</a></li>
                                <li><a href="#">Top Wear</a></li>
                            </ul>
                        </div>
                        <div class="widget-wrap price-widget">
                            <h4>Price</h4>
                            <div>
                                <input type="text" id="amount" readonly />
                            </div>
                            <div id="slider-range"></div>
                        </div>
                        <div class="widget-wrap Brand-widget">
                            <h4>Brand</h4>
                            <div class="check-box-inner">
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test1">
                                    <label for="test1"> Blue Moon</label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test2">
                                    <label for="test2"> Eastecy</label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test3">
                                    <label for="test3"> Kalvin Clein</label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test4">
                                    <label for="test4"> Armaani</label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test5">
                                    <label for="test5"> Nike</label>
                                </div>
                                <div class="filter-check-box">
                                    <input type="checkbox" id="test6">
                                    <label for="test6"> Polo</label>
                                </div>
                            </div>
                        </div>
                        <div class="widget-wrap review-widget">
                            <h4>Average Reviews</h4>
                            <ul>
                                <li>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="up">& Up</span>
                                </li>
                                <li>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="up">& Up</span>
                                </li>
                                <li>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="up">& Up</span>
                                </li>
                                <li>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="far fa-star"></span>
                                    <span class="up">& Up</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-widget add-banner-widget ">
                        <div class="widget-title text-center">
                            <h3>Girls Collections</h3>
                        </div>
                        <figure class="add-image">
                            <img src="images/product/14.png" alt="show" />
                        </figure>
                    </div>
                    <div class="single-widget ">
                        <a href="#">
                            <img src="images/banner-add.png" alt="banner add" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection