<div class="sideBar">
    <div class="top">
        <div class="logo">
            <i class="fa fa-line-chart mr-2"></i>
            <span class="mr-2">Algorithm</span> 31/12/22
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
        <li>
            <a href="{{ route('admin.add.listing') }}">
                <i class="glyphicon glyphicon-home"></i>
                <span class="nav-item">Property</span>
            </a>
            <span class="tooltip">Post Property</span>
        </li>
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
        {{-- <li>
            <a href="{{ route('admin.building.material.form') }}">
                <i class="fa fa-building"></i>
                <span class="nav-item">Materials</span>
            </a>
            <span class="tooltip">Building Materials</span>
        </li> --}}
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
            </div>
        </div>
        <li>
            <a href="{{ route('admin.property.messages') }}">
                <i class="fa fa-envelope"></i>
                <span class="nav-item">Messages</span>
            </a>
            <span class="tooltip">Messages</span>
        </li>


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
