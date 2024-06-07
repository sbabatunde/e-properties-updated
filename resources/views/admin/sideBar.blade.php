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
            <a href="">
                <i class="fa fa-map"></i>
                <span class="nav-item">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
         </li>
         <li>
            <a href="{{route('admin.add.listing')}}">
                <i class="fa fa-user "></i>
                <span class="nav-item">Post Property</span>
            </a>
            <span class="tooltip">Property</span>
         </li>
         <li>
            <a href="{{route('admin.listings.all')}}">
                <i class="fa fa-archive "></i>
                <span class="nav-item">My Listings</span>
            </a>
            <span class="tooltip">Listing</span>
         </li>
         <li>
            <a href="{{ route('admin.profile') }}">
                <i class="fa fa-bell"></i>
                <span class="nav-item">Profiles</span>
            </a>
            <span class="tooltip">Profiles</span>
         </li>
         <li>
            <a href="{{ route('admin.media.page') }}">
                <i class="fa fa-envelope"></i>
                <span class="nav-item">Media</span>
            </a>
            <span class="tooltip">Media</span>
         </li>
         <li>
            <a href="{{ route('admin.sliders.create') }}">
                <i class="fa fa-image"></i>
                <span class="nav-item">Slider</span>
            </a>
            <span class="tooltip">Slider</span>
         </li>
         <li>
            <a href="">
                <i class="fa fa-gear"></i>
                <span class="nav-item">Settings</span>
            </a>
            <span class="tooltip">Settings</span>
         </li>
         <li>
            <a href="">
                <i class="fa fa-logout"></i>
                <span class="nav-item">Logot</span>
            </a>
            <span class="tooltip">Logot</span>
         </li>
    </ul>
</div>