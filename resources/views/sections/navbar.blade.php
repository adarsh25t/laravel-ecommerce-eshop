<nav>
    <a href="{{ route('home') }}" class="title">Eshop</a>
    <div class="search-form">
        <input type="text" placeholder="search for product">
        <span><i class="fas fa-search"></i></span>
    </div>
    <div class="nav-actions">
        @auth
        <div class="dropdown">
            <button class="btn drop-btns dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#"><i class="fas fa-heart"></i>{{ __('Wishlist') }}</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-shopping-cart"></i> {{ __('Cart') }}</a></li>
              <li><i class="fas fa-sign-out-alt"></i> <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </li>
              
            </ul>
          </div>
        @endauth
        @guest
            <a href="{{ route('login') }}">Login</a>
        @endguest
    </div>
</nav>
