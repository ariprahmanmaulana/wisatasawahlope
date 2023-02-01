{{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
    <a class="navbar-brand" href="#">Sawah Lope</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item me-3 ms-3">
          <a class="nav-link {{ ($active === "home") ? "active" : "" }} " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link {{ ($active === "booking") ? "active" : "" }}" href="/booking">Booking</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link {{ ($active === "posts") ? "active" : "" }}" href="/posts">Posts</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link {{ ($active === "about") ? "active" : "" }}" href="/about">Tentang</a>
        </li>
      </ul>
      {{-- <form class="d-flex me-3">
        <input class="form-control me-2 col-sm-4 " style="width:300px;" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success " type="submit">Search</button>
      </form> --}}

     <ul class="navbar-nav ms-auto">
        @auth
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-people-fill"></i>   {{ auth()->user()->name}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            {{-- logout pake form --}}
            <li>
              <form action="/logout" method="post">
              @csrf
                  <button type="submit"class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
            @else
        <li class="nav-item ">
          <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : ''}}"> <i class="bi bi-box-arrow-in-right"></i> Log in</a>
        </li>
        <li class="nav-item ms-3">
          <a href="/register" class="nav-link {{ ($active === "register") ? 'active' : ''}}"> <i class="bi bi-person-plus"></i> Registrasi</a>
        </li>
         @endauth
      </ul>
      
    </div>
  </div>
</nav>
{{-- akhir navbar --}}
