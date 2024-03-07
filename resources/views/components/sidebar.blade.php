
<!-- Navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="account_CD" class="brand-link">
      <span class="brand-text font-weight-light">Product</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset( 'static/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">TK</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Product Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Category List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('product_add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('product_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Branch
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('branch_add') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Branch Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('branch_list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Branch List</p>
                </a>
              </li>
            </ul>
          </li>

          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Change Password
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <a href="{{ url ('logout/') }}" class="nav-link">
            <i class="nav-icon fas fa-logout"></i>
            <p>
              Logout
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>