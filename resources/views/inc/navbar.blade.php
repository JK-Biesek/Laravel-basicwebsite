<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">

      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand">Jakub</a>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav">
          <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item  {{Request::is('about') ? 'active' : ''}}">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
            <a class="nav-link" href="/contact">Comments</a>
          </li>
          <li class="nav-item {{Request::is('messages') ? 'active' : ''}}">
            <a class="nav-link" href="/messages">Messages</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>


                    <ul class="dropdown-menu" role="menu">
                        <li>
                          <a href="/dashboard">
                            Dashboard
                          </a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
      </div>
      </div>
    </nav>
