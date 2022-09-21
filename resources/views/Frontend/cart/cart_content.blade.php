<div class="row">
    <div class="col-lg-8">
        <div class="section-wrap">
            <h3 class="sectin-wrap-title">Shopping Cart</h3>
            <div class="table-responsive m-y-20">
                <div class="primary-table">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Qnty</th>
                                <th>Total</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $item)
                            <tr>
                                <td>
                                    <div class="producd-info d-flex align-items-center has-open">
                                        <a href="#" class="product-img mr-3">
                                            <img src="{{ $item->product->primary_image }}" alt="product" />
                                        </a>
                                        <a class="product-name" href="#">{{ $item->product->name }}</a>
                                    </div>
                                </td>
                                <td>{{ $item->product->discount_price }}</td>
                                <td>
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton" onclick="return cartDecrement('{{ $item->id}}','{{ $item->qty }}')">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{ $item->qty }}" />
                                        <div class="inc qtybutton" onclick="return cartIncrement('{{ $item->id}}','{{ $item->qty }}')">+</div>
                                    </div>
                                </td>
                                <td>{{ $item->product->discount_price * $item->qty }}</td>
                                <td>
                                    <a class="trash-btn" href="{{ route('cart.remove', $item->id) }}"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="cart-bottom mt-5">
                <ul class="d-flex align-items-center justify-content-between">
                    <li><a class="btn-style-two back-btn" href="#"> <i class="fas fa-angle-left"></i> Back to shopping</a></li>
                    <li><a class="btn-style-two" href="#">Update Cart</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="cart-page-right">
            <div class="card-right-wrap coupon-code-info ">
                <h3 class="sectin-wrap-title">Discount Coupon</h3>
                <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="coupon" name="coupon" placeholder="Coupon Code" />
                    </div>
                    <button type="submit" class="apply-btn">Apply</button>
                </form>
            </div>
            <div class="card-right-wrap proceed-checkout-info">
                <ul>
                    <li>Product Cost <span> {{ cartAmount() }}</span></li>
                    <li>TAX (5%) <span>{{ totalTax(cartAmount(), 5) }}</stpan></li>
                    <li>Shipping Cost <span>100</span></li>
                    <li class="total">Total <span>{{  cartAmount() + totalTax(cartAmount(), 5) + 100 }}</span></li>
                </ul>
                @if(Auth::user())
                    <a class="checkout-btn" href="{{ route('checkout') }}">Proceed to Checkout</a>
                @else
                    <a class="checkout-btn" href="{{ route('login.form') }}">Login first to Checkout</a>
                @endif
                
            </div>
        </div>
    </div>
</div>
