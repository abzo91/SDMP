@extends('layouts.qoshomeapp')

@section('content')
<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper" style="background:#FFFFFF;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Your Personal KPIs </h1>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 style="color:#ff7900; text-align: center; font-weight: 600;font-size: 40px;">Create Call
                        Observation</h3>
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <div class="box-tools pull-right">
                    </div>
                </div><!-- /.box-header -->
                <div class="container" style="font-size: 15px; margin-left: 15px; background: #FFFFFF;">
                    <form method="POST" action="{{ route('co_creation') }}">
                        @csrf
                        <div class="row">
                            <div class="col-25">
                                <label>Title</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <input type="text" placeholder="Title..." style="border-radius: 10px; box-shadow:inset 0 0 5px #000000;"
                                    name="Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Observed Agent</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <select name="Agent_Name" style="border-radius: 10px; box-shadow:inset 0 0 5px #000000;">
                                    <option value=" ">Please select agent name:</option>
                                    @foreach($users as $users)
                                    <option value="{{ $users->id }}">{{ $users->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="country">Silence</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <label class="radio-inline">
                                    <input type="radio" name="Silence" value="1">Bad
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Silence" value="2">Average
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Silence" value="3">Good
                                </label>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="country">Plazza Marketing</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <label class="radio-inline">
                                    <input type="radio" name="Plazza_Marketing" value="1">Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Plazza_Marketing" value="2">No
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Plazza_Marketing" value="3">N/A
                                </label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-25">
                                <label>Technical Skills</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75" style="font-size: 15px;">
                                <input id="input-1" name="Technical_Skills" class="rating rating-loading" data-min="0"
                                    data-max="5" data-step="1" value="0">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-25">
                                <label for="country">Shift Style</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <label class="radio-inline">
                                    <input type="radio" name="Shift_Style" value="1">Morning
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Shift_Style" value="2">Night
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="country">Ticket number Provided</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <label class="radio-inline">
                                    <input type="radio" name="Ticket_Number_Provided" value="1">Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Ticket_Number_Provided" value="2">No
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Ticket_Number_Provided" value="3">N/A
                                </label>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="country">Greetings</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <label class="checkbox-inline">
                                    <input type="hidden" name="greetings1" value="0" />
                                    <input type="checkbox" name="greetings1" value="1">Start Greeting
                                </label>
                                <label class="checkbox-inline">
                                    <input type="hidden" name="greetings2" value="0" />
                                    <input type="checkbox" name="greetings2" value="1">End Greeting
                                </label>
                                <label class="checkbox-inline">
                                    <input type="hidden" name="greetings3" value="0" />
                                    <input type="checkbox" name="greetings3" value="1">Not Mentioned
                                </label>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Tone of Voice</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">



                                <label class="radio-inline">
                                    <input type="radio" name="Tone_of_Voice" value="1">Not Clear
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="Tone_of_Voice" value="2">Average
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="Tone_of_Voice" value="3">Clear
                                </label>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-25">
                                <label>Attitude</label>
                            </div>
                            <div class="col-75" style="width: 800px;">

                                <label class="radio-inline">
                                    <input type="radio" name="Attitude" value="1">Proffesional
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="Attitude" value="2"> Pleasant
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="Attitude" value="3">Hesitant
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="Attitude" value="4">Sleepy
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Attitude" value="5">Agressive
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Attitude" value="6">Too Friendly
                                </label>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Hold</label><label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <label class="radio-inline">
                                    <input type="radio" name="Hold" value="1">Not Used
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Hold" value="2">Used Properly
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Hold" value="3">Used Improperly
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Thanked For Holding</label>
                            </div>
                            <div class="col-75">

                                <label class="radio-inline">
                                    <input type="radio" name="Thanked_for_Holding" value="1">Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Thanked_for_Holding" value="2">No
                                </label>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="subject">Comments</label>
                            </div>
                            <div class="col-75">
                                <textarea id="subject" name="Comments" placeholder="Write something.." style="height:200px; border-radius: 10px; box-shadow:inset 0 0 5px #000000;"></textarea>
                            </div>
                        </div>


                        <div style="margin-top: 40px; float: right; margin-right: 13%">
                            <button type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
