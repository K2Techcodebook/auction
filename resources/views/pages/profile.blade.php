@extends('layouts.site')

@section('title') Update Profile @endsection

@section('content')
<!-- DASHBOARD CONTENT -->
<div class="dashboard-content">
  <!-- HEADLINE -->
  <div class="headline buttons primary">
      <h4>Account Settings</h4>
  </div>

  @if(session('success'))
  <div class="alert alert-success"> {{session('success')}} </div>
  @endif
<!-- FORM BOX ITEMS -->
<div class="form">
	<!-- FORM BOX ITEM -->
	<div class="form-box-item">
		<h4>Profile Information</h4>
		<hr class="line-separator">
		<!-- PROFILE IMAGE UPLOAD -->
		<form id="profile-info-form" method="POST" action="{{route('updateProfile')}}">
      @csrf
      <!-- INPUT CONTAINER -->
      <div class="input-container">
				<label for="new_email" class="rl-label">Username</label>
				<input type="email" value="{{$user_details->username}}" id="new_email" name="username" placeholder="" readonly/>
			</div>
			<!-- /INPUT CONTAINER -->
      <!-- INPUT CONTAINER -->
      <div class="input-container">
				<label for="new_email" class="rl-label">Email</label>
				<input type="email" value="{{$user_details->email}}" id="new_email" name="email" placeholder="" readonly/>
			</div>
			<!-- /INPUT CONTAINER -->
			<!-- INPUT CONTAINER -->
			<div class="input-container half">
				<label for="new_pwd" class="rl-label">First Name</label>
				<input type="text"  value="{{$user_details->first_name}}" id="new_pwd" name="first_name" placeholder="">
        @if ($errors->has('first_name'))
        <br/>
        <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $errors->first('first_name') }}</strong>
        </span>
        @endif
			</div>
			<!-- /INPUT CONTAINER -->
			<!-- INPUT CONTAINER -->
			<div class="input-container half">
				<label for="new_pwd2" class="rl-label">Last Name</label>
				<input type="text" value="{{$user_details->last_name}}" id="new_pwd2" name="last_name" placeholder="">
        @if ($errors->has('last_name'))
        <br/>
        <span class="invalid-feedback" role="alert">
        <strong style="color:red">{{ $errors->first('last_name') }}</strong>
        </span>
        @endif
			</div>
			<!-- /INPUT CONTAINER -->
			<!-- INPUT CONTAINER -->
			<div class="input-container">
				<label for="website_url" class="rl-label">Country</label>
				<input type="text" value="{{$user_details->country}}" id="website_url" name="country" placeholder="">
        @if ($errors->has('country'))
        <br/>
        <span class="invalid-feedback" role="alert">
        <strong style="color:red">{{ $errors->first('country') }}</strong>
        </span>
        @endif
			</div>
			<!-- /INPUT CONTAINER -->
			<!-- INPUT CONTAINER -->
			<div class="input-container">
				<label for="website_url" class="rl-label">State</label>
				<input type="text" value="{{$user_details->state}}" id="website_url" name="state" placeholder="">
        @if ($errors->has('state'))
        <br/>
        <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $errors->first('state') }}</strong>
        </span>
        @endif
			</div>
			<!-- /INPUT CONTAINER -->
      <button  class="button mid-short primary">Save Changes</button>
		</div>
  	<!-- /INPUT CONTAINER -->
  	</form>
  </div>
  <!-- /FORM BOX ITEM -->
</div>

      

  @endsection


  @section ('footer')

@section ('footer')

@endsection
