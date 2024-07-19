<div class="navbar-head">
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-0" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="">
                        <a class="" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('tenant.index') }}">
                            Tenants
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('landlord.index') }}"
                            class="{{ request()->is('landlord.index') ? 'text-red' : 'text-green' }}">
                            Landlords
                        </a>
                    </li>
                    <li class="">
                        <a class="" href=" {{ route('user.live-auction') }} ">
                            Auction
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('user.buiding-materials') }}">
                            Building Materials
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('services.find') }}">
                            Find Services
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('blacklist.all') }}">
                            Blacklist
                        </a>
                    </li>
                    <li class="">
                        <a class="" href="{{ route('blog.post.all') }}">
                            Blog
                        </a>
                    </li>
                    @auth()
                        <li class="">
                            <a class="logout"
                                href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:non;">
                                {{ csrf_field() }}</form>
                        </li>
                    @else
                        <li class="sign-up">
                            <a class="" href="{{ route('register') }}" type="button">
                                SignUp
                            </a>
                        </li>
                        <li class="">
                            <a class=" login btn" href="{{ route('login') }}" type="button">
                                </strong>
                            </a>
                        </li>
                    @endauth
                </ul>
            </div> <!-- .navbar-collapse -->
        </div>
    </nav>
</div>
