<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/about">About</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="/student/all">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/extra">Extracurricular</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/class/kelas">Kelas</a>
          </li>
        </ul>

        @auth
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome, {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
                <li class="dropdown-item"><a href="/dashboard/dashboard">Dashboard</a></li>
                <li>
                    <form method="POST" action="/login/keluar">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </div>

        @else
        <a href="/login/index">
          <button class="btn btn-outline-success" type="submit">Login</button>
        </a>
        @endauth


      </div>
    </div>
  </nav>  