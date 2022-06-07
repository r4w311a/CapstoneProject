<a href="{{ route('admin.dashboard') }}" class="logo">
    <i class="bx bx-ghost"></i>
    <span class="text">Admin Panel</span>
</a>
<ul class="side-menu top">
    <li class="active">
        <a href="{{ route('admin.dashboard') }}">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>

        </a>
    </li>
    <li>

        <a href="#">
            <i class="bx bxs-store"></i>
            <span class="text">Products</span>
        </a>

    </li>

    <li>
        <a href="#">
            <i class="bx bxs-food-menu"></i>
            <span class="text">Categories</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="bx bxs-food-menu"></i>
            <span class="text">Sub Categories</span>
        </a>
    </li>
    <li>
        <a href="#">
            <i class="bx bxs-shopping-bag"></i>
            <span class="text">Orders</span>
        </a>
    </li>
</ul>
<ul class="side-menu">
    <li>
        <a href="{{ route('admin.settings') }}">
            <i class="bx bxs-cog"></i>
            <span class="text">Settings</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.logout') }}" class="logout">
            <i class="bx bx-log-out"></i>
            <span class="text">Logout</span>
        </a>
    </li>
</ul>
