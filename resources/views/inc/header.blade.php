<nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
          <a class="navbar-brand" href="#">Revive</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/doctors/all">Doctors</a>
              </li>
              @role('doctor')
              <li class="nav-item">
                <a class="nav-link" href="/chats">Chat</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/privatejournal">Private Journal</a>
              </li>
              @endrole
              @role('client')
              <li class="nav-item">
                <a class="nav-link" href="/chats">Chat</a>
              </li>
              @endrole
              <li class="nav-item">
                <a class="nav-link" href="/blogs">Blog</a>
              </li>
              @role('client')
              <li class="nav-item">
                  <a class="nav-link" href="/client">Profile</a>
              </li> 
              @endrole
              @role('doctor')
              <li class="nav-item">
                  <a class="nav-link" href="/doctor">Profile</a>
              </li> 
              @endrole
              @role('admin')
              <li class="nav-item">
                  <a class="nav-link" href="/admin-panel">Profile</a>
              </li> 
              @endrole
              {{-- @role('client')
              <li class="nav-item">
                  <a class="nav-link" href="/client">Profile</a>
              </li> 
              @endrole --}}
              @if (Auth::check())
              <li>
                <a class="btn btn-outline-danger text-white" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
                 </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li> 
              @else
              <li class="nav-item">
                <a class="btn btn-outline-secondary" href="/login">login</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-secondary " href="/register">Register</a>
              </li>
              @endif
        
            </ul>
          </div>
        </div>
      </nav>