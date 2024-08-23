<!-- Top header start -->

<header class="top-header th-bg" id="top-header-2">
    <div class="" style="background: black">
        <img src="{{ asset('assets/frontend/navbar-flags.png') }}" alt="logo">
    </div>
    <div class="second-header">
        <div class="row">
            <div class="col-md-12">
                <ul class="row nav-bar-row">
                    <div class="nav-link logo">
                        <li> <strong>Logo</strong> </li>
                    </div>
                    <div class="nav-link">
                        <li>
                            <a href="{{ url('/') }}">
                                <strong style="color:red;">
                                    <u>
                                        Home
                                    </u>
                                </strong>
                            </a>
                        </li>
                    </div>
                    <div class="nav-link">
                        <li>
                            <a href="{{ route('tenant.index') }}">
                                <strong style="color:#394293;">Tenants</strong>
                            </a>
                        </li>
                    </div>
                    <div class="nav-link">
                        <li>
                            <a href="{{ route('landlord.index') }}"
                                class="{{ request()->is('landlord.index') ? 'text-red' : 'text-green' }}">
                                <strong style="color:#394293;">Landlords</strong>
                            </a>
                        </li>
                    </div>
                    <div class="nav-link">
                        <li>
                            <a href=" {{ route('user.live-auction') }} ">
                                <strong style="color:#394293;">Auction</strong>
                            </a>
                        </li>
                    </div>
                    <div class="nav-link">
                        <li>
                            <a href="{{ route('user.buiding-materials') }}">
                                <strong style="color:#394293;">Building Materials</strong>
                            </a>
                        </li>
                    </div>
                    <div class="nav-link">
                        <li>
                            <a href="{{ route('services.find') }}">
                                <strong style="color:#394293;">Find Services</strong>
                            </a>
                        </li>
                    </div>
                    <div class="nav-link">
                        <li>
                            <a href="{{ route('blacklist.all') }}">
                                <strong style="color:#394293;">Blacklist</strong>
                            </a>
                        </li>
                    </div>
                    <div class="nav-link">
                        <li>
                            <a href="{{ route('blog.post.all') }}">
                                <strong style="color:#394293;">Blog</strong>
                            </a>
                        </li>
                    </div>
                    @auth()
                        <li class="nav-link">
                            <a
                                href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:non;">
                                {{ csrf_field() }}</form>
                        </li>
                    @else
                        <div class="nav-link login">
                            <div class="row">
                                <li>
                                    <a href="{{ route('register') }}" type="button" class="btn bt">
                                        <strong style="color:#394293;">SignUp</strong>
                                    </a>
                                </li>
                                <li class="ml-3">
                                    <a href="{{ route('login') }}" type="button" class="btn login-button"
                                        style="color:#394293;">
                                        <strong>
                                            Login
                                        </strong>
                                    </a>
                                </li>
                            </div>
                        </div>
                    @endauth
                </ul>
                <div class="toggle_btn" style="color:#394293;">
                    <i class="fa fa-list"></i>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->
