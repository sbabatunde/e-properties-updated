<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Navigation</title>
    <link rel="stylesheet" href="{{ asset('assets/backend/e-admin/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- IMPORT BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <aside class="close">

        <div class="head">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
                <h2 class="logo-title">Code<span>Arry</span></h2>
            </div>
            <i class='bx bx-menu hamburger-menu'></i>
        </div>

        <div class="nav">
            <div class="menu active">
                <i class="bx bx-pie-chart-alt"></i>
                <span>Dashboard</span>
            </div>

            <div class="menu">
                <i class="bx bx-edit"></i>
                <span>Posts</span>
            </div>

            <div class="menu">
                <i class="bx bx-task"></i>
                <span>Tasks</span>
                <i class="bx bx-chevron-down"></i>
            </div>
            <div class="menu-dropdown">
                <div class="sub-menu">
                    <span class="menu">Assignment</span>
                    <span class="menu">Completed</span>
                </div>
            </div>

            <div class="menu">
                <i class="bx bx-bell"></i>
                <span>Notifications</span>
            </div>

            <div class="menu">
                <i class="bx bx-group"></i>
                <span>Teams</span>
                <i class="bx bx-chevron-down"></i>
            </div>
            <div class="menu-dropdown">
                <div class="sub-menu">
                    <span class="menu">Programmer</span>
                    <span class="menu">Trader</span>
                    <span class="menu">Youtuber</span>
                </div>
            </div>

            <div class="menu">
                <i class="bx bx-cog"></i>
                <span>Settings</span>
            </div>

            <div class="menu" style="pointer-events: none;"></div>
        </div>

        <div class="foot">
            <div class="profile">
                <img src="images/profile.jpg" alt="profile">
                <div class="info">
                    <span class="name">John Doe</span>
                    <span class="job">Student</span>
                </div>
            </div>

            <div class="menu menu-logout">
                <i class="bx bx-log-out"></i>
                <span>Logout</span>
            </div>
        </div>

    </aside>

    <header>
        <h1>SIDEBAR</h1>
    </header>



</body>

</html>
<script src="{{ asset('assets/admin/build/js/e-admin-sidebar.js') }}"></script>
