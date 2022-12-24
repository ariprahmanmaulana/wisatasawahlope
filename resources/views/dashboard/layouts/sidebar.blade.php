    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} " aria-current="page" href="/dashboard">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text"></span>
              Postingan
            </a>
          </li>
        </ul>

        @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>ADMINISTRATOR</span>
        </h6>
        <ul class="nav flex-column">
          
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/laporans*') ? 'active' : '' }}" href="/dashboard/laporans">
              <span data-feather="book-open"></span>
              Laporan Keuangan
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/gazebos*') ? 'active' : '' }}" href="/dashboard/gazebos">
              <span data-feather="trello"></span>
              Gazebo
            </a>
          </li>
        </ul>            
        @endcan
      </div>
    </nav>