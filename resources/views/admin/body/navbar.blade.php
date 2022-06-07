
<nav>
    <i class="bx bx-menu"></i>
    <a href="#" class="nav-link">Menu</a>
    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search..." />
            <button type="submit" class="search-btn">
                <i class="bx bx-search"></i>
            </button>
        </div>
    </form>
    
    <a href="{{ route('admin.settings') }}" class="profile">
       
        <img src="{{ asset('backend/images/avatar.png')}}" />
    </a>
</nav>
