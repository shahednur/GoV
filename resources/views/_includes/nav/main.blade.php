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