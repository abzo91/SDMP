@extends('layouts.qoshomeapp')

@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper" style="background:#FFFFFF;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Your Personal KPIs </h1>
	</section>
	<style>
	input[type=checkbox] {
		opacity: 1 !important;
		position: relative !important;
	}
	.footer {
		background-color: black;
		
		width: 100%;
		right: 0;
		bottom: 0;
		left: 0;
		
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
		padding: 10px;
		border: 1px solid lightgrey;
		height: 100%;
		box-sizing: border-box;
		resize: vertical;}
		
		/* Style the label to display next to the inputs */
		label {
			padding-top: 12px;
			padding-right: 0px;
			padding-left: 0;
			padding-bottom: 12px;
			display: inline-block;
			
		}
		th
		{ 
			width: 1px;
			font-weight:bolder;
			word-wrap:break-word;
			
			border: 1px solid lightgrey;
			color:#000000;
			text-align:Center;
			padding-top: 15px;
			padding-bottom: 10px;
			color: orange;
			background-color: black;
		}
		
		td{
			border: 1px solid lightgrey;
			
			text-align: center;
		}
		/* Style the submit button */
		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			
			cursor: pointer;
			
		}
		
		/* Style the container */
		
		
		
		
		/* Floating column for labels: 25% width */
		.col-25 {
			float: left;
			width: 25%;
			margin-top: 6px;
		}
		
		/* Floating column for inputs: 75% width */
		.col-75 {
			float: left;
			width: 50%;
			margin-top: 6px;
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
		</style>
		
		<div class="row" >
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						
						<h3 style="color:#ff7900; text-align: center; font-weight: 600;font-size: 30px;" >Misroutes Verification</h3>
						<div class="box-tools pull-right">
						</div>
					</div><!-- /.box-header -->
                    <div  style="font-size: 20px; background: #FFFFFF; padding-left: 0%; margin-left: 0%;">
                        @if(count($misroutes) >0)
                        <form method="POST" action="{{ route('misroutesSave') }}">
                        @csrf @method('PATCH')
						<table style="width:98.5%; font-size: 12px; border-style: solid;border-color: lightgrey;border-width: thin;margin-left: 0.8%;">
							<col width="30">
							<col width="30">
							<col width="30">
							<col width="30">
							<col width="30">
							<col width="30">
							<col width="200">
							<tr>
								<th>Incident Number</th>
								<th>Nb of Misroutes</th>
								<th>Tier 2 </th>
								<th> Misrouted By</th>
								<th>Misrouted Date</th>	  
								<th>Verify</th>
								<th>Comments</th>

                            </tr>
                            
                            @foreach($misroutes as $misroute)
                            
							<tr>
                                <input type="hidden" name="incident[{{$misroute->id}}]" value="{{$misroute->IncidentNumber}}" required>
								<td>{{$misroute->IncidentNumber}}</td>
								<td>{{$misroute->NbOfMisroutes}}</td>
								<td>{{$misroute->tier2}}</td>
								<td>{{$misroute->name}}</td>
								<td>{{$misroute->MisroutedDate}}</td>

								<td>
									<input type="radio" value = "1" name = "verified[{{$misroute->id}}]"/> Yes
									&nbsp;
									<input type="radio" value = "-1" name = "verified[{{$misroute->id}}]"/> No 
								</td>
								
								<td><textarea placeholder="insert comment" name ="comments[{{$misroute->id}}]"></textarea></td>
                                
                            </tr>	
                           
                            @endforeach		
							
                        </table>
                    
                        @endif

						
                        <button type="submit" class="btn btn-sm btn-info btn-flat" style="margin: 10px 15% 10px 85%; width: 100px;">Submit</button>
                    </form>
					</div> 
				</div><!-- ./box-body -->    
				
			</div><!-- /.box -->
			
		</div><!-- /.row -->
	</div><!-- /.row -->
	
	
	
	
	
	
	
	
	
</div><!-- /.content-wrapper -->


@endsection