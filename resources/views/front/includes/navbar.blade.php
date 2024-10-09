<div class="navbar-head">
    @include('front.includes.exchange-rates')
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand mt-4" href="{{ url('/') }}"><span class="text-secondary">Logo</span></a>
            <button class="navbar-toggler" style="background:none" type="button" data-toggle="collapse"
                data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-4" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class=" active">
                        <a lass="nav-link" href="{{ url('/') }}">
                            <strong style="color:red;">
                                <u>
                                    Home
                                </u>
                            </strong>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('tenant.index') }}">
                            <strong>Tenants</strong>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('landlord.index') }}"
                            class="{{ request()->is('landlord.index') ? 'text-red' : 'text-green' }}">
                            <strong>Landlords</strong>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href=" {{ route('user.live-auction') }} ">
                            <strong>Auction</strong>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('user.buiding-materials') }}">
                            <strong>Building Materials</strong>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('services.find') }}">
                            <strong>Find Services</strong>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('blacklist.all') }}">
                            <strong>Blacklist</strong>
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="{{ route('blog.post.all') }}">
                            <strong>Blog</strong>
                        </a>
                    </li>
                    @auth()
                        <li class="">
                            <a class="nav-link"
                                href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:non;">
                                {{ csrf_field() }}</form>
                        </li>
                    @else
                        <li class="sign-up">
                            <a class="nav-link" href="{{ route('register') }}" type="button">
                                <strong>SignUp</strong>
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link login btn" href="{{ route('user.login') }}" type="button">
                                <strong>
                                    Login
                                </strong>
                            </a>
                        </li>
                    @endauth
                </ul>
            </div> <!-- .navbar-collapse -->
        </div>
    </nav>
</div>
