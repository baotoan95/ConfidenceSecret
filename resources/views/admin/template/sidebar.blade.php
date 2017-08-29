<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="http://localhost:85/ConfidenceSecret/public/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
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
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{ url('admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>User management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/users') }}"><i class="fa fa-circle-o"></i> All</a></li>
            <li><a href="{{ url('admin/user') }}"><i class="fa fa-circle-o"></i> Add new</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Post management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/posts') }}"><i class="fa fa-circle-o"></i> All</a></li>
            <li><a href="{{ url('admin/post') }}"><i class="fa fa-circle-o"></i> Add new</a></li>
            <li><a href="{{ url('admin/posts') }}"><i class="fa fa-circle-o"></i> Top view</a></li>
            <li><a href="{{ url('admin/posts') }}"><i class="fa fa-circle-o"></i> Top like</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ url('admin/contacts') }}">
            <span>Contact</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Notification</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('admin/notifications') }}"><i class="fa fa-circle-o"></i> All</a></li>
            <li><a href="{{ url('admin/notification') }}"><i class="fa fa-circle-o"></i> Add new</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ url('admin/comments') }}">
            <i class="fa fa-calendar"></i> <span>Comment management</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>