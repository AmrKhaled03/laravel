  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">

        <div class="pull-left info">
          <p> {{Auth::user()->name}}</p>
          <a class="nav-link "  href="/logout" role="button" >Logout</a>

          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="seach" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="/admin">
                <i class="fa fa-home"></i>  <span>Dashboard</span>

            </a>
          </li>

        <li class="active">
            <a href="/admin/category">
              <i class="fa fa-th text-warning"></i> <span>Categories</span>

            </a>
          </li>
          <li class="active">
            <a href="/admin/product">
              <i class="fa fa-th"></i> <span>Products</span>

            </a>
          </li>

          <li class="active">
            <a href="/admin/message">
                <i class="fa fa-envelope"></i> <span>Messages</span>

            </a>
          </li>
          <li class="active">
            <a href="/admin/user">
                <i class="fa fa-user text-green"></i>  <span>Users</span>

            </a>
          </li>





        <li class="header">LABELS</li>
        <li><a href="/admin/settings"><ion-icon name="settings-outline"></ion-icon>  Settings</a></li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
