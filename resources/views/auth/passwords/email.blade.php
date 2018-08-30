@extends('layouts.loginapp')

@section('content')
<h3>Registration or Password reset</h3>
<h2>Thanks to enter your e-mail address and within 5 minutes you will receive an email with the activation/reset password URL</h2>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<form method="POST" action="{{ route('password.emailcustomized') }}" aria-label="{{ __('Reset Password') }}">
    @csrf
    <div class="form-group row">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="First.Last@orange.com" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </div>
    <button type="submit" class="submitform">
        {{ __('Submit') }}
    </button>
</form>
@endsection
