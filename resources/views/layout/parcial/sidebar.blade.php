    
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('/') }}" class="brand-link">
          <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
         
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
                   <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                        Administrador
                        <i class="fas fa-angle-left right"></i>
                        
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('/usuario/crear') }} " class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Agregar Usuarios</p>
                        </a>
                      </li>
                      
                    </ul>
                  </li>


                  <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p>
                        Solictud
                        <i class="fas fa-angle-left right"></i>
                        
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('/solicitud/crear') }} " class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Crear</p>
                        </a>
                      </li>
                      
                    </ul>

                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{ url('/tipo') }} " class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Menu Tipos</p>
                        </a>
                      </li>
                      
                    </ul>
                  </li>
    
    
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>