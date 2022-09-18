@extends('Frontend.profile.master')
@section('content')
<div class="col-lg-9">
    <div class="section-wrap">
        <div class="account-page-header">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="title">Wishlist</h3>
                </div>
            </div>
        </div>
        <div class="table-responsive m-y-20">
            <div class="primary-table ">
                <table class="table " >
                    <tbody>
                        @foreach ($wishlist as $item)
                        <tr>
                            <td>
                                <div class="producd-info d-flex align-items-center">
                                    <a href="#" class="product-img mr-4">
                                        <img src="{{ asset($item->product->primary_image) }}" alt="product" />
                                    </a>
                                    <div class="product-content">
                                        <a class="product-name" href="#">{{ $item->product->name }}</a>
                                        <ul class="product-review">
                                            <li><i class="fas fa-star"></i></li>
                                            {{-- <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li> --}}
                                        </ul>
                                        <span class="stock">In Stock</span>
                                    </div>
                                </div>
                            </td>
                            <td><span class="price">${{ $item->product->discount_price }}</span></td>
                            <td>
                                <a class="add-cart" href="javascript:void(0)" onclick="addToCart({{ $item->product->id}})"> <i class="flaticon-shopping-cart-empty-side-view"></i> Add to Cart</a>
                            </td>
                            <td>
                                <a class="trash-btn" href="{{ route('wishlist.remove', $item->id) }}"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection