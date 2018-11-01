<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Service Desk Management Portal</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('homepublic/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('homepublic/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('homepublic/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('homepublic/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('homepublic/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('homepublic/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : '' }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn"t work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
          .navbaricons{
			  font-size: 150%;
		  }
		
        .contactus {
			color: white;
		margin-left: 15%;
		text-decoration: none;	
	}
	
	.policy {
			color: white;
		margin-left: 20%;		
		text-decoration: none;	
	}
	
	.support {
			color: white;
		margin-left: 15%;		
		text-decoration: none;	
	}
		  input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
	padding-top: 12px;
	padding-right: 0px;
	padding-left: 0;
	padding-bottom: 12px;
	display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
	padding: 5px;
  margin-top: 15px;
}

/* Floating column for inputs: 75% width */
.col-75 {
	float: left;
	width: 600px;
	margin-top: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
 }
}
		  .star-rating {
  line-height:32px;
  font-size:1.25em;
}
*/.rating-loading{width:25px;height:25px;font-size:0;color:#fff;background:url(../img/loading.gif) top left no-repeat;border:none}.rating-container .rating-stars{position:relative;cursor:pointer;vertical-align:middle;display:inline-block;overflow:hidden;white-space:nowrap}.rating-container .rating-input{position:absolute;cursor:pointer;width:100%;height:1px;bottom:0;left:0;font-size:1px;border:none;background:0 0;padding:0;margin:0}.rating-disabled .rating-input,.rating-disabled .rating-stars{cursor:not-allowed}.rating-container .star{display:inline-block;margin:0 3px;text-align:center}.rating-container .empty-stars{color:#aaa}.rating-container .filled-stars{position:absolute;left:0;top:0;margin:auto;color:#FF7900;white-space:nowrap;overflow:hidden;-webkit-text-stroke:1px #777;text-shadow:1px 1px #999}.rating-rtl{float:right}.rating-animate .filled-stars{transition:width .25s ease;-o-transition:width .25s ease;-moz-transition:width .25s ease;-webkit-transition:width .25s ease}.rating-rtl .filled-stars{left:auto;right:0;-moz-transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0);-webkit-transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0);-o-transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0);transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0)}.rating-rtl.is-star .filled-stars{right:.06em}.rating-rtl.is-heart .empty-stars{margin-right:.07em}.rating-lg{font-size:3.91em}.rating-md{font-size:3.13em}.rating-sm{font-size:2.5em}.rating-xs{font-size:2em}.rating-xl{font-size:4.89em}.rating-container .clear-rating{color:#aaa;cursor:not-allowed;display:inline-block;vertical-align:middle;font-size:60%;padding-right:5px}.clear-rating-active{cursor:pointer!important}.clear-rating-active:hover{color:#843534}.rating-container .caption{color:#999;display:inline-block;vertical-align:middle;font-size:60%;margin-top:-.6em;margin-left:5px;margin-right:0}.rating-rtl .caption{margin-right:5px;margin-left:0}@media print{.rating-container .clear-rating{display:none}}
		  
      </style>
</head>

<body class="skin-blue">
    <div class="wrapper">

        <header class="main-header" style="top: 0px; position: fixed;width: 100%;">
            <!-- Logo -->
            <a href="{{route('home')}}"> <img src="{{ asset('homepublic/website icons/OBS_Logo Left_White Text_RGB_Eng.png')}}"
                    class="logo" style="float: left;"></a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <label style="color: white;font-size: 25px;padding-left: 20%;padding-top: 5px;"> Service Desk
                    Management Portal</label>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o navbaricons"></i>
                        <span class="label label-success">1</span>
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
                                                    <img src="{{ asset('storage/noimage.jpg')}}"
                                                        class="img-circle" alt="User Image" />
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>This is a Test Message :)</p>
                                            </a>
                                        </li><!-- end message -->
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
                                <img src="{{ asset('storage/'.Auth::user()->imagelocation)}}" class="user-image" alt="User Image" />
                                <span class="hidden-xs">{{Auth::user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('storage/'.Auth::user()->imagelocation)}}" class="img-circle"
                                        alt="User Image" />
                                    <p>
                                        {{Auth::user()->name}}
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <form id="formimgupload" method="post" action="{{route('imageupload')}}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <label class="btn btn-default btn-file">
                                                Edit image<input id="uploadimagefile" type="file" name="image" accept="image/*"
                                                    onchange="this.form.submit()" hidden>
                                            </label>
                                        </form>
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
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

                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">

                    <li>
                    <li class="treeview"><a href="#"> <em class="fa fa-home" style="font-size: 20px;"></em> <span>Home</span><em
                                class="fa fa-angle-left pull-right"></em> </a>

                        <ul class="treeview-menu">
                            <span class="label label-primary pull-right" style="padding-top: 10px;">150</span>

                            <li><a href="index2.html"><i class="fa fa-certificate"></i>Score Card</a></li>

                            <li><a href="{{route('co_creation')}}"><i class="fa fa-certificate"></i>Call Reports Per Month</a></li>
                            <li><a href="{{route('qos_creation')}}"><i class="fa fa-certificate"></i>QOS Dashboard</a></li>
                            <li><a href="index2.html"><i class="fa fa-certificate"></i>Survey Feedback</a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"> <em class="fa fa-line-chart"></em> <span>ITHD Performance</span><em
                                class="fa fa-angle-left pull-right"></em> </a>
                        <ul class="treeview-menu">
                            <li><a href="index2.html"><i class="fa fa-certificate"></i>ITHD Stars</a></li>
                            <li><a href="index2.html"><i class="fa fa-certificate"></i>ITHD Benchmark</a></li>
                            <li><a href="index2.html"><i class="fa fa-certificate"></i>ITHD KPI</a></li>
                            <li><a href="index2.html"><i class="fa fa-certificate"></i>Mentors and Shiftlead's evaluation</a></li>
                            <li><a href="index2.html"><i class="fa fa-certificate"></i>ITHD Plazza Report</a></li>
                            <li><a href="index2.html"><i class="fa fa-certificate"></i>ITHD Newcomer Report</a></li>

                        </ul>
                    </li>
                    <li>

                        <a href="pages/calendar.html">
                            <i class="fa fa-warning"></i> <span>Info & Tips</span>
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
                    <li class="header" style="color: white;font-size: 15px;">Tools</li>
                    <li><a href="#"><i class="fa fa-coffee"></i> BMT</a></li>
                    <li><a href="#"><i class="fa fa-calendar"></i> Schedule</a></li>
                    <li><a href="#"><i class="fa fa-clock-o"></i> Work Plan</a></li>
                    <li><a href="{{route('administrator')}}"></i> Admin Page</a></li>
                    </li>
                    <!-- /.sidebar -->
                </ul>
            </section>
        </aside>
        @yield('content')
        <!-- jQuery 2.1.3 -->
        <script src="{{ asset('homepublic/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{ asset('homepublic/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="{{ asset('homepublic/plugins/fastclick/fastclick.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
        <script src="{{ asset('homepublic/dist/js/app.min.js')}}" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="{{ asset('homepublic/plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{ asset('homepublic/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('homepublic/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="{{ asset('homepublic/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="{{ asset('homepublic/plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{ asset('homepublic/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="{{ asset('homepublic/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <!-- ChartJS 1.0.1 -->
        <script src="{{ asset('homepublic/plugins/chartjs/Chart.min.j')}}s" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <div>
            <footer class="main-footer" style="background-color: black !important;">
                <div>
                    <a href="#" class="policy">Security Policy</a>
                    <a href="#" class="contactus">Contact Us </a>
                    <a href="#" class="support">Support</a>
                    <a href="#" class="support">About</a>
                </div>
                <div class="copyright">
                    <p style="color: white">©Developed by IT PA & UE Team </p>
                </div>
            </footer>
        </div>
    </div>
    @yield('contenttwo')
</body>

</html>
