    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome for Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <style>
            body {
                background-color: #f1f1f1;
            }

            .sidebar {
                width: 250px;
                height: 100vh;
                background-color: #23282d;
                color: #fff;
                position: fixed;
                top: 0;
                left: 0;
                transition: width 0.3s;
            }

            .sidebar.collapsed {
                width: 60px;
            }

            .sidebar.collapsed .menu-text {
                display: none;
            }

            .sidebar-header {
                padding: 20px;
                text-align: center;
                background-color: #1a1e23;
            }

            .sidebar-menu {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .sidebar-menu li {
                padding: 10px 20px;
            }

            .sidebar-menu li a {
                color: #fff;
                text-decoration: none;
                display: flex;
                align-items: center;
            }

            .sidebar-menu li a:hover {
                background-color: #2c3338;
            }

            .sidebar-menu li.active {
                background-color: #0073aa;
            }

            .sidebar-menu li i {
                width: 30px;
                text-align: center;
            }

            .main-content {
                margin-left: 250px;
                transition: margin-left 0.3s;
            }

            .main-content.collapsed {
                margin-left: 60px;
            }

            .navbar {
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                padding: 10px 20px;
            }

            .navbar .navbar-brand {
                font-size: 1.5rem;
                font-weight: bold;
            }

            .navbar .nav-link {
                color: #333;
            }

            .navbar .nav-link:hover {
                color: #0073aa;
            }

            .dashboard-cards {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                margin-top: 20px;
            }

            .dashboard-card {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                flex: 1 1 calc(25% - 20px);
            }

            .dashboard-card h3 {
                margin: 0;
                font-size: 1.5rem;
            }

            .dashboard-card p {
                margin: 0;
                color: #666;
            }
        </style>
    </head>

    <body>

        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3 class="menu-text">Admin Panel</h3>
            </div>
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="{{ route('wa.admin') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>

                {{-- User Option --}}
                <li class="has-submenu">
                    <a href="#userSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle load-content" data-url="{{ route('admin.usermains') }}">
                        <i class="fas fa-users"></i>
                        <span class="menu-text">Users</span>
                    </a>
                    <ul class="collapse list-unstyled" id="userSubmenu">
                        <li>
                            <a href="#" class="load-content" data-url="{{ route('admin.users') }}">
                                <i class="fas fa-list"></i>
                                Users
                            </a>
                        </li>
                        <li>
                            <a href="#" class="load-content" data-url="{{ route('admin.users') }}">
                                <i class="fas fa-box"></i>
                                Add New User
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- App menu --}}
                <li class="has-submenu">
                    <a href="#appSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle load-content" data-url="{{ route('admin.applications') }}">
                        <i class="fas fa-rocket"></i>
                        <span class="menu-text">Apps</span>
                    </a>
                    <ul class="collapse list-unstyled" id="appSubmenu">
                        <li>
                            <a href="#" class="load-content" data-url="{{ route('launchpad') }}">
                                <i class="fas fa-list"></i>
                                List App
                            </a>
                        </li>
                        <li>
                            <a href="#" class="load-content" data-url="{{ route('admin.products') }}">
                                <i class="fas fa-box"></i>
                                Update App
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Homepage Menu --}}
                <li class="has-submenu">
                    <a href="#homepageSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle load-content" data-url="{{ route('admin.homepagemenu') }}">
                        <i class="fas fa-globe"></i>
                        <span class="menu-text">Homepage</span>
                    </a>
                    <ul class="collapse list-unstyled" id="homepageSubmenu">
                        <li>
                            <a href="#" class="load-content" data-url="{{ route('hot-offers.create') }}">
                                <i class="fa fa-fire"></i> <!-- New icon (blog) -->
                                <span class="menu-text">Hero Offers</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-star"></i> <!-- Icon for Top Seller -->
                                <span class="menu-text">Top Seller</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="load-content" data-url="{{ route('hot-picks.create') }}">
                                <i class="fa fa-fire"></i> <!-- Icon for Hot Pick -->
                                <span class="menu-text">Hot Pick</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="load-content" data-url="{{ route('topGame.create') }}">
                                <i class="fa fa-gamepad"></i> <!-- Icon for Top Games -->
                                <span class="menu-text">Top Games</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="load-content" data-url="{{ route('top-utilities.create') }}">
                                <i class="fa fa-tools"></i> <!-- Updated icon for Utilities -->
                                <span class="menu-text">Top Utilities</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"  class="load-content" data-url="{{ route('blogs.view') }}">
                        <i class="fas fa-blog"></i> <!-- New icon (blog) -->
                        <span class="menu-text">Blogs</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="load-content" data-url="{{ route('requests.show') }}">
                        <i class="fa fa-bell"></i> <!-- New icon (blog) -->
                        <span class="menu-text">Requests ( {{ $contactReq->count() }} )</span>
                    </a>
                </li>


                <li>
                    <a href="#" class="load-content" data-url="{{ route('admin.settings') }}">

                        <i class="fas fa-cog"></i>
                        <span class="menu-text">Settings</span>
                    </a>
                </li>
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="menu-text">Logout</span>
                    </a>
                </li>

            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content" id="main-content">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="btn btn-link" id="sidebar-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    @if (Auth::check())
                                        <i class="fas fa-user"></i> Admin {{ Auth::user()->name }}
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <div class="container-fluid mt-4" id="dynamic-content">
                <h2>Welcome to Admin Panel</h2>
                <div class="dashboard-cards">
                    <div class="dashboard-card">
                        <h3>{{ isset($users) ? $users->count() : 0 }}</h3>
                        <p>Total Users</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>{{ isset($products) ? $products->count() : 0 }}</h3>
                        <p>Total Listing</p>
                    </div>
                    <div class="dashboard-card">
                        <h3>{{ $notVerifiedProducts }}</h3>
                        <p>Not Verified Apps</p>
                    </div>
                    {{-- <div class="dashboard-card">
                <h3>$12,345</h3>
                <p>Total Revenue</p>
            </div> --}}
                </div>
            </div>

            <!-- Bootstrap JS and Popper.js -->
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Custom JS -->

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.load-content').click(function(e) {
                        e.preventDefault();
                        let url = $(this).data('url');

                        // Remove 'active' class from all menu items and add it to the clicked one
                        $('.sidebar-menu li').removeClass('active');
                        $(this).closest('li').addClass('active');

                        $.ajax({
                            url: url,
                            type: 'GET',
                            beforeSend: function() {
                                $('#dynamic-content').html('<p class="text-center">Loading...</p>');
                            },
                            success: function(response) {
                                $('#dynamic-content').html(response);
                            },
                            error: function() {
                                alert('Failed to load content');
                            }
                        });
                    });
                });
            </script>

            <script>
                // Toggle Sidebar
                const sidebar = document.getElementById('sidebar');
                const mainContent = document.getElementById('main-content');
                const sidebarToggle = document.getElementById('sidebar-toggle');

                sidebarToggle.addEventListener('click', () => {
                    sidebar.classList.toggle('collapsed');
                    mainContent.classList.toggle('collapsed');
                });

                // Highlight Active Menu
                const menuItems = document.querySelectorAll('.sidebar-menu li');
                menuItems.forEach(item => {
                    item.addEventListener('click', () => {
                        menuItems.forEach(i => i.classList.remove('active'));
                        item.classList.add('active');
                    });
                });
            </script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.querySelectorAll('.load-content').forEach(function (link) {
                        link.addEventListener('click', function () {
                            // Collapse all open submenu
                            document.querySelectorAll('.has-submenu .collapse.show').forEach(function (openMenu) {
                                openMenu.classList.remove('show');
                            });
                        });
                    });
                });
                </script>
                
              

    </body>

    </html>
