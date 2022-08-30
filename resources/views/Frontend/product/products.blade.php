@extends('Frontend.master')
@section('main_content')
<div class="shop-page-aera mt-45 pb-50">
    <div class="container">
        <div class="shop-page-top">
            <div class="row align-items-center">
                <div class="col-lg-5 order-1 order-lg-0">
                    <ul class="breadcrumb-page">
                        <li><a href="#">Categories</a></li>
                        <li><a href="#"> Women Clothing</a></li>
                        <li>Top Wear</li>
                    </ul>
                </div>
                <div class="col-lg-7 ">
                    <div class="shop-top-rght d-flex align-items-center justify-content-lg-end">
                        <!-- list-grad-filter start here  -->
                        <div class="list-grid-wrap">
                            <ul class="nav nav-tabs" id="listgridtab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="true">
                                        <i class="flaticon-list"></i>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="grid-tab" data-toggle="tab" href="#grid" role="tab" aria-controls="grid" aria-selected="false">
                                        <i class="flaticon-grid-1"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- list-grad-filter end here  -->
                        <!-- catagor-filter start here  -->
                        <div class="catagor-btn-list">
                            <ul>
                                <li><a href="#">Best Match</a></li>
                                <li class="active"><a href="#">Trending</a></li>
                                <li><a href="#">Newest</a></li>
                                <li><a href="#">Best Rated</a></li>
                            </ul>
                        </div>
                        <!-- catagor-filter end here  -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-50">
            <div class="col-lg-9">
                <div class="tab-content" id="listgridtabcontent">
                    <!-- list view item start here  -->
                    <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="list-single-poduct d-flex  align-items-center justify-content-between">
                            <div class="product-thumbanial">
                                <span class="off">-20%</span>
                                <a href="single-shop.html">
                                    <img src="images/product/10.png" alt="product" />
                                </a>
                            </div>
                            <div class="product-info d-flex align-items-center justify-content-between">
                                <div class="product-left">
                                    <h3><a href="single-shop.html">Man Suit Set</a></h3>
                                    <ul class="review-list">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae senectus at sed nullam massa vestibulum congue. </p>
                                </div>
                                <div class="product-right text-md-right">
                                    <h2 class="price">$225.00</h2>
                                    <div class="fevatir-icon">
                                        <a href="#"><i class="flaticon-heart"></i></a>
                                    </div>
                                    <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-single-poduct d-flex  align-items-center justify-content-between">
                            <div class="product-thumbanial">
                                <a href="single-shop.html">
                                    <img src="images/product/11.png" alt="product" />
                                </a>
                            </div>
                            <div class="product-info d-flex align-items-center justify-content-between">
                                <div class="product-left">
                                    <h3><a href="single-shop.html">Man Suit Set</a></h3>
                                    <ul class="review-list">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae senectus at sed nullam massa vestibulum congue. </p>
                                </div>
                                <div class="product-right text-md-right">
                                    <h2 class="price">$225.00</h2>
                                    <div class="fevatir-icon">
                                        <a href="#"><i class="flaticon-heart"></i></a>
                                    </div>
                                    <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-single-poduct d-flex  align-items-center justify-content-between">
                            <div class="product-thumbanial">
                                <a href="single-shop.html">
                                    <img src="images/product/2.png" alt="product" />
                                </a>
                            </div>
                            <div class="product-info d-flex align-items-center justify-content-between">
                                <div class="product-left">
                                    <h3><a href="single-shop.html">Man Suit Set</a></h3>
                                    <ul class="review-list">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae senectus at sed nullam massa vestibulum congue. </p>
                                </div>
                                <div class="product-right text-md-right">
                                    <h2 class="price">$225.00</h2>
                                    <div class="fevatir-icon">
                                        <a href="#"><i class="flaticon-heart"></i></a>
                                    </div>
                                    <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-single-poduct d-flex  align-items-center justify-content-between">
                            <div class="product-thumbanial">
                                <a href="single-shop.html">
                                    <img src="images/product/3.png" alt="product" />
                                </a>
                            </div>
                            <div class="product-info d-flex align-items-center justify-content-between">
                                <div class="product-left">
                                    <h3><a href="single-shop.html">Man Suit Set</a></h3>
                                    <ul class="review-list">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae senectus at sed nullam massa vestibulum congue. </p>
                                </div>
                                <div class="product-right text-md-right">
                                    <h2 class="price">$225.00</h2>
                                    <div class="fevatir-icon">
                                        <a href="#"><i class="flaticon-heart"></i></a>
                                    </div>
                                    <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-single-poduct d-flex  align-items-center justify-content-between">
                            <div class="product-thumbanial">
                                <a href="single-shop.html">
                                    <img src="images/product/4.png" alt="product" />
                                </a>
                            </div>
                            <div class="product-info d-flex align-items-center justify-content-between">
                                <div class="product-left">
                                    <h3><a href="single-shop.html">Man Suit Set</a></h3>
                                    <ul class="review-list">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae senectus at sed nullam massa vestibulum congue. </p>
                                </div>
                                <div class="product-right text-md-right">
                                    <h2 class="price">$225.00</h2>
                                    <div class="fevatir-icon">
                                        <a href="#"><i class="flaticon-heart"></i></a>
                                    </div>
                                    <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-single-poduct d-flex  align-items-center justify-content-between">
                            <div class="product-thumbanial">
                                <a href="single-shop.html">
                                    <img src="images/product/5.png" alt="product" />
                                </a>
                            </div>
                            <div class="product-info d-flex align-items-center justify-content-between">
                                <div class="product-left">
                                    <h3><a href="single-shop.html">Man Suit Set</a></h3>
                                    <ul class="review-list">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae senectus at sed nullam massa vestibulum congue. </p>
                                </div>
                                <div class="product-right text-md-right">
                                    <h2 class="price">$225.00</h2>
                                    <div class="fevatir-icon">
                                        <a href="#"><i class="flaticon-heart"></i></a>
                                    </div>
                                    <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list view item end here  -->
                    <!-- grid view item start here  -->
                    <div class="tab-pane fade" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="section-wrap">
                            <div class="featured-list m-b-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail">
                                                    <img src="images/product/7.png" alt="product"  />
                                                    <span class="off">-20%</span>
                                                    <span class="new">new</span>
                                                    <a class="heart" href="#"><i class="flaticon-heart"></i> </a>
                                                </figure>
                                                <div class="product-info">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <p class="product-content">Nunc, gravida venenatis mattis neque volutpat</p>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail">
                                                    <a href="single-shop.html"><img src="images/product/man.png" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail">
                                                    <img src="images/product/2.png" alt="product"  />
                                                    <span class="off">-20%</span>
                                                    <span class="new">new</span>
                                                    <a class="heart" href="#"><i class="flaticon-heart"></i> </a>
                                                </figure>
                                                <div class="product-info">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <p class="product-content">Nunc, gravida venenatis mattis neque volutpat</p>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail">
                                                    <a href="single-shop.html"><img src="images/product/man.png" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail">
                                                    <img src="images/product/12.png" alt="product"  />
                                                    <span class="off">-20%</span>
                                                    <span class="new">new</span>
                                                    <a class="heart" href="#"><i class="flaticon-heart"></i> </a>
                                                </figure>
                                                <div class="product-info">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <p class="product-content">Nunc, gravida venenatis mattis neque volutpat</p>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail">
                                                    <a href="single-shop.html"><img src="images/product/man.png" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail">
                                                    <img src="images/product/13.png" alt="product"  />
                                                    <span class="off">-20%</span>
                                                    <span class="new">new</span>
                                                    <a class="heart" href="#"><i class="flaticon-heart"></i> </a>
                                                </figure>
                                                <div class="product-info">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <p class="product-content">Nunc, gravida venenatis mattis neque volutpat</p>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail">
                                                    <a href="single-shop.html"><img src="images/product/man.png" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail">
                                                    <img src="images/product/14.png" alt="product"  />
                                                    <span class="off">-20%</span>
                                                    <span class="new">new</span>
                                                    <a class="heart" href="#"><i class="flaticon-heart"></i> </a>
                                                </figure>
                                                <div class="product-info">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <p class="product-content">Nunc, gravida venenatis mattis neque volutpat</p>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail">
                                                    <a href="single-shop.html"><img src="images/product/man.png" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail">
                                                    <img src="images/product/17.png" alt="product"  />
                                                    <span class="off">-20%</span>
                                                    <span class="new">new</span>
                                                    <a class="heart" href="#"><i class="flaticon-heart"></i> </a>
                                                </figure>
                                                <div class="product-info">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <p class="product-content">Nunc, gravida venenatis mattis neque volutpat</p>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail">
                                                    <a href="single-shop.html"><img src="images/product/man.png" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail">
                                                    <img src="images/product/15.png" alt="product"  />
                                                    <span class="off">-20%</span>
                                                    <span class="new">new</span>
                                                    <a class="heart" href="#"><i class="flaticon-heart"></i> </a>
                                                </figure>
                                                <div class="product-info">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <p class="product-content">Nunc, gravida venenatis mattis neque volutpat</p>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail">
                                                    <a href="single-shop.html"><img src="images/product/man.png" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail">
                                                    <img src="images/product/16.png" alt="product"  />
                                                    <span class="off">-20%</span>
                                                    <span class="new">new</span>
                                                    <a class="heart" href="#"><i class="flaticon-heart"></i> </a>
                                                </figure>
                                                <div class="product-info">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <p class="product-content">Nunc, gravida venenatis mattis neque volutpat</p>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail">
                                                    <a href="single-shop.html"><img src="images/product/man.png" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="grid-single-poduct text-center">
                                            <div class="product-front">
                                                <figure class="product-thumbnail">
                                                    <img src="images/product/4.png" alt="product"  />
                                                    <span class="off">-20%</span>
                                                    <span class="new">new</span>
                                                    <a class="heart" href="#"><i class="flaticon-heart"></i> </a>
                                                </figure>
                                                <div class="product-info">
                                                    <h2 class="product-title">Man Suit Set</h2>
                                                    <ul class="product-review">
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="fas fa-star"></i> </li>
                                                        <li> <i class="far fa-star"></i> </li>
                                                    </ul>
                                                    <p class="product-content">Nunc, gravida venenatis mattis neque volutpat</p>
                                                    <h3 class="price">$225.00</h3>
                                                </div>
                                            </div>
                                            <div class="product-back">
                                                <figure class="product-thumbnail">
                                                    <a href="single-shop.html"><img src="images/product/man.png" alt="product"  /></a>
                                                </figure>
                                                <div class="product-meta">
                                                    <ul>
                                                        <li><a href="#"><i class="flaticon-heart"></i> </a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="flaticon-eye"></i> </a></li>
                                                    </ul>
                                                </div>
                                                <a class="add-cart" href="#"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- grid view item start here  -->
                </div>
                <div class="pagination-area mt-50">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="pagination-page d-flex align-items-center">
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
                        <div class="col-lg-4 text-lg-right">
                            <div class="show-per-page ">
                                <div class="perpage-wrap d-flex  align-items-center">
                                    <span class="show-page">Show Per Page</span>
                                    <select class="niceselect">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
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
                    <div class="single-widget best-sell-widget">
                        <div class="widget-title text-center">
                            <h3>Best Sell</h3>
                        </div>
                       <div class="widget-wrap product-list">
                           <div class="bestsell-product">
                                <div class="media">
                                    <a href="#" class="product-img mr-3">
                                        <img src="images/product/bs1.png" alt="img">
                                    </a>
                                    <div class="media-body ">
                                        <h3 class="product-title mt-0"><a href="#">Baby Shoe</a></h3>
                                        <ul class="product-review">
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="far fa-star"></i> </li>
                                        </ul>
                                        <span class="price">$120</span>
                                    </div>
                                </div>
                           </div>
                           <div class="bestsell-product">
                                <div class="media">
                                    <a href="#" class="product-img mr-3">
                                        <img src="images/product/bs2.png" alt="img">
                                    </a>
                                    <div class="media-body ">
                                        <h3 class="product-title mt-0"><a href="#">Sunglass</a></h3>
                                        <ul class="product-review">
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="far fa-star"></i> </li>
                                        </ul>
                                        <span class="price">$120</span>
                                    </div>
                                </div>
                           </div>
                           <div class="bestsell-product">
                                <div class="media">
                                    <a href="#" class="product-img mr-3">
                                        <img src="images/product/bs3.png" alt="img">
                                    </a>
                                    <div class="media-body ">
                                        <h3 class="product-title mt-0"><a href="#">Man T-shirt</a></h3>
                                        <ul class="product-review">
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="far fa-star"></i> </li>
                                        </ul>
                                        <span class="price">$120</span>
                                    </div>
                                </div>
                           </div>
                           <div class="bestsell-product">
                                <div class="media">
                                    <a href="#" class="product-img mr-3">
                                        <img src="images/product/bs4.png" alt="img">
                                    </a>
                                    <div class="media-body ">
                                        <h3 class="product-title mt-0"><a href="#">Girl Top</a></h3>
                                        <ul class="product-review">
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="fas fa-star"></i> </li>
                                            <li> <i class="far fa-star"></i> </li>
                                        </ul>
                                        <span class="price">$120</span>
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
@endsection