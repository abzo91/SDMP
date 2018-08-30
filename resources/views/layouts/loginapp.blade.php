<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .loginform {
                width: 480px;
                height: 430px;
                background:rgba(255,255,255, 0.8);
                position: absolute;
                top: 80px;
                left: 80px;
                padding: 40px;
                box-sizing: border-box;
                color: white;
                font-family: arial;
                text-align: center;
            }
            .loginform h1 {
                color:black;
                font-weight: bold;
                font-size: 20px;
                margin-bottom: 25px;
            }
            .loginform h2 {
                color: #F17E00;
                font-weight: bold;
                font-size: 15px;
                margin-bottom: 25px;
            }
            .loginform h3 {
                color: black;
                font-weight: bold;
                font-size: 20px;
                margin-bottom: 30px;
            }
            .submitform,input {
                width: 100%;
                font-size: 15px;
                margin: 7px 0;
                color: white;
                background-color: black;
                padding: 5px;
            }
            .submitform:hover {
                color: #F17E00;
                background: black;
                cursor: pointer;
            }
            .loginform a {
                color: #fff;
                font-size: 15px;
            }
            .submitform {
                background: #F17E00;
                border: 0px solid #000;
                width: 50%;
                font-weight: bold;
                font-size: 20px;
                align-content: center;
            }
            .signupform {
                background: black;
                border: 1px solid #F17E00;
                width: 50%;
                color: #F17E00;
                padding: 5px;
                font-size: 11px;
                font-weight: bold;
            }
            .signupform {
                cursor: pointer;
            }
            .chboxstyle {
                align-items: left;
                width: auto;
                float:left;
            }
            .logoimg {
                position: absolute;
                right: 20px;
                bottom: 20px;
            }
            .imgwh {
                width: 160px;
                height: 58px;
            }
            .form-control, .form-control:focus {
                background-color: black;
                box-shadow: 0 0px 0px rgba(0, 0, 0, 0) inset, 0 0 0px rgba(0, 0, 0, 0);
                outline: 0 none;
                color: white;
            }
            .is-invalid {
                border: 0px solid black;
            }
            .col-md-4 {
                color: black;
            }
            ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                color: white !important;
                opacity: 1; /* Firefox */
            }
        </style>
</head>
<body style="background-image:url('/images/Login_image.jpg'); background-size:cover;">

    <div class="loginform">
        @yield('content')
    </div>
    <div class="logoimg">
        <img src="{{ asset('/images/OBS_Logo Left_White Text_RGB_Eng.png') }}" class="imgwh">
    </div>
</body>
</html>
