@extends('layouts.qoshomeapp')

@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper" style="background:#FFFFFF;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Your Personal KPIs </h1>
    </section>
     <style>
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
			  padding: 10px;
			  padding-left: 60px;
			  padding-right: 60px;
			  color:#FFFFFF;
			  text-align:Center;
			  margin-top: 10px;
			  }
		  
		  td{
			 font-size: 15;
			  padding: 20px;
			  text-align: center;
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
		  .imgcenter {
			  width: 45px;
			  align :middle;
}

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
		  .star-rating {
  line-height:32px;
  font-size:1.25em;
}
*/.rating-loading{width:25px;height:25px;font-size:0;color:#fff;background:url(../img/loading.gif) top left no-repeat;border:none}.rating-container .rating-stars{position:relative;cursor:pointer;vertical-align:middle;display:inline-block;overflow:hidden;white-space:nowrap}.rating-container .rating-input{position:absolute;cursor:pointer;width:100%;height:1px;bottom:0;left:0;font-size:1px;border:none;background:0 0;padding:0;margin:0}.rating-disabled .rating-input,.rating-disabled .rating-stars{cursor:not-allowed}.rating-container .star{display:inline-block;margin:0 3px;text-align:center}.rating-container .empty-stars{color:#aaa}.rating-container .filled-stars{position:absolute;left:0;top:0;margin:auto;color:#FF7900;white-space:nowrap;overflow:hidden;-webkit-text-stroke:1px #777;text-shadow:1px 1px #999}.rating-rtl{float:right}.rating-animate .filled-stars{transition:width .25s ease;-o-transition:width .25s ease;-moz-transition:width .25s ease;-webkit-transition:width .25s ease}.rating-rtl .filled-stars{left:auto;right:0;-moz-transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0);-webkit-transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0);-o-transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0);transform:matrix(-1,0,0,1,0,0) translate3d(0,0,0)}.rating-rtl.is-star .filled-stars{right:.06em}.rating-rtl.is-heart .empty-stars{margin-right:.07em}.rating-lg{font-size:3.91em}.rating-md{font-size:3.13em}.rating-sm{font-size:2.5em}.rating-xs{font-size:2em}.rating-xl{font-size:4.89em}.rating-container .clear-rating{color:#aaa;cursor:not-allowed;display:inline-block;vertical-align:middle;font-size:60%;padding-right:5px}.clear-rating-active{cursor:pointer!important}.clear-rating-active:hover{color:#843534}.rating-container .caption{color:#999;display:inline-block;vertical-align:middle;font-size:60%;margin-top:-.6em;margin-left:5px;margin-right:0}.rating-rtl .caption{margin-right:5px;margin-left:0}@media print{.rating-container .clear-rating{display:none}}
         </style>
      
          <div class="row" >
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 style="color:#ff7900; text-align: center; font-weight: 600;font-size: 30px;">Agent's Score Card</h3>
                  <!-- /.Filter-content -->
					  <div style="width: 15%;">
              <div class="form-group">
              <form method="POST" action ="">
                      @csrf 
                    <label>Search by Agent Name</label>
                    <select name="Agent_Name" style="border-radius: 10px; box-shadow:inset 0 0 5px #000000;">
                            <option value=" ">All agents</option>
                            @foreach($users as $user)
                            <option name = "id" value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-sm btn-info btn-flat" style="margin: 10px 15% 10px 85%; width: 100px;">Submit</button>

                      </form>
                    </div>
           
        </div><!-- /.Filter-content -->
					

                </div><!-- /.box-header -->
					 <div  style="font-size: 20px; background: #FFFFFF; padding-left: 0%; margin-left: 0%;">
                            @if(count($scores) > 0)
                            <table  style="width:97%; font-size: 12px; margin-left: 15px;">
                                <tr style="background-color: black; color:white">
                                    <th style="color:white">Agent Name</th>
                                    <th style="color:white">Previous Half</th>
                                    <th style="color:white">This Half</th>
                                </tr>
                                @foreach($scores as $score)
                                <tr>
                                        
                                        <td>{{$score->name}}</td>
                                        <td></td>
                                        <td> {{$score->totalPoints}}</td>
                                        
                                </tr>
                                @endforeach
                                @endif
                            </table>
						 

                </div><!-- /.box-header -->
				  
				  						
  
</div> 
                </div><!-- ./box-body -->               
              </div><!-- /.box -->
            </div><!-- /.row -->
          </div><!-- /.row -->
			
			
 
				  
              
          
		
        
      </div><!-- /.content-wrapper -->

   	 
  @endsection