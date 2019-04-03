	@include('affiliateslayout.header')

 @include('affiliateslayout.nav')
   @yield('content')


	
						<div class="page-header">
							<h1>
								User Profile Page
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									3 styles with inline editable feature
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="clearfix">
									<div class="pull-left alert alert-success no-margin alert-dismissable">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>

										<i class="ace-icon fa fa-umbrella bigger-120 blue"></i>
										Click on the image below or on profile fields to edit them ...
									</div>
										<div class="pull-right alert alert-success no-margin alert-dismissable">
										<button type="button" class="close" data-dismiss="alert">
											<i class="ace-icon fa fa-times"></i>
										</button>
									<a href="#my-modal" role="button" class="bigger-125 bg-primary white" data-toggle="modal">
									&nbsp; Update Profile And Account Info &nbsp;
												</div>
								</a>

								</div>

								<div class="hr dotted"></div>
  @foreach($post as $po)
								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="{{URL::asset('bussiness/assets/images/avatars/profile-pic.jpg')}}" />
												</span>

												<div class="space-4"></div>
											
												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="ace-icon fa fa-circle light-green"></i>
															&nbsp;
															<span class="white">{{$po->full_name}}</span>
														</a>

														<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
															<li class="dropdown-header"> Change Status </li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle green"></i>
&nbsp;
																	<span class="green">Available</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle red"></i>
&nbsp;
																	<span class="red">Busy</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="ace-icon fa fa-circle grey"></i>
&nbsp;
																	<span class="grey">Invisible</span>
																</a>
															</li>
														</ul>
													</div>
												</div>

											</div>

											<div class="space-6"></div>

										

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											<div >
											

												<span class="btn btn-app btn-sm btn-pink no-hover">
													<span class="line-height-1 bigger-170"> 4 </span>

													<br />
													<span class="line-height-1 smaller-90"> Projects </span>
												</span>

											
											</div>

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Full Name </div>

													<div class="profile-info-value">
														<span class="editable" id="username">{{$po->full_name}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Location </div>

													<div class="profile-info-value">
														<i class="fa fa-map-marker light-orange bigger-110"></i>
														<span class="editable" id="country"><?php if($po->address==0): else: echo $po->address; endif;?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Email </div>

													<div class="profile-info-value">
														<span class="editable" id="age">{{$po->email}}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Phone Number </div>

													<div class="profile-info-value">
														<span class="editable" id="age"><?php if($po->phone_number==0): else: echo $po->phone_number; endif;?></span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> Gender </div>

													<div class="profile-info-value">
														<span class="editable" id="about"><?php if($po->gender==0): else: echo $po->gender; endif;?></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Joined </div>

													<div class="profile-info-value">
														<span class="editable" id="signup">{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $po->created_at)->toDayDateTimeString() }}</span>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name">Referral Link</div>

													<div class="profile-info-value">
														<span class="editable" id="signup">{{ url('/register',$po->user_id) }}</span>
													</div>
												</div>
											</div>

											<div class="space-20"></div>
								

										</div>
										
									</div>
								</div>

								<div id="my-modal" class="modal fade" tabindex="-1">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h3 class="smaller lighter blue no-margin">A modal with a slider in it!</h3>
											</div>

											<div class="modal-body">
											
	  <form method="POST" action="{{ route('Update_profile') }}" enctype="multipart/form-data" aria-label="{{ __('Update Profile') }}">
                        @csrf
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Full Name</label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="Full Name" class="col-xs-10 col-sm-5" value="{{$po->full_name}}" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Address </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Address" class="form-control" value="<?php if($po->address==0): else: echo $po->address; endif;?>" />
										</div>
									</div>

									<div class="space-4"></div>

									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Email </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1-1" placeholder="Email" class="form-control" value="{{$po->email}}" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Gender</label>

										<div class="col-sm-9">
											
															<select class="form-control" id="form-field-select-1">
																<option value=""> Select Sex</option>
																<option value="AL">Alabama</option>
																<option value="AK">Alaska</option>
															</select>

										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">Phone Number </label>
											<div class="col-sm-9">
															<div class="input-group">
																<span class="input-group-addon">
																	<i class="ace-icon fa fa-phone"></i>
																</span>
																<input type="text" id="form-field-1-1" placeholder="Phone Number" class="form-control input-mask-phone" value="<?php if($po->phone_number==0): else: echo $po->phone_number; endif;?>" />
															
															</div>
									
											
										</div>
									</div>

									<div class="space-4"></div>
												   <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image (only .jpg)') }}</label>
                          <div class="col-md-6">
                    <input type="file" name="image"  class="form-control" id="image" aria-describedby="fileHelp">
                     <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                </div>
                       </div>
                       	<div class="space-4"></div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Referral Link </label>

										<div class="col-sm-9">
											<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />
											
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>


								
								

								</form>
											</div>

											<div class="modal-footer">
												<button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
													<i class="ace-icon fa fa-times"></i>
													Close
												</button>
											</div>
										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
								</div>
  @endforeach
							

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

						 @yield('footer')


            @include('affiliateslayout.footer')

@include('affiliateslayout.footerscript')


