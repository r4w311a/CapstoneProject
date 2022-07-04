<header class="header" id="header">

    <div class="navigation">
        <div class="nav-center container d-flex">
            <a href="/" class="logo">
                <h1>Malkawi</h1>
            </a>

            <ul class="nav-list d-flex">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>

                @php
                    $categories = App\Models\Category::get();
                    
                @endphp

                @foreach ($categories as $category)
                   

                    <div class="dropdown">
                        <button class="dropbtn">{{ $category->category_name }}
                            <i class='bx bx-chevron-down'></i>
                        </button>

                        @php
                        $subcategories = App\Models\SubCategory::where('category_id', $category->id)
                            ->get();
                        @endphp
                        <div class="dropdown-content">
                          @foreach ($subcategories as $subcategory)
                          <a href="{{ url('/category/'.$subcategory->id)}}">{{ $subcategory->subcategory_name }}</a>
                        @endforeach

                        </div>



                      </div>

        @endforeach
        </ul>

        @livewire('cart-counter')

       

        <div class="hamburger">
            <i class="bx bx-menu-alt-left"></i>
        </div>
    </div>
    </div>
</header>
