<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Satish engineering</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ url().'css/bootstrap.min.css'}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url().'/fonts/font-awesome.min.css'}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url().'fonts/ionicons.min.css'}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url().'dist/css/AdminLTE.min.css'}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url().'dist/css/skins/_all-skins.min.css'}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Satish<b>engineering</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            </a>
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                     
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            </a>
            <ul class="dropdown-menu">
              <li>
                <!-- inner menu: contains the actual data -->
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <ul class="dropdown-menu">

         
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ url().'dist/img/user2-160x160.jpg'}}" class="user-image" alt="User Image">
              <span class="hidden-xs">satish engineering</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
            
            
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url().'dist/img/user2-160x160.jpg'}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>satish engineering</p>
         
        </div>
      </div>
      <!-- search form -->
  
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-picture-o"></i> <span>banneer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url().'banner'}}"><i class="fa fa-circle-o"></i>Manage banner </a></li>
            <li><a href="{{ url().'addbanner'}}"><i class="fa fa-circle-o"></i>Add banner</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gavel"></i> <span>Machines</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i>Manage machines</a></li>
            <li><a href="{{ url().'addmachines'}}"><i class="fa fa-circle-o"></i>Add new machines</a></li>
          </ul>
        </li>
        

        <li class="treeview">
          <a href="#">
            <i class="fa fa-plane"></i> <span>CMS page</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url().'page'}}"><i class="fa fa-circle-o"></i>manage pages</a></li>
            <li>
            <li><a href="{{ url().'addpage'}}"><i class="fa fa-circle-o"></i>Add pages</a></li>
            <li>
                </span>
              </a>  
              <li class="treeview">
          <a href="#">
          <i class="fa fa-edit"></i> <span>subcribers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url().'page'}}"><i class="fa fa-circle-o"></i> Manage subscribers</a></li>
            <li><a href="{{ url().'subscribe'}}"><i class="fa fa-circle-o"></i> Add subscribers</a></li>
          </ul>
        </li>

        
    </section>
    <!-- /.sidebar -->
  
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
    
      
    </section>

 
  </div>
  
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ url().'plugins/jQuery/jquery-2.2.3.min.js'}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ url().'bootstrap/js/bootstrap.min.js'}}"></script>
<!-- SlimScroll -->
<script src="{{ url().'plugins/slimScroll/jquery.slimscroll.min.js'}}"></script>
<!-- FastClick -->
<script src="{{ url().'plugins/fastclick/fastclick.js'}}"></script>
<!-- AdminLTE App -->
<script src="{{ url().'dist/js/app.min.js'}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url().'dist/js/demo.js'}}"></script>
</body>
</html>
