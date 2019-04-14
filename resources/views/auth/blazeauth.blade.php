@extends('layouts.app')

@section('content')
<div class="container register">
  <div class="row">
      <div class="col-md-3 register-left">
          <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
          <h3>Welcome</h3>
          <p>You are 30 seconds away from earning your own money!</p>
          <input type="submit" name="" value="Login"/><br/>
      </div>
      <div class="col-md-9 register-right">
          <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
              </li>
          </ul>
          <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <h3 class="register-heading">Apply as a Employee</h3>
                  <div class="row register-form">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="First Name *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Last Name *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Password *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
                          </div>
                          <div class="form-group">
                              <div class="maxl">
                                  <label class="radio inline">
                                      <input type="radio" name="gender" value="male" checked>
                                      <span> Male </span>
                                  </label>
                                  <label class="radio inline">
                                      <input type="radio" name="gender" value="female">
                                      <span>Female </span>
                                  </label>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <input type="email" class="form-control" placeholder="Your Email *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                          </div>
                          <div class="form-group">
                              <select class="form-control">
                                  <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                  <option>What is your Birthdate?</option>
                                  <option>What is Your old Phone Number</option>
                                  <option>What is your Pet Name?</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                          </div>
                          <input type="submit" class="btnRegister"  value="Register"/>
                      </div>
                  </div>
              </div>
              <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <h3  class="register-heading">Apply as a Hirer</h3>
                  <div class="row register-form">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="First Name *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Last Name *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                          </div>


                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Password *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                          </div>
                          <div class="form-group">
                              <select class="form-control">
                                  <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                  <option>What is your Birthdate?</option>
                                  <option>What is Your old Phone Number</option>
                                  <option>What is your Pet Name?</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="`Answer *" value="" />
                          </div>
                          <input type="submit" class="btnRegister"  value="Register"/>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</div>
@endsection





 <!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div>

                <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                        @csrf

                          <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('UserName') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

 -->
