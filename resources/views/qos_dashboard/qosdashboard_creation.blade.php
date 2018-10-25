@extends('layouts.qoshomeapp')

@section('content')
<div class="content-wrapper" style="background:#FFFFFF;">
    <section class="content-header">
        <h1>Your Personal KPIs </h1>
    </section>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 style="color:#ff7900; text-align: center; font-weight: 600;font-size: 40px;">Add Record</h3>
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
                </div>
                <div class="container" style="font-size: 15px; margin-left: 15px; background: #FFFFFF;">
                    <form method="POST" action="{{route('qos_creation')}}">
                        @csrf
                        <div class="row">
                            <div class="col-25">
                                <label>Category</label>
                                <label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <select name="Category" class="form-control select2" style="width: 100%; margin-top: 10px;">
                                    <option value="Thank_you_mail" selected="selected">Thank you mail</option>
                                    <option value="Mishandle_Plazza">Mishandle Plazza</option>
                                    <option value="Misroute_Ticket">Misroute Ticket</option>
                                    <option value="Monthly_Star">Monthly Star</option>
                                    <option value="Wow_Call">WoW Call</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Title</label>
                                <label style="color: orangered;">*</label>
                            </div>
                            <div class="col-75">
                                <input name="Title" type="text" placeholder="Reference " style="border-radius: 10px; box-shadow:inset 0 0 5px #000000;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Agent Name</label><label style="color: orangered;">*</label>
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
                                <label for="subject">Comments</label>
                            </div>
                            <div class="col-75">
                                <textarea id="subject" name="Comments" placeholder="Write something.." style="height:200px; border-radius: 10px; box-shadow:inset 0 0 5px #000000;"></textarea>
                            </div>
                        </div>
                </div>
                <div style="margin-top: 40px; float: right; margin-right: 13%">
                    <button class="btn btn-sm btn-info btn-flat" style="width: 150px; font-size: 20px;">Save</button>
                    <a class="btn btn-sm btn-info btn-flat" style="width: 150px; font-size: 20px; margin-left: 30px; ">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
