  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/"><i class="fa fa-dashboard fa-lg"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ url('employee-management') }}"><i class="fa fa-user fa-lg"></i> <span> Add Employees </span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gear fa-lg"></i> <span> General Management </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('system-management/department') }}">Department</a></li>
            <li><a href="{{ url('system-management/division') }}">Division</a></li>
            <li><a href="{{ url('system-management/country') }}">Country</a></li>
            <li><a href="{{ url('system-management/state') }}">State</a></li>
            <li><a href="{{ url('system-management/city') }}">City</a></li>
          </ul>
        </li>
        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-user fa-lg"></i> <span> Add User </span></a></li>
        <li><a href="{{ url('system-management/report') }}"><i class="fa fa-book fa-lg"></i> <span> Generate Reports </span></a></li>
        <li><a href="{{ url('/offres') }}"><i class="fa fa-link"></i> <span> Bien  </span></a></li>
        <li><a href="{{url('/welcome')}}"><i class="fa fa-link"></i> <span> Réservation</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>