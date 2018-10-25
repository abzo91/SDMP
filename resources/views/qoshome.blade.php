@extends('layouts.qoshomeapp')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>Toolkit</h1>
    </section>
    <section class="content">
        <div class="box-header with-border">
            <h3 class="box-title">Toolkit</h3>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box"><a href="#"><span class="info-box-icon bg-aqua"><em> <img src="{{ asset('homepublic/website icons/chart.png')}}"
                                        style="width: 50px;"></em></span>
                            <div class="info-box-content"><span class="info-box-text" style="font-family: sans-serif; font-size: 18px; color: #FF7900; text-align: center;"><strong>New<br>Comers<br>Report</strong></span>
                            </div>
                        </a></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box"><a href="#">
                            <span class="info-box-icon bg-red"><em> <img src="{{ asset('homepublic/website icons/Plazza Boy.png')}}"
                                        style="width: 65px;height: 75px;"></em></span>
                            <div class="info-box-content">
                                <span class="info-box-text" style="font-family: sans-serif; font-size: 18px; color: #FF7900; text-align: center;"><strong>OBS
                                        IT<br>Support<br>Report</strong></span>
                            </div>
                        </a></div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box"><a href="#">
                            <span class="info-box-icon bg-green"><em> <img src="{{ asset('homepublic/website icons/rating.png')}}"
                                        style="width: 65px;height: 65px;"></em></span>
                            <div class="info-box-content"><span class="info-box-text" style="font-family: sans-serif; font-size: 18px; color: #FF7900; text-align: center;"><strong>ITHD<br>Stars<br>Report</strong></span>
                            </div>
                        </a></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box"><a href="#">
                            <span class="info-box-icon bg-pink"><em> <img src="{{ asset('homepublic/website icons/calculator.png')}}"
                                        style="width: 65px;height: 65px;"></em></span>
                            <div class="info-box-content"><span class="info-box-text" style="font-family: sans-serif; font-size: 18px; color: #FF7900; text-align: center;"><strong>Score<br>Card<br>Entry</strong></span></div><!-- /.info-box-content -->
                        </a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Team KPI's</h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <p class="text-center">
                                        <strong>2018 1st Half Performance</strong>
                                    </p>
                                    <div class="chart-responsive">
                                        <canvas id="salesChart" height="350px"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-7">
                                    <p class="text-center">
                                        <strong>2018 1st Half Performance</strong>
                                    </p>
                                    <div class="chart-responsive">
                                        <img src="{{ asset('homepublic/website icons/Picture1.png')}}" style="width:100%;padding-left: 100px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-down"></i>
                                            12%</span>
                                        <h5 class="description-header">45,362</h5>
                                        <span class="description-text">Total created incidents</span>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>
                                            3%</span>
                                        <h5 class="description-header">10,390.90</h5>
                                        <span class="description-text">Incidets Resolved</span>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i>
                                            20%</span>
                                        <h5 class="description-header">44,009</h5>
                                        <span class="description-text">Number of phone calls</span>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i>
                                            18%</span>
                                        <h5 class="description-header">45,362</h5>
                                        <span class="description-text">Incidets created</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Messages</h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="box-body">
                            <ul class="products-list product-list-in-box">
                                <li class="item">
                                    <div class="product-img">
                                        <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image" />
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript::;" class="product-title">QOS Team <span class="label label-warning pull-right"
                                                style="height: 20px;padding-top: 5px;"> View </span></a>
                                        <span class="product-description">
                                            Call Observation results for May is now available.
                                        </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <img src="{{ asset('homepublic/dist/img/default-50x50.gif')}}" alt="Product Image" />
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript::;" class="product-title">ITHD Supervisor <span class="label label-warning pull-right"
                                                style="height: 20px;padding-top: 5px;"> View </span></a>
                                        <span class="product-description">
                                            April Schedule is now ready.
                                        </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <img src="{{ asset('homepublic/dist/img/default-50x50.gif')}}" alt="Product Image" />
                                    </div>
                                    <div class="product-info">
                                        <a href="index2.html" class="product-title">ITHD Mentor <span class="label label-warning pull-right"
                                                style="height: 20px;padding-top: 5px;"> View </span></a>
                                        <span class="product-description">
                                            Thank you for your efforts today.
                                        </span>
                                    </div>
                                </li>
                                <li class="item">
                                    <div class="product-img">
                                        <img src="{{ asset('homepublic/dist/img/default-50x50.gif')}}" alt="Product Image" />
                                    </div>
                                    <div class="product-info">
                                        <a href="javascript::;" class="product-title">ITHD Agent<span class="label label-warning pull-right"
                                                style="height: 20px;padding-top: 5px;"> View </span></a>
                                        <span class="product-description">
                                            Thank your for your help today.
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="box-footer text-center"><a class="btn btn-sm btn-info btn-flat" data-toggle="modal"
                                data-target="#compose-modal"><em class="fa fa-pencil"></em> Compose Message</a><!-- /.Model Content -->

                            <a href="javascript::;" class="btn btn-sm btn-info btn-flat">View all Message</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- USERS LIST -->
                        <div class="box box-danger">
                            <div class="box-header with-border">
                                <h3 class="box-title">ITHD Stars</h3>
                                <div class="box-tools pull-right">
                                    <span class="label label-danger" style="height: 30px;padding-top: 5px;font-size: 15px;">June
                                        Stars</span>
                                </div>
                            </div>
                            <div class="box-body no-padding">
                                <ul class="users-list clearfix" style="padding-left: 100px;">
                                    <li>
                                        <img src="{{asset('homepublic/dist/img/210.bmp')}}" alt="User Image" />
                                        <a class="users-list-name" href="#" data-toggle="modal" data-target="#Star-modal">Fares</a>
                                        <span class="users-list-date">Extra Task Star</span>
                                        <a href="Agent.html"><img src="{{asset('homepublic/website icons/thumbs-up-icon-blue-md.png')}}"
                                                width:"30px" height="30px;"></a><span class="label label-success" style="font-size: 15px;">5</span>
                                    </li>
                                    <li>
                                        <img src="{{asset('homepublic/dist/img/210.bmp')}}" alt="User Image" />
                                        <a class="users-list-name" href="#" data-toggle="modal" data-target="#Star-modal">Shawky</a>
                                        <span class="users-list-date">Vanilla Resolution Star</span>
                                        <a href="Agent.html"><img src="{{asset('homepublic/website icons/thumbs-up-icon-blue-md.png')}}"
                                                width:"30px" height="30px;"></a><span class="label label-success" style="font-size: 15px;">5</span>
                                    </li>
                                    <li>
                                        <img src="{{asset('homepublic/dist/img/210.bmp')}}" alt="User Image" />
                                        <a class="users-list-name" href="#" data-toggle="modal" data-target="#Star-modal">Andrew</a>
                                        <span class="users-list-date"> Plazza Star</span>
                                        <a href="Agent.html"><img src="{{asset('homepublic/website icons/thumbs-up-icon-blue-md.png')}}"
                                                width:"30px" height="30px;"></a><span class="label label-success" style="font-size: 15px;">5</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="box-footer text-center">
                                <a href="javascript::" class="uppercase">View Stars History</a>
                            </div><!-- /.box-footer -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" style="padding-left: 
											30px;">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">QoS Inputs</h3>
                            </div>
                            <form action="{{route('co_creation')}}" method="get">
                                <strong><button type="submit" style="height: 40px; width: 400px; background-color: #FF7900; color: white; font-size: 16px; margin: 40px;">Call
                                        Observation</button>
                                </strong></form>
                            <form action="{{route('qos_creation')}}" method="get">
                                <strong><button style="height: 40px; width: 400px; background-color: #FF7900; color: white; font-size: 16px; margin: 0 40px;">QoS
                                        Dashboard</button>
                                </strong></form>
                            <strong><button style="height: 40px; width: 400px; background-color: #FF7900; color: white; font-size: 16px; margin: 40px;">Mentors
                                    and Shift Leads Evaluation</button></strong>
                            </strong>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">End of Shift</h3>
                            </div>
                            <div class="box-body">
                                <img src="{{ asset('homepublic/website icons/Picture1.png')}}" style="width:100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>


<!-- COMPOSE MESSAGE MODAL -->
<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Send Message</h4>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">TO:</span>
                            <input name="email_to" type="email" class="form-control" placeholder="Select recipient">
                        </div>
                    </div>

                    <div class="form-group">

                        <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="min-height: : 300px;"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="btn btn-info btn-file">
                            <i class="fa fa-paperclip"></i> Attachment
                            <input type="file" name="attachment" />
                        </div>
                        <p class="help-block">Max. 5MB</p>
                    </div>

                </div>
                <div class="modal-footer clearfix">
                    <button type="submit" class="btn btn-success btn-file"><i class="fa fa-envelope"></i> Send </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                        Discard</button>

                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- STAR MODAL -->
<div class="modal fade" id="Star-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-user-o"></i> Select ITHD Star</h4>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select class="form-control" name="Agent_Name">
                            <option value=" ">Please select agent name:</option>
                            @foreach($users as $users)
                            <option value="{{ $users->id }}">{{ $users->name }}</option>
                            @endforeach
                        </select>
                    </div>
            </form>
            <div class="modal-footer clearfix">
                <button type="submit" class="btn btn-success btn-file"><i class="fa fa-check "></i> Apply </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
