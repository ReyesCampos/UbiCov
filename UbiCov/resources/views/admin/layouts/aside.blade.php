<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{asset('dashboard/assets/img/sidebar-1.jpg')}}">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo" style="text-align:center">
        <img  src="{{asset('/img/login.png')}}" alt="" style="height: 50%; width:50%;">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="/admin/usuarios">
              <i class="material-icons">people</i>
              <p>Usuarios</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/admin/mapa">
              <i class="material-icons">map</i>
              <p>Mapa</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/admin/graficos">
              <i class="material-icons">bar_chart</i>
              <p>Gráficos</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/admin/semaforizacion">
              <i class="material-icons">traffic</i>
              <p>Semaforización</p>
            </a>
          </li>
        </ul>
      </div>
    </div>