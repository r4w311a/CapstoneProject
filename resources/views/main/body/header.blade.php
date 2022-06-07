<header>
    <div class="header-main">
      <div class="container">
        <a href="{{ url('/')}}" class="header-logo">
          <img
            src="{{ asset('images/logo/logo.svg') }}"
            alt="Anon's logo"
            width="120"
            height="36"
          />
        </a>

        <div class="header-search-container">
          <input
            type="search"
            name="search"
            class="search-field"
            placeholder="Enter your product name..."
          />

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </div>

        <div class="header-user-actions">
          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">3</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">1</span>
          </button>
        </div>
      </div>
    </div>

    <nav class="desktop-navigation-menu">
      <div class="container">
        <ul class="desktop-menu-category-list">
          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">All Categories</a>
          </li>
          
          <li class="menu-category">
            <a href="#" class="menu-title">Men</a>

            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Jackets</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Pants</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Sweaters & Shirts</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Shoes</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bags</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Accessories</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Women's</a>

            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Jackets</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Pants</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Sweaters & Shirts</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Shoes</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bags</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Accessories</a>
              </li>
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Kids</a>

            <ul class="dropdown-list">
              <li class="dropdown-item">
                <a href="#">Jackets</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Pants</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Sweaters & Shirts</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Shoes</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Bags</a>
              </li>

              <li class="dropdown-item">
                <a href="#">Accessories</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

    
  </header>