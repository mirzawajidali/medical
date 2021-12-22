{{-- Sidebar Start --}}
<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboard') }}">Home</a></li>
                    <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-user"></i> <span class="nav-text">Profile</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    <li><a href="{{ route('change_password') }}">Change Password</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-users"></i> <span class="nav-text">Users</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('users') }}">Users List</a></li>
                    <li><a href="{{ route('user_add') }}">Add User</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-search-location"></i> <span class="nav-text">Locations</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('countries') }}">Countries</a></li>
                    <li><a href="{{ route('cities') }}">Cities</a></li>
                    <li><a href="{{ route('states') }}">States</a></li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-folder"></i> <span class="nav-text">Header</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('top_nav') }}">Top Nav</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
{{-- Sidebar End --}}
