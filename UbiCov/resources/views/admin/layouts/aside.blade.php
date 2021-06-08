<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dashboard/dist/img/Slogan2.png" alt="" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light">Bienvenido</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dashboard/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          {{ Auth::user()->name }}
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Principal
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin/usuarios" class="nav-link active">
                  <i class="far fa-user nav-icon"></i>
                  <p>Negocios registrados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/mapa" class="nav-link">
                  <i class="far fa-map nav-icon"></i>
                  <p>Mapa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/graficos" class="nav-link">
                  <i class="far fa-heart nav-icon"></i>
                  <p>Gráficos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="admin/semaforizacion" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Semaforización</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>