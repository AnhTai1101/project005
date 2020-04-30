<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="backend/#">
            <img src="backend/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="@yield('size') @yield('color') @yield('type') @yield('category') has-sub">
                    <a href="#" class="js-arrow">
                        <i class="fas fa-tachometer-alt"></i>Thuộc tính
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li class="@yield('type')">
                            <a href="{{ route('home-type') }}">Kiểu</a>
                        </li>
                        <li class="@yield('category')">
                            <a href="{{ route('home-category') }}">Danh mục</a>
                        </li>
                        <li class="@yield('size')">
                            <a href="{{ route('home-size') }}">Kích cỡ</a>
                        </li>
                        <li class="@yield('color')">
                            <a href="{{ route('home-color') }}">Màu sắc</a>
                        </li>
                    </ul>
                </li>
                <li class="@yield('product')">
                    <a href="{{ route('home-product') }}">
                        <i class="fas fa-archive"></i>Sản phẩm
                    </a>
                </li>
                <li class="@yield('slide')">
                    <a href="{{ route('home-slide') }}">
                        <i class="fas fa-table"></i>Slide</a>
                </li>
                <li class="@yield('user')">
                    <a href="{{ route('home-user') }}">
                        <i class="fas fa-users"></i>User</a>
                </li>
                <li>
                    <a href="backend/calendar.html">
                        <i class="fas fa-calendar-alt"></i>Calendar</a>
                </li>
                <li>
                    <a href="backend/map.html">
                        <i class="fas fa-map-marker-alt"></i>Maps</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="backend/#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="backend/login.html">Login</a>
                        </li>
                        <li>
                            <a href="backend/register.html">Register</a>
                        </li>
                        <li>
                            <a href="backend/forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="backend/#">
                        <i class="fas fa-desktop"></i>UI Elements</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="backend/button.html">Button</a>
                        </li>
                        <li>
                            <a href="backend/badge.html">Badges</a>
                        </li>
                        <li>
                            <a href="backend/tab.html">Tabs</a>
                        </li>
                        <li>
                            <a href="backend/card.html">Cards</a>
                        </li>
                        <li>
                            <a href="backend/alert.html">Alerts</a>
                        </li>
                        <li>
                            <a href="backend/progress-bar.html">Progress Bars</a>
                        </li>
                        <li>
                            <a href="backend/modal.html">Modals</a>
                        </li>
                        <li>
                            <a href="backend/switch.html">Switchs</a>
                        </li>
                        <li>
                            <a href="backend/grid.html">Grids</a>
                        </li>
                        <li>
                            <a href="backend/fontawesome.html">Fontawesome Icon</a>
                        </li>
                        <li>
                            <a href="backend/typo.html">Typography</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>