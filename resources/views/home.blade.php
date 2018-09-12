<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Service Desk Management Portal</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.2 -->
  <link href="{{ asset('homepublic/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Morris chart -->
  <link href="{{ asset('homepublic/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
  <!-- jvectormap -->
  <link href="{{ asset('homepublic/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
  <!-- Daterange picker -->
  <link href="{{ asset('homepublic/plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="{{ asset('homepublic/dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
  <link href="{{ asset('homepublic/dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : '' }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <style>
    .footer {
      background-color: black;
      width: 100%;
    }

    .contactus {
      color: white;
      margin-left: 20%;
      text-decoration: none;
    }

    .policy {
      color: white;
      margin-left: 22%;
      text-decoration: none;
    }

    .support {
      color: white;
      margin-left: 20%;
      text-decoration: none;
    }
  </style>
</head>

<body class="skin-blue">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html"> <img src="{{ asset('homepublic/website icons/OBS_Logo Left_White Text_RGB_Eng.png') }}" class="logo" style="float: left;"></a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="{{ asset('homepublic/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
                        </div>
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>This is a Test Message :)</p>
                      </a>
                    </li>
                    <!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="{{ asset('homepublic/dist/img/user3-128x128.jpg') }}" class="img-circle" alt="user image" />
                        </div>
                        <h4>
                          AdminLTE Design Team
                          <small><i class="fa fa-clock-o"></i> 2 hours</small>
                        </h4>
                        <p>This is a Test Message :)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="{{ asset('homepublic/dist/img/user4-128x128.jpg') }}" class="img-circle" alt="user image" />
                        </div>
                        <h4>
                          Developers
                          <small><i class="fa fa-clock-o"></i> Today</small>
                        </h4>
                        <p>This is a Test Message :)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="{{ asset('homepublic/dist/img/user3-128x128.jpg') }}" class="img-circle" alt="user image" />
                        </div>
                        <h4>
                          Sales Department
                          <small><i class="fa fa-clock-o"></i> Yesterday</small>
                        </h4>
                        <p>This is a Test Message :)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="{{ asset('homepublic/dist/img/user4-128x128.jpg') }}" class="img-circle" alt="user image" />
                        </div>
                        <h4>
                          Reviewers
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                        </h4>
                        <p>This is a Test Message :)</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            
            <notification id="app1" v-bind:notifications="notifications"></notification>

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset('homepublic/dist/img/210.bmp') }}" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="{{ asset('homepublic/dist/img/210.bmp') }}" class="img-circle" alt="User Image" />
                  <p>
                    {{ Auth::user()->name }} - {{ Auth::user()->ftid }}

                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('homepublic/dist/img/210.bmp') }}" class="img-circle" alt="User Image" />
          </div>
          <div class="pull-left info">
            {{ Auth::user()->ftid }}
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

          <li>
            <li class="treeview"><a href="#"> <em class="fa fa-home" style="font-size: 20px;"></em> <span>Home </span><em class="fa fa-angle-left pull-right"></em> </a>

              <ul class="treeview-menu">
                <li><a href="index2.html"><em class="fa fa-square-o"></em> Personal KPI</a></li>
                <span class="label label-primary pull-right" style="padding-top: 10px;">150</span>

                <li><a href="index2.html"><i class="fa fa-square-o"></i> Score Card</a></li>

                <li><a href="index2.html"><i class="fa fa-square-o"></i> Call Reports Per Month</a></li>
                <li><a href="index2.html"><i class="fa fa-square-o"></i> QOS Dashboard </a></li>
              </ul>
            </li>
            <li class="treeview"><a href="#"> <em class="fa fa-line-chart"></em> <span>ITHD Performance </span><em class="fa fa-angle-left pull-right"></em> </a>
              <ul class="treeview-menu">
                <li><a href="index2.html"><i class="fa fa-square-o"></i> ITHD Stars</a></li>
                <li><a href="index2.html"><i class="fa fa-square-o"></i>ITHD Benchmark</a></li>
                <li><a href="index2.html"><i class="fa fa-square-o"></i> ITHD KPI</a></li>
              </ul>
            </li>
            <li>

              <a href="pages/calendar.html">
                <i class="fa fa-warning"></i> <span>Info & Tips</span>
              </a>
            </li>
            <li>
              <a href="index2.html">
                <i class="fa fa-coffee"></i> <span>BMT</span>
              </a>
            </li>

            <li>
              <a href="index2.html">
                <i class="fa fa-calendar"></i> <span>Schedule</span>     
              </a>
            </li>

            <li>
              <a href="index2.html">
                <i class="fa fa-street-view"></i> <span>Work Plan</span>
              </a>
            </li>

            <li>
              <a href="index2.html">
                <i class="fa fa-street-view"></i> <span>Brief Points</span>
              </a>
            </li>

            <li>
              <a href="index2.html">
                <i class="fa fa-link"></i> <span>Important Links</span>
              </a>
            </li>
            @if(Auth::user()->role_id == 1 && Auth::check())
            <li>
              <a href="{{route('administrator')}}">
                  <i class="fa fa-link"></i> <span>User Management</span>
                </a>
            </li>
            @endif

      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Right side column. Contains the navbar and content of the page -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Personal KPIs

        </h1>

      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box"><span class="info-box-icon bg-aqua"><em> <img src="{{ asset('homepublic/website icons/calculator.png') }}" style="width: 50px;height: 50px;"></em></span>
              <div class="info-box-content"><span class="info-box-text">Score Card Points </span> <span class="info-box-number" style="color:#FF7900">150 point </span>
                <a
                  href="index2.html">More info</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><em> <img src="{{ asset('homepublic/website icons/Plazza Boy.png') }}" style="width: 65px;height: 75px;"></em></span>
              <div class="info-box-content">
                <span class="info-box-text">Plazza Marketing</span>
                <span class="info-box-number" style="color:#FF7900">20%</span><a href="index2.html">More info</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix visible-sm-block"></div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box"><span class="info-box-icon bg-green"><em>  <img src="{{ asset('homepublic/website icons/old-typical-phone (2).png') }}" style="width: 65px;height: 65px;"></em></span>
              <div class="info-box-content"><span class="info-box-text">Closed on 1st call</span> <span class="info-box-number" style="color:#FF7900">90%</span>
                <a
                  href="index2.html">More info</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-yellow"><em>  <img src="{{ asset('homepublic/website icons/ticket.png') }}" style="width: 65px;height: 65px;"></em></span>
              <div class="info-box-content"><span class="info-box-text">Incidents Opened</span> <span class="info-box-number" style="color:#FF7900">1580</span>
                <a
                  href="index2.html">More info</a>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Team KPI"s</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  <div class="btn-group">
                    <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a></li>
                    </ul>
                  </div>
                  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="row">
                  <div class="col-md-5">
                    <p class="text-center">
                      <strong>2018 1st Half Performance</strong>
                    </p>
                    <div class="chart-responsive">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="350px"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-5 col-lg-7">
                    <p class="text-center">
                      <strong>2018 1st Half Performance</strong>
                    </p>
                    <div class="chart-responsive">
                      <!-- Sales Chart Canvas -->
                      <img src="{{ asset('homepublic/website icons/Picture1.png') }}" style="width:100%;padding-left: 150px;height: 350px;">
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->


                </div>
                <!-- /.row -->
              </div>
              <!-- ./box-body -->

              <div class="box-footer">
                <div class="row">
                  <div class="col-sm-3 col-xs-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-green"><i class="fa fa-caret-down"></i> 12%</span>
                      <h5 class="description-header">45,362</h5>
                      <span class="description-text">Total created incidents</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-xs-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 3%</span>
                      <h5 class="description-header">10,390.90</h5>
                      <span class="description-text">Incidets Resolved</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-xs-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                      <h5 class="description-header">44,009</h5>
                      <span class="description-text">Number of phone calls</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-xs-6">
                    <div class="description-block">
                      <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                      <h5 class="description-header">45,362</h5>
                      <span class="description-text">Incidets created</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <div class="row">
          <div class="col-md-6">
            <!-- PRODUCT LIST -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Messages</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <ul class="products-list product-list-in-box">
                  <li class="item">
                    <div class="product-img">
                      <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image" />
                    </div>
                    <div class="product-info">
                      <a href="javascript::;" class="product-title">QOS Team <span class="label label-warning pull-right" style="height: 20px;padding-top: 5px;"> View </span></a>
                      <span class="product-description">
                          Call Observation results for May is now available.
                        </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ asset('homepublic/dist/img/default-50x50.gif') }}" alt="Product Image" />
                    </div>
                    <div class="product-info">
                      <a href="javascript::;" class="product-title">ITHD Supervisor <span class="label label-warning pull-right" style="height: 20px;padding-top: 5px;"> View </span></a>
                      <span class="product-description">
                          April Schedule is now ready.
                        </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ asset('homepublic/dist/img/default-50x50.gif') }}" alt="Product Image" />
                    </div>
                    <div class="product-info">
                      <a href="index2.html" class="product-title">ITHD Mentor <span class="label label-warning pull-right" style="height: 20px;padding-top: 5px;"> View </span></a>
                      <span class="product-description">
                          Thank you for your efforts today.
                        </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="{{ asset('homepublic/dist/img/default-50x50.gif') }}" alt="Product Image" />
                    </div>
                    <div class="product-info">
                      <a href="javascript::;" class="product-title">ITHD Agent<span class="label label-warning pull-right" style="height: 20px;padding-top: 5px;"> View </span></a>
                      <span class="product-description">
                          Thank your for your help today.
                        </span>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="javascript::;" class="uppercase">View All Messages</a>
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->



          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <!-- /.col -->
            <div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">ITHD Stars</h3>
                  <div class="box-tools pull-right">
                    <span class="label label-danger" style="height: 30px;padding-top: 5px;font-size: 15px;">June Stars</span>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix" style="padding-left: 100px;">

                    <li>
                      <img src="{{ asset('homepublic/dist/img/210.bmp') }}" alt="User Image" />
                      <a class="users-list-name" href="#">Alexander</a>
                      <span class="users-list-date">Extra Task Star</span>
                    </li>
                    <li>
                      <img src="{{ asset('homepublic/dist/img/210.bmp') }}" alt="User Image" />
                      <a class="users-list-name" href="#">Sarah</a>
                      <span class="users-list-date">Vanilla Resolution Star</span>
                    </li>
                    <li>
                      <img src="{{ asset('homepublic/dist/img/210.bmp') }}" alt="User Image" />
                      <a class="users-list-name" href="#">Nora</a>
                      <span class="users-list-date"> Plazza Star</span>
                    </li>

                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::" class="uppercase">View Stars History</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
          </div>
          <!-- /.col -->
          <div class="row">
            <div class="col-md-6">
              <!-- MAP & BOX PANE -->


              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-light-blue">
                <span class="info-box-icon"><i> <img src="{{ asset('homepublic/website icons/like.png') }}"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">7 Mails</span>
                  <span class="info-box-number"><a href="index2.html" style="color: orange;">Thank You</a></span>

                  <span class="progress-description">
                    Thank you for your dedication.
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-orange">
                <span class="info-box-icon"><i> <img src="{{ asset('homepublic/website icons/dislike.png') }}"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">2 Mishandeled incidents </span>
                  <span class="info-box-number"><a href="index2.html" style="color:#000000;">Mishandeled incidents</a></span>
                  <span class="progress-description">
                    you never learn if you never fail.
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
              <div class="info-box bg-orange">
                <span class="info-box-icon"><i> <img src="{{ asset('homepublic/website icons/misroute.png') }}"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">2 Misourted incidents</span>
                  <span class="info-box-number"><a href="index2.html" style="color:#000000;">Misourted incidents</a></span>
                  <span>
                  Fast is fine, but accuracy is everything.
                  </span>
                </div>
                <!-- /.info-box-content -->

              </div>
              <!-- /.info-box -->


            </div>

            <div class="col-md-6">
              <!-- TABLE: Call Observation -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Call Observation Results</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Serial</th>
                          <th>Scope</th>
                          <th>Evaluation</th>
                          <th>Call Details</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>AD account unlock</td>
                          <td>Perfect</td>
                          <td> <a href="index2.html"> View Details</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>outlook Keeps Asking for credentials</td>
                          <td>Perfect</td>
                          <td> <a href="index2.html"> View Details</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Safenet Account password reset</td>
                          <td>Very Good</td>
                          <td> <a href="index2.html"> View Details</a></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>active sync configuration</td>
                          <td>Very Good</td>
                          <td> <a href="index2.html"> View Details</a></td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">

                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">for more call observations</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->



          </div>
        </div>
        <!-- /.row -->


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!--
    <div><a id="app" href="fireevent">fireevent</a></div>
    -->
    <footer class="footer">
      &nbsp;
      <div class="footericons">
        <a href="#" class="policy">Security Policy</a>
        <a href="#" class="contactus">Contact Us </a>
        <a href="#" class="support">Support</a>

      </div>
      <div class="copyright">
        <p style="color: white"> &nbsp; &nbsp; ©Developed by IT PA & UE Team </p>

      </div>

    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="{{ asset('homepublic/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="{{ asset('homepublic/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- FastClick -->
  <script src="{{ asset('homepublic/plugins/fastclick/fastclick.min.js') }}"></script>
  <!-- AdminLTE App --><!--
  <script src="{{ asset('homepublic/dist/js/pages/dashboard2.js') }}" type="text/javascript"></script>
  -->
  <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
  <script src="{{ asset('homepublic/dist/js/app.min.js') }}" type="text/javascript"></script>
  <!-- Sparkline -->
  <script src="{{ asset('homepublic/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
  <!-- jvectormap -->
  <script src="{{ asset('homepublic/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('homepublic/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('homepublic/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
  <!-- datepicker -->
  <script src="{{ asset('homepublic/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="{{ asset('homepublic/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="{{ asset('homepublic/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="{{ asset('homepublic/plugins/chartjs/Chart.min.js') }}" type="text/javascript"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->



  <!-- AdminLTE for demo purposes -->

</body>

</html>