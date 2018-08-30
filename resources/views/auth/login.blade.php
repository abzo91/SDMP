@extends('layouts.loginapp')

@section('content')
<h1>Service Desk Management Portal</h1>
<h2>To login, enter your email address below:</h2>
<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
    @csrf
    <div class="form-group row">
    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="First.Last@orange.com" required>
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
    </div>
    <div class="form-group row">
    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password" name="password" placeholder="********" required>
    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    </div>
    <div>
        <input class="chboxstyle" type="checkbox" name="remember"  id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label style="color: black;font-weight: bold;display:flex; justify-content:flex-start;padding-left: 5px;" for="remember">Remember me</label>
    </div>
    <div>
    <button type="submit" class="submitform">
        {{ __('Login') }}
    </button>
    </div>
    <div>
    <button type="button" onclick="window.location='{{ route('password.request') }}'" class="signupform">{{ __('Forgot password and Signup') }}</button>
    </div>
</form>
@endsection