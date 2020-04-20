<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="backend/#">
            <img src="backend/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="@yield('home') has-sub">
                    <a class="js-arrow" href="{{ route('homeBackend') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="backend/index.html">Dashboard 1</a>
                        </li>
                        <li>
                            <a href="backend/index2.html">Dashboard 2</a>
                        </li>
                        <li>
                            <a href="backend/index3.html">Dashboard 3</a>
                        </li>
                        <li>
                            <a href="backend/index4.html">Dashboard 4</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="backend/chart.html">
                        <i class="fas fa-chart-bar"></i>Charts</a>
                </li>
                <li>
                    <a href="backend/table.html">
                        <i class="fas fa-table"></i>Tables</a>
                </li>
                <li class="@yield('user')">
                    <a href="{{ route('home-user') }}">
                        <i class="far fa-check-square"></i>User</a>
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