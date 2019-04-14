@extends('layouts.app')

@section('content')
<br><br>
<!-- FORM POPUP -->
<div class="form-popup">
  <!-- FORM POPUP CONTENT -->
  <div class="form-popup-content">
    <h4 class="popup-title">Register Account</h4>
    <!-- LINE SEPARATOR -->
    <hr class="line-separator">
    <!-- /LINE SEPARATOR -->
    <form   method="POST" action="{{route('register_new_user') }}" aria-label="{{ __('Register') }}">
      @csrf
      <label for="email_address4" class="rl-label required">Email Address</label>
      <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter your email address here...">
      @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong style="color:red">{{ $errors->first('email') }}</strong>
      </span>
      <br/>
      <br/>
      @endif

      <label for="username4" class="rl-label required">Username</label>
      <input type="text"  class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Enter your username here...">

      @if ($errors->has('username'))
      <span class="invalid-feedback" role="alert">
        <strong style="color:red">{{ $errors->first('username') }}</strong>
      </span>
      <br/>
      <br/>
      @endif

      <label for="firstname4" class="rl-label required">First Name</label>
      <input type="text"   class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" placeholder="Enter your firstname here...">
      @if ($errors->has('first_name'))
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $errors->first('first_name') }}</strong>
      </span>
      <br/>
      <br/>
      @endif

      <label for="lastname4" class="rl-label required">Last Name</label>
      <input type="text" name="last_name"  class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" placeholder="Enter your lastname here...">
      @if ($errors->has('last_name'))
      <span class="invalid-feedback" role="alert">
      <strong style="color:red">{{ $errors->first('last_name') }}</strong>
      </span>
      <br/>
      <br/>
      @endif

      <label for="password4" class="rl-label required">Password</label>
      <input type="password" name="password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter your password here...">
      @if ($errors->has('password'))
      <span class="invalid-feedback" role="alert">
      <strong style="color:red">{{ $errors->first('password') }}</strong>
      </span>
      <br/>
      <br/>
      @endif
      <label for="repeat_password4" class="rl-label required">Repeat Password</label>
      <input type="password"  name="password_confirmation" placeholder="Repeat your password here...">


      <label for="country" class="rl-label">Country</label>
      <input type="text"  class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" placeholder="Enter your country here...">
      @if ($errors->has('country'))
      <span class="invalid-feedback" role="alert">
      <strong style="color:red">{{ $errors->first('country') }}</strong>
      </span>
      <br/>
      <br/>
      @endif

      <label for="state" class="rl-label">State</label>
      <input type="text"  class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" placeholder="Enter your state here...">
      @if ($errors->has('state'))
      <span class="invalid-feedback" role="alert">
      <strong style="color:red">{{ $errors->first('state') }}</strong>
      </span>
      <br/>
      <br/>
      @endif
      {{-- <p class="highlighted"><span>Sorry!</span> That email is already registered</p> --}}

      <button class="button mid dark">{{ __('Register') }}<span class="primary">Now!</span></button>
      </form>
  </div>
  <!-- /FORM POPUP CONTENT -->
</div>
<!-- /FORM POPUP -->
