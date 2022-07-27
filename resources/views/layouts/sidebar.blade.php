
   

    <!-- Sidebar -->
    <div class="sidebar">
      
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                
        <li class="nav-item">
          <a href="{{url('dashboard')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
              
            </p>
          </a>
        </li>

        

        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-toolbox"></i>  
              <p>
               Pengurusan Surat 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('suratterhad')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terbuka/Terhad</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{url('suratsulit')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sulit</p>
                </a>
              </li>
             
                           
            </ul>
          </li>
        @if(auth()->user()->isAdmin())
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Pengurusan Capaian
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('permissions')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kebenaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('roles')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peranan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('users')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-tools"></i>
              <p>
                Konfigurasi
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('permissions')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahagian/Unit</p>
                </a>
              </li>
               
              
            </ul>
          </li>
        @endif
          <li class="nav-item">
            <a href="{{url('keluar')}}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Log keluar</p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="{{url('dynamicpdf')}}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Dynamic pdf</p>
            </a>
          </li> -->
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  