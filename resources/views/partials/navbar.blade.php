<nav class="navbar navbar-default" style="margin-bottom:0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Jobs') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" {{--id="navbarSupportedContent"--}}>
                {{--  <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>  --}}

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    
                        <li><a href="{{ route('login') }}"><p> Login</p></a></li>
                        <li><a href="{{ route('register') }}"><p> Register</p></a></li>
                    
                    @else
                        <li class="dropdown">
                            <a {{--id="navbarDropdown"--}} class="dropdown-toggle" href="#" {{--role="button"--}} data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                                <b class="caret"></b>
                            </a>

                            <ul class="dropdown-menu" {{--aria-labelledby="navbarDropdown"--}}>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-settings"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
</nav>