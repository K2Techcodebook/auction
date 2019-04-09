@extends('layouts.app')

@section('content')

<!-- FORM POPUP -->
<div class="form-popup">
  <!-- CLOSE BTN -->
  <div class="close-btn">
      <!-- SVG PLUS -->
      <svg class="svg-plus">
          <use xlink:href="#svg-plus"></use>
      </svg>
      <!-- /SVG PLUS -->
  </div>
  <!-- /CLOSE BTN -->
  <!-- FORM POPUP CONTENT -->
  <div class="form-popup-content">
    <h4 class="popup-title">    {{ __('Login') }} to your Account</h4>
    <!-- LINE SEPARATOR -->
    <hr class="line-separator">
    <!-- /LINE SEPARATOR -->

   <form method="POST" action="{{ route('login') }}">
      @csrf
      <label for="username" class="rl-label">{{ __('E-Mail Address') }}</label>
      <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
      <label for="password" class="rl-label">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
        <!-- CHECKBOX -->
       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
<!--     <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked> -->
      <label for="remember" class="label-check">
          <span class="checkbox primary primary"><span></span></span>
          Remember username and password
      </label>
        <!-- /CHECKBOX -->
      <p>Forgot your password? <a href="{{ route('password.request') }}" class="primary">Click here!</a></p>
      <button type="submit" class="button mid dark">Login <span class="primary">Now!</span></button>

    </form>
  </div>
</div>
@endsection
