<header>
<script>
    function submitForm() {
      document.getElementById('search-form').submit();
    }
</script>
    <div class="background"></div>
    <div class="logoSection">
        <img src="{{url('/images/shopLogo.svg')}}" class="filterLogo"/>
        <div class="socialMedia icons">
        <a href="#"><i class="fa-brands fa-x-twitter fa-lg"></i></a>
        <a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a>
        <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
        <a href="#"><i class="fa-solid fa-circle-radiation fa-lg" id="theme-toggle"></i></a>
        </div>
    </div>
    <nav class="top-nav">
        <label for="menu">
            <i class="fa fa-bars"></i>
        </label>
        <input type="checkbox" id="menu">
        <ul class="menu">
                <li class="has-submenu">
                    <a href="#">Catalogue</a>
                    <label title="toggle menu" for="about">
                        <i class="arrow fa fa-caret-down"></i>
                    </label>
                    <input type="checkbox" id="about">
                    <ul class="submenu">
                        <li><a href="#">Chocolates</a></li>
                        <li><a href="#">Caramel candies</a></li>
                        <li><a href="#">Weird candies</a></li>
                    </ul>
                </li>
                <li class=""><a href=#>About us</a></li>

            </ul>
            <div class="rightSide">
            <div class="buttons">
            <div class="input-group p-5">
                <input class="form-control py-2 border-right-0 border form-rounded" type="search" value="search" id="search-form">
                <span class="input-group-append">
                    <div class="input-group-text bg-white form-rounded" onclick="submitForm()"><i class="fa fa-search"></i></div>
                </span>
            </div>
                <form action="{{ route('candies.search') }}" method="GET">
                    <div class="input-group candy-search">
                    <input type="text" name="search" class="form-control" placeholder="Search for..">
                    <div class="input-group-append">
                        <button class="btn btn-light" type="submit"> <i class="fa fa-search"></i></button></div>
                    </div>
                </form>

                <form method="GET" action="{{ route('cart.index') }}">
                <button type="submit" title="Cart" class="btn btn-link cart-login"><i class="fa-solid fa-cart-shopping fa-lg"></i></button>
                </form>
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                     @csrf
                        <button type="submit" title="Logout" class="btn btn-link cart-login"><i class="fa-solid fa-right-from-bracket fa-lg"></i></button>
                    </form>
                    @else
                    <form method="POST" action="{{ route('login') }}">
                    <button type="submit" title="Login" class="btn btn-link cart-login"><i class="fa-solid fa-right-to-bracket fa-lg"></i></button>
                    </form>
                @endauth
                </div>
            </div>
    </nav>
</header>

