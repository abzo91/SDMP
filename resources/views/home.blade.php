@extends('layouts.homeapp')

@section('content')

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
          <h1>Personal KPI's</h1>
        </section>
        <!-- Main content -->
        <section class="content">   <div class="box-header with-border">
                                    <h3 class="box-title">Personal KPI's</h3></div

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box"><span class="info-box-icon bg-aqua"><em> <img src="{{ asset('homepublic/website icons/calculator.png')}}" style="width: 50px;height: 50px;"></em></span>
                <div class="info-box-content"><span class="info-box-text">Score Card Points </span> <span class="info-box-number" style="color:#FF7900">150 point </span><a href="index2.html">More info</a></div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><em> <img src="{{ asset('homepublic/website icons/Plazza Boy.png')}}" style="width: 65px;height: 75px;"></em></span>
                <div class="info-box-content">
                  <span class="info-box-text">Plazza Marketing</span>
											 <span class="info-box-number"  style="color:#FF7900">20%</span><a href="index2.html">More info</a>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box"><span class="info-box-icon bg-green"><em>  <img src="{{ asset('homepublic/website icons/old-typical-phone (2).png')}}" style="width: 65px;height: 65px;"></em></span>
                <div class="info-box-content"><span class="info-box-text">Closed on 1st call</span> <span class="info-box-number" style="color:#FF7900">90%</span><a href="index2.html">More info</a></div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><em>  <img src="{{ asset('homepublic/website icons/ticket.png')}}" style="width: 65px;height: 65px;"></em></span>
                <div class="info-box-content"><span class="info-box-text">Incidents Opened</span> <span class="info-box-number" style="color:#FF7900">1580</span><a href="index2.html">More info</a></div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Team KPI's</h3>
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
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-5">
                      <p class="text-center">
                        <strong>2018 1st Half Performance</strong>
                      </p>
                      <div class="chart-responsive">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="350px"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-5 col-lg-7">
                      <p class="text-center">
                        <strong>2018 1st Half Performance</strong>
                      </p>
                      <div class="chart-responsive">
                        <!-- Sales Chart Canvas -->
                        <img src="{{ asset('homepublic/website icons/Picture1.png')}}" style="width:100%;padding-left: 100px;">
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                   
					  
                  </div>
					<!-- /.row -->
                </div><!-- ./box-body -->
				  
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-down"></i> 12%</span>
                        <h5 class="description-header">45,362</h5>
                        <span class="description-text">Total created incidents</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 3%</span>
                        <h5 class="description-header">10,390.90</h5>
                        <span class="description-text">Incidets Resolved</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                        <h5 class="description-header">44,009</h5>
                        <span class="description-text">Number of phone calls</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                        <h5 class="description-header">45,362</h5>
                        <span class="description-text">Incidets created</span>
                      </div><!-- /.description-block -->
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
			
			
 <div class="row">
	   <div class="col-md-6">
              <!-- PRODUCT LIST -->
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Your Messages</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">QOS Team <span class="label label-warning pull-right" style="height: 20px;padding-top: 5px;"> View </span></a>
                        <span class="product-description">
                          Call Observation results for May is now available.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{ asset('homepublic/dist/img/default-50x50.gif')}}" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                         <a href="javascript::;" class="product-title">ITHD Supervisor <span class="label label-warning pull-right" style="height: 20px;padding-top: 5px;"> View </span></a>
                        <span class="product-description">
                          April Schedule is now ready.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{ asset('homepublic/dist/img/default-50x50.gif')}}" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="index2.html" class="product-title">ITHD Mentor <span class="label label-warning pull-right" style="height: 20px;padding-top: 5px;"> View </span></a>
						  <span class="product-description">
                          Thank you for your efforts today.
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="{{ asset('homepublic/dist/img/default-50x50.gif')}}" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">ITHD Agent<span class="label label-warning pull-right" style="height: 20px;padding-top: 5px;"> View </span></a>
						  <span class="product-description">
                          Thank your for your help today.
                        </span>
                      </div>
                    </li><!-- /.item -->
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
					<a href="javascript::;" class="btn btn-sm btn-info btn-flat">Create new Message</a>
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat">View all Message</a>
                </div><!-- /.box-footer -->
         </div><!-- /.box -->
    </div><!-- /.col -->
           
	 
	 
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
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix" style="padding-left: 100px;">
                    
                    <li>
                      <img src="{{ asset('homepublic/dist/img/210.bmp')}}" alt="User Image"/>
                      <a class="users-list-name" href="#">Noha</a>
                      <span class="users-list-date">Extra Task Star</span>
							<a href="javascript::;" class="btn btn-sm btn-info btn-flat" style="background-color:#4bb4e6;">Thumbs up</a><span class="label label-success" style="font-size: 15px;">5</span>
                    </li>
                    <li>
                      <img src="{{ asset('homepublic/dist/img/210.bmp')}}" alt="User Image"/>
                      <a class="users-list-name" href="#">Hadeer</a>
                      <span class="users-list-date">Vanilla Resolution Star</span>
						<a href="javascript::;" class="btn btn-sm btn-info btn-flat" style="background-color:#4bb4e6;">Thumbs up</a><span class="label label-success" style="font-size: 15px;">6</span>
                    </li>
                    <li >
                      <img src="{{ asset('homepublic/dist/img/210.bmp')}}" alt="User Image"/>
                      <a class="users-list-name" href="#">Shawky</a>
                      <span class="users-list-date"> Plazza Star</span>
							<a href="javascript::;" class="btn btn-sm btn-info btn-flat" style="background-color:#4bb4e6;">Thumbs up</a><span class="label label-success" style="font-size: 15px;">9</span>
                    </li>
                  
                  </ul><!-- /.users-list -->
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::" class="uppercase">View Stars History</a>
                </div><!-- /.box-footer -->
              </div><!--/.box -->
            </div>
	 </div>
            <!-- /.col -->
           <div class="row">
			   <div class="col-md-6" style="padding-left: 
											30px;">
              <!-- MAP & BOX PANE -->
              <div class="box box-primary">
 			<div class="box-header with-border">
                  <h3 class="box-title">Qos Dashboard</h3>
                
                </div>
              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-light-blue">
                <span class="info-box-icon"><i> <img src="{{ asset('homepublic/website icons/like.png')}}"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">7 Mails</span>
                  <span class="info-box-number"><a href="index2.html" style="color: orange;">Thank You</a></span>
                 
                  <span class="progress-description">
                    Thank you for your dedication.
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-orange">
                <span class="info-box-icon"><i> <img src="{{ asset('homepublic/website icons/dislike.png')}}"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">2 Mishandeled incidents </span>
                  <span class="info-box-number"><a href="index2.html" style="color:#000000;">Mishandeled incidents</a></span>
                  <span class="progress-description">
                    you never learn if you never fail.
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-aqua-active">
                <span class="info-box-icon"><i> <img src="{{ asset('homepublic/website icons/misroute.png')}}"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">2 Misourted incidents</span>
                  <span class="info-box-number"><a href="index2.html" style="color:#000000;">Misourted incidents</a></span>
                  <span>
                  Fast is fine, but accuracy is everything.
                  </span>
                </div><!-- /.info-box-content -->
              
				   </div>
              <div>&nbsp;</div>
              </div><!-- /.info-box -->
          
		 
       </div>
			   
          <div class="col-md-6">
              <!-- TABLE: Call Observation -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Your Call Observation Results</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Serial</th>
                          <th>Scope</th>
							<th>Date</th>
                          <th>Evaluation</th>
							<th>Call Details</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>AD account unlock</td>
                          <td>29th of August</td>
							<td>Perfect</td>
                          <td> <a href="index2.html"> View Details</a></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>outlook Keeps Asking for credentials</td>
                          <td>29th of August</td>
							<td>Perfect</td>
                         <td> <a href="index2.html"> View Details</a></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Safenet Account password reset</td>
							<td>29th of August</td>
                          <td>Very Good</td>
                         <td> <a href="index2.html"> View Details</a></td>
                        </tr>
                        <tr>
                           <td>4</td>
                          <td>active sync configuration</td>
							<td>29th of August</td>
                          <td>Very Good</td>
                         <td> <a href="index2.html"> View Details</a></td>
                        </tr>
                       
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                 
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat" style="margin-left: 70%;">More Call Observations</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            
	 
	 
      </div>
          </div><!-- /.row -->
          
		
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

    @endsection