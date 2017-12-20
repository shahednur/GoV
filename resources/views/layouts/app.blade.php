<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GoVlog</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow" aria-label="dropdown navigation" role="navigation">
            <div class="container">
                <div class="navbar-start">
                   <a href="{{route('home')}}" class="navbar-item">
                    <img src="{{asset('images/logo.png')}}" alt="GoVlog Logo">
                   </a>
                   <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-100">Learn</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a> 
                </div>
                <div class="navbar-end">
                    @if(Auth::guest())
                      <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                      <a href="{{route('register')}}" class="navbar-item is-tab">Signup</a>
                    @else
                     <!--  <button class="has-dropdown navbar-item is-tab is-hoverable">Hey dude!
                        <span class="icon"><i class="fa fa-caret-down"></i></span>

                        <ul class="navbar-dropdown">
                            <li class="navbar-item"><a href="#">Profile</a></li>
                            <li class="navbar-item"><a href="#">Notifications</a></li>
                            <li class="navbar-item"><a href="#">Settings</a></li>
                            <li class="navbar-divider"></li>
                            <li class="navbar-item"><a href="#">Logout</a></li>
                        </ul>
                      </button> -->
                      <div class="navbar-item has-dropdown is-hoverable">
                          <a class="navbar-link">
                            Hey {{Auth::user()->name?'S.Admin':''}}
                          </a>

                          <div class="navbar-dropdown">
                              <a class="navbar-item" href="#">
                                <span class="icon"><i class="fa m-r-15 fa-user-circle"></i></span>
                                        Profile
                              </a>
                              <a class="navbar-item" href="#">
                                <span class="icon"><i class="fa m-r-15 fa-fw fa-bell"></i></span>
                                Notifications
                              </a>
                              <a class="navbar-item" href="{{route('manage.dashboard')}}">
                                <span class="icon"><i class="fa m-r-15 fa-cog"></i></span>
                                Settings
                              </a>
                              <hr class="navbar-divider">
                              <div class="navbar-item">
                                <a href="{{route('logout')}}">
                                    <span class="icon"><i class="fa m-r-15 fa-sign-out"></i></span>
                                    Logout
                                </a>
                              </div>
                          </div>
                      </div>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
