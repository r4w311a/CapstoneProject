<div class="icons d-flex">
    
    <div class="box">
        <form action="{{url('/search')}}" method="GET" name="search">
            <input type="text" class="input" name="product" onmouseout="this.value = ''; this.blur();">
        </form>
        <i class="bx bx-search"></i>
    
    </div>
      
   
   
    
    <a href="{{url('/cart')}}" class="icon">
        <i title="Cart" class="bx bx-cart"></i>
        <span class="d-flex">{{$cart_counter}}</span>
    </a>
    <a href="{{url('/dashboard')}}" class="icon">
        <i title="Account" class="bx bx-user"></i>
    </a>
    @auth
    <a href="{{route('logout')}}" class="icon">
        <i title="Logout" class='bx bx-exit'></i>
        
    </a>
    @endauth
</div>