<div class="section-wrap account-page-sidemenu">
    <nav class="account-page-menu">
        <ul>
            <li class="menu-has-children  {{ isset($menu) && $menu == 'profile' ? 'current-menu-item' : ' ' }}">
                <a href="#">Manag My Account</a>
                <span class="toggle-account-menu">
                    <i class="fas fa-angle-down"></i>
                </span>
                <ul class="account-sub-menu">
                    <li class="current-menu-item "><a href="{{route('profile')}}">My Profile</a></li>
                    <li class="current-menu-item"><a href="{{route('password.change')}}">Password Change</a></li>
                    <li><a href="address-book.html">Address Book</a></li>
                    <li><a href="coupon.html">Coupon</a></li>
                </ul>
            </li>
            <li><a href="my-order.html">My Order</a></li>
            <li><a href="my-reviwe.html">My Reviwe</a></li>
            <li class=" {{ isset($menu) && $menu == 'wish' ? 'current-menu-item' : ' ' }}"><a href="{{ route('wishlist') }}">My Wishlist</a></li>
        </ul>
    </nav>
</div>