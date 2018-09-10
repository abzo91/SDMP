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
      <a href="{{route('home')}}"> <img src="{{ asset('homepublic/website icons/OBS_Logo Left_White Text_RGB_Eng.png') }}" class="logo" style="float: left;"></a>
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
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                    </li>

                    <li>
                      <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>

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
            <li>
              <a href="{{route('administrator')}}">
                  <i class="fa fa-link"></i> <span>User Management</span>
                </a>
            </li>

      </section>
      <!-- /.sidebar -->
    </aside>
  </div>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              User Management
            </h1>
          </section>
          <section class="content">
      <form method="POST" action="{{ route('administrator') }}">
        @csrf @method('PATCH')
        <table>
          <tr style="background-color:#222d32; color:white;">
            <th style="border: 1px solid black;padding: 8px;">Name</th>
            <th style="border: 1px solid black;padding: 8px;">FTID</th>
            <th style="border: 1px solid black;padding: 8px;">Email</th>
            <th style="border: 1px solid black;padding: 8px;">Role</th>
            <th style="border: 1px solid black;padding: 8px;">Status</th>
          </tr>
          @foreach($allusers as $users)
          <tr>
            <td style="border: 1px solid black;padding: 8px;">{{$users->name}}</td>
            <td style="border: 1px solid black;padding: 8px;">{{$users->ftid}}</td>
            <td style="border: 1px solid black;padding: 8px;">
              <input type="hidden" name="email[]" value="{{$users->email}}" required>{{$users->email}}</td>
            <td style="border: 1px solid black;padding: 8px;">
              <select type="text" name="role_id[]" selected="{{ $users->role_id }}" required>
                      <option value="1" <?php echo $users->role_id == '1' ? 'selected' : '' ?> >Admin</option>
                      <option value="2" <?php echo $users->role_id == '2' ? 'selected' : '' ?> >User</option>
                      <option value="3" <?php echo $users->role_id == '3' ? 'selected' : '' ?> >3</option>
                      <option value="4" <?php echo $users->role_id == '4' ? 'selected' : '' ?> >4</option>
                      <option value="5" <?php echo $users->role_id == '5' ? 'selected' : '' ?> >5</option>
                      <option value="6" <?php echo $users->role_id == '6' ? 'selected' : '' ?> >6</option>
                      <option value="7" <?php echo $users->role_id == '7' ? 'selected' : '' ?> >7</option>
                    </select>
            </td>
            <td style="border: 1px solid black;padding: 8px;">
              <select type="text" name="status[]" selected="{{ $users->status }}" required>
                      <option value="0" <?php echo $users->status == '0' ? 'selected' : '' ?> >Inactive</option>
                      <option value="1" <?php echo $users->status == '1' ? 'selected' : '' ?> >Active</option>
                    </select>
            </td>
          </tr>
          @endforeach
        </table>
        <div class="btn btn-sm btn-flat pull-right" style="margin-top:15px;">
        <button type="submit" class="btn" style="background-color: #222d32;color:white;">Save Changes</button>
        </div>
      </form>
      <div class="btn btn-sm btn-flat pull-right" style="margin-top:15px;">
      <form method="POST" action="{{ route('ldapupdate') }}">
        @csrf
        <button type="submit" class="btn" style="background-color: #222d32;color:white;">Update all users from Active Directory</button>
      </form>
      </div>
    </section>
  </div>

  <!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="{{ asset('homepublic/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="{{ asset('homepublic/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- FastClick -->
  <script src="{{ asset('homepublic/plugins/fastclick/fastclick.min.js') }}"></script>
  <!-- AdminLTE App -->
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
  <script src="{{ asset('homepublic/dist/js/pages/dashboard2.js') }}" type="text/javascript"></script>



  <!-- AdminLTE for demo purposes -->

</body>

</html>