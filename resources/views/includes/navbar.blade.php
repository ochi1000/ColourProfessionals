<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <a class="navbar-brand mx-auto psguy-logo" href="{{ url('/') }}">
        Colour Professionals
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://wa.me/2349068919746?text= Hello, what products and services do you offer">Products & Services</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/about-us">About Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://wa.me/2349068919746?text=Hello, I'm intrested in the price of your products">Get a quotation</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#footer">Contact Us</a>
            </li>

            <!-- Authentication Links -->

            {{-- @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest --}}
            @auth
            <li class="nav-item">
                <a class="nav-link" href="/logout">logout</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>

{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">LSAPP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
      </ul>
    </div>
</nav> --}}
