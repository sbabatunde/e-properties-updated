<div class="sideBar active">
    <div class="top">
        <div class="logo">
            <i class="fa fa-line-chart mr-2"></i>
            <span class="mr-2">Algorithm</span>
            @php
                use Carbon\Carbon;
                $today = Carbon::now()->format('d/m/Y');
                // $today->format('Y-m-d');
            @endphp
            {{ $today }}
        </div>
        <i class="fa fa-list" id="btn"></i>
    </div>
    <div class="user">
        <img src="../assets/admin/images/users/user1.jpeg" alt="ay" class="user-img">
        <div>
            <p class="bold"> Clint B.</p>
            <p>Admin</p>
        </div>
    </div>
    <ul>
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="glyphicon glyphicon-th"></i>
                <span class="nav-item">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>

        <div class="menu">
            <i class="fa fa-home"></i>
            <span class="nav-item">Property</span>
            <i class="bx bx-chevron-down nav-item"></i>
            <span class="tooltip">Property</span>
        </div>
        <div class="menu-dropdown">
            <div class="sub-menu">
                <span class="menu">
                    <a href="{{ route('admin.properties.all') }}">
                        All
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.add.listing') }}">
                        Post
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.deals.all') }}">
                        Deals
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.trending.all') }}">
                        Trending
                    </a>
                </span>
            </div>
        </div>
        <li>
            <a href="{{ route('admin.listings.all') }}">
                <i class="fa fa-archive "></i>
                <span class="nav-item">Listings</span>
            </a>
            <span class="tooltip">My Listing</span>
        </li>
        <li>
            <a href="{{ route('admin.profile') }}">
                <i class="glyphicon glyphicon-user"></i>
                <span class="nav-item">Profiles</span>
            </a>
            <span class="tooltip">Profiles</span>
        </li>
        <li>
            <a href="{{ route('admin.media.page') }}">
                <i class="glyphicon glyphicon-film"></i>
                <span class="nav-item">Media</span>
            </a>
            <span class="tooltip">Media</span>
        </li>

        {{-- Materials Link  --}}
        <div class="menu">
            <i class="bx bx-building-house"></i>
            <span class="nav-item">Materials</span>
            <i class="bx bx-chevron-down nav-item"></i>
            <span class="tooltip">Building Materials</span>
        </div>
        <div class="menu-dropdown">
            <div class="sub-menu">
                <span class="menu">
                    <a href="{{ route('admin.building.material.form') }}">
                        New Material
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.materials.my') }}">
                        My Materials
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.categories.create') }}">
                        Add Category
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.categories') }}">
                        All Category
                    </a>
                </span>
            </div>
        </div>

        <li>
            <a href="{{ route('admin.property.messages') }}">
                <i class="fa fa-envelope"></i>
                <span class="nav-item">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>

        <div class="menu">
            <i class="bx bx-slider"></i>
            <span class="nav-item">Sliders</span>
            <i class="bx bx-chevron-down nav-item"></i>
            <span class="tooltip">Sliders</span>
        </div>

        <div class="menu-dropdown">
            <div class="sub-menu">
                <span class="menu">
                    <a href="{{ route('admin.sliders.index') }}">
                        All Sliders
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.sliders.create') }}">
                        Create
                    </a>
                </span>
            </div>
        </div>

        <li>
            <a href="{{ route('admin.blog.page') }}">
                <i class="glyphicon glyphicon-film"></i>
                <span class="nav-item">Blog</span>
            </a>
            <span class="tooltip">Blog</span>
        </li>

        <div class="menu">
            <i class="fa fa-users"></i>
            <span class="nav-item">Users</span>
            <i class="bx bx-chevron-down nav-item"></i>
            <span class="tooltip">Users</span>
        </div>
        <div class="menu-dropdown">
            <div class="sub-menu">
                <span class="menu">
                    <a href="{{ route('admin.users.all') }}">
                        All Users
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.users') }}">
                        Admin Users
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.users.create') }}">
                        Create User
                    </a>
                </span>
                <span class="menu">
                    <a href="{{ route('admin.blacklist.index') }}">
                        Blacklisted
                    </a>
                </span>
            </div>
        </div>

        <li>
            <a href="">
                <i class="fa fa-gear"></i>
                <span class="nav-item">Settings</span>
            </a>
            <span class="tooltip">Settings</span>

        </li>


    </ul>
    <ul class="sidebar-foot">
        <li>
            <a
                href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i>
                <span class="nav-item">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
        </li>
    </ul>


</div>
