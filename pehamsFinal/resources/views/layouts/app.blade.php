<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>PEHAMS — @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/page.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('css')

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
  </head>

  <body>

    @yield('header')

    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #b9a0c9;">
        <div class="container">

          <div class="navbar-left mr-4">
            <button class="navbar-toggler" type="button">&#9776;</button>
            <a class="navbar-brand" href="/">
                <img class="logo-dark" src="{{ asset('img/logo.png') }}" height="130px" width="90px" alt="logo">
                <img class="logo-light" src="{{ asset('img/logo.png') }}" alt="logo">
            </a>
          </div>

          <section class="navbar-mobile">
              @auth
            <nav class="nav nav-navbar mr-auto">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
              @if(auth()->user()->isAdmin())
                  <a class="nav-link {{ Request::is('*user*') ? 'active' : '' }}" href="{{ route('users.index') }}">
                          Users
                  </a>
                  <a class="nav-link {{ Request::is('*owner*') ? 'active' : '' }}" href="{{ route('users.requests') }}">
                          Requests   
                  </a>
              @endif
              @if(auth()->user()->isOwner())
                      <a class="nav-link {{ Request::is('*myhostel*') ? 'active' : '' }}" href="{{ route('myhostels') }}">My Hostels</a>
              @endif

              <a class="nav-link {{ Request::is('hostels') ? 'active' : '' }}" href="{{ route('hostels.index') }}">Hostels</a>
              <a class="nav-link {{ Request::is('map') ? 'active' : '' }}" href="{{ route('map') }}">Map</a>
              <!--<a class="nav-link {{ Request::is('notifications') ? 'active' : '' }}" href="#">Notifications</a>-->
                <a class="nav-link {{ Request::is('Contact*') ? 'active' : '' }}" href="{{ route('contactUs') }}">Contact Us</a>
              
            </nav>
            @endauth
            <div>
                @guest
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="btn btn-sm btn-light ml-lg-5 mr-2s" style="" href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                    <li><a class="btn btn-sm btn-success" href="{{ route('register') }}">Register</a><li>
                    @endif 
                    </ul>    
                 @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('users.edit-profile') }}">
                        My Profile
                    </a>
      
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
      
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </div>
                </li>
              @endguest
          </section>

        </div>
    </nav><!-- /.navbar -->


        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif

    <!-- Main Content -->

    <main class="main-content">


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blog content
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section">
        <div class="container col-lg-8 mx-auto">

            @yield('content')

        </div>
      </div>



    </main>


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">

          <div class="col-6 col-lg-3">
          <a href="/"><img src="{{ asset('img/logo.png') }}" height="130px" width="90px" alt="logo"></a>
          </div>


        </div>
      </div>
    </footer><!-- /.footer -->

    

    <!-- Scripts -->
    <script src="{{ asset('js/page.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('scripts')

  </body>
</html>
