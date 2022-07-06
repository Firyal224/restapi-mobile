<!-- navbar -->
    <header id="navbar">
        <nav class="navbar-container containerr">
          <a href="/" class="home-link">
            <div class="navbar-logo"></div>
            Website Name
          </a>
          <button type="button" id="navbar-toggle" aria-controls="navbarNav" aria-label="Toggle menu" aria-expanded="false">
                <i class="fa fa-bars fa-lg"></i>
          </button>
          <div id="navbar-menu" aria-labelledby="navbar-toggle">
            <ul class="navbar-links" id="navbar-links">
              <li class="navbar-item"><a class="navbar-link" href="index.html">Home</a></li>
              <label class="dropdown">

                <div class="dd-button">
                  <a class="navbar-link" href="/senyum/category.html">Categoties</a>
                </div>   
                <input type="checkbox" class="dd-input" id="test">
                <ul class="dd-menu">
                  <li><a class="navbar-link" href="/nangis/dataForm.php">Data Reader</a></li>
                  <li>Another action</li>
                  <li>Something else here</li>
                  <li class="divider"></li>
                </ul>
                
              </label>
              <li class="navbar-item"><a class="navbar-link" href="/calculator.html">Calculator</a></li>
              <li class="navbar-item"><a class="navbar-link" href="movie.html">Artikel</a></li>
              <ul class="navbar-nav my-2 my-lg-0">
                @auth
                @role('admin')
                  <label class="dropdown">

                    <div class="dd-button">
                      <a class="navbar-link" href="/admin">Admin</a>
                    </div>   
                    <input type="checkbox" class="dd-input" id="test">
                   <ul class="dd-menu">
                      <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                         </a>
                                    
                                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                        </form>
                      </li>
                      
                      <li class="divider"></li>
                    </ul>
                
                  </label>
                    
                @else
                  <label class="dropdown">

                    <div class="dd-button">
                      <a class="navbar-link" href="/admin">{{ Auth::user()->name }}</a>
                    </div>   
                    <input type="checkbox" class="dd-input" id="test">
                    <ul class="dd-menu">
                      <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                         </a>
                                    
                                    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                        </form>
                      </li>
                      
                      <li class="divider"></li>
                    </ul>
                
                  </label>
                @endrole   
                @else
                  
                     <li class="navbar-item"><a class="navbar-link" href="/login">Login</a></li>


                @endauth
            </ul>
                
           
          </div>
        </nav>
    </header>
<!-- End navbar -->  