@extends('layouts.app')

@section('content')

<?php $user = DB::table('users')->where('id', auth()->user()->id)->get() ?>

{{-- <div class="container">
	@if (Session::get('info'))
	<div class="row">
		<div class="col-md-12">
			<p class="alert alert-info">{{ Session::get('info') }}</p>
		</div>
	</div>
	@endif
</div>
<div class="row">
	<div class="avatar-container">
		<img src="/images/profile_images/{{Auth::user()->avatar}}" alt="">
	</div>
	<div class="info-container">
		<h1>{{Auth::user()->name}}</h1>
	</div>
	<div class="user-description">
		<p><strong>{{Auth::user()->ocupation}}</strong></p>
		<p>{{Auth::user()->description}}</p>
	</div>
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">Update your information</div>

			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="/edit-user" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="col-md-4 control-label">Name</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control" name="name" value="{{ old('name', $user[0]->name) }}" autofocus>
							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
              @endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('lastName') ? ' has-error' : '' }}">
						<label for="lastName" class="col-md-4 control-label">Last Name</label>

						<div class="col-md-6">
							<input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName', $user[0]->lastName) }}" autofocus>
							@if ($errors->has('lastName'))
								<span class="help-block">
                	<strong>{{ $errors->first('lastName') }}</strong>
                </span>
              @endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
						<label for="phone" class="col-md-4 control-label">Phone</label>

						<div class="col-md-6">
							<input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone', $user[0]->phone) }}" autofocus>
							@if ($errors->has('phone'))
								<span class="help-block">
									<strong>{{ $errors->first('phone') }}</strong>
								</span>
              @endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('ocupation') ? ' has-error' : '' }}">
						<label for="ocupation" class="col-md-4 control-label">Ocupation</label>

						<div class="col-md-6">
							<input id="ocupation" type="text" class="form-control" name="ocupation" value="{{ old('ocupation', $user[0]->ocupation) }}" autofocus>
							@if ($errors->has('ocupation'))
								<span class="help-block">
									<strong>{{ $errors->first('ocupation') }}</strong>
								</span>
              @endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
						<label for="description" class="col-md-4 control-label">Description</label>

						<div class="col-md-6">
							<input id="description" type="text" class="form-control" name="description" value="{{ old('description', $user[0]->description) }}" autofocus>
							@if ($errors->has('description'))
								<span class="help-block">
									<strong>{{ $errors->first('description') }}</strong>
								</span>
              @endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
						<label for="adress" class="col-md-4 control-label">Adress</label>

						<div class="col-md-6">
							<input id="adress" type="text" class="form-control" name="adress" value="{{ old('adress', $user[0]->adress) }}" autofocus>
							@if ($errors->has('adress'))
								<span class="help-block">
									<strong>{{ $errors->first('adress') }}</strong>
								</span>
              @endif
						</div>
					</div>

					<div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
						<label for="avatar" class="col-md-4 control-label">Avatar</label>

						<div class="col-md-6">
							<input id="avatar" type="file" class="form-control" name="avatar" value="{{ old('avatar') }}" autofocus>
							@if ($errors->has('avatar'))
								<span class="help-block">
									<strong>{{ $errors->first('avatar') }}</strong>
								</span>
              @endif
						</div>
					</div>



					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary"> Update </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div> --}}

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">My Profile</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!--row -->
<div class="row">
	<div class="col-md-6">
			<div class="white-box">
					<div class="user-bg"> <img src="../plugins/images/large/" alt="user" style="100%">
							<div class="overlay-box">
									<div class="user-content">
											<a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="/images/profile_images/{{Auth::user()->avatar}}"></a>
											<h4 class="text-white">{{Auth::user()->name}}</h4>
											<h5 class="text-white">{{Auth::user()->email}}</h5>
									</div>
							</div>
					</div>
					<div class="user-btm-box">
							<div class="row">
									<div class="col-md-4 col-sm-4 text-center">
											<p class="text-purple"><i class="ti-facebook"></i></p>
											<h1>258</h1>
									</div>
									<div class="col-md-4 col-sm-4 text-center">
											<p class="text-blue"><i class="ti-twitter"></i></p>
											<h1>125</h1>
									</div>
									<div class="col-md-4 col-sm-4 text-center">
											<p class="text-danger"><i class="ti-dribbble"></i></p>
											<h1>556</h1>
									</div>
									<div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
											<div class="stat-item">
													<h6>{{Auth::user()->ocupation}}</h6> <b>{{Auth::user()->description}}</b></div>
									</div>
							</div>
					</div>
			</div>
	</div>
	<div class="col-md-6">
			<div class="white-box">
					<h3 class="box-title m-b-0">Update my profile</h3>
					<p class="text-muted m-b-30 font-13">Insert your new profile info</p>
					<div class="row">
							<div class="col-sm-12 col-xs-12">
									<form method="POST" action="/edit-user" enctype="multipart/form-data">
										{{ csrf_field() }}
											<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
													<label for="exampleInputuname">User Name</label>
													<div class="input-group">
															<div class="input-group-addon"><i class="ti-user"></i></div>
															<input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name', $user[0]->name) }}" autofocus> </div>
															@if ($errors->has('name'))
																<span class="help-block">
																	<strong>{{ $errors->first('name') }}</strong>
																</span>
								              @endif
											</div>
											{{-- <div class="form-group">
													<label for="exampleInputEmail1">Last Name</label>
													<div class="input-group">
															<div class="input-group-addon"><i class="ti-user"></i></div>
															<input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName', $user[0]->lastName) }}" autofocus placeholder="Last name"> </div>
															@if ($errors->has('lastName'))
																<span class="help-block">
								                	<strong>{{ $errors->first('lastName') }}</strong>
								                </span>
								              @endif
											</div> --}}
											<div class="form-group{{ $errors->has('ocupation') ? ' has-error' : '' }}">
													<label for="exampleInputEmail1">Ocupation</label>
													<div class="input-group">
															<div class="input-group-addon"><i class="ti-user"></i></div>
															<input id="ocupation" type="text" class="form-control" name="ocupation" value="{{ old('ocupation', $user[0]->ocupation) }}" autofocus placeholder="Ocupation"> </div>
															@if ($errors->has('ocupation'))
																<span class="help-block">
								                	<strong>{{ $errors->first('ocupation') }}</strong>
								                </span>
								              @endif
											</div>
											<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
													<label for="exampleInputEmail1">Description</label>
													<div class="input-group">
															<div class="input-group-addon"><i class="ti-user"></i></div>
															<input id="description" type="text" class="form-control" name="description" value="{{ old('description', $user[0]->description) }}" autofocus placeholder="Description"> </div>
															@if ($errors->has('description'))
																<span class="help-block">
								                	<strong>{{ $errors->first('description') }}</strong>
								                </span>
								              @endif
											</div>
											<div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
													<label for="exampleInputEmail1">Adress</label>
													<div class="input-group">
															<div class="input-group-addon"><i class="ti-user"></i></div>
															<input id="adress" type="text" class="form-control" name="adress" value="{{ old('adress', $user[0]->adress) }}" autofocus placeholder="Adress"> </div>
															@if ($errors->has('adress'))
																<span class="help-block">
								                	<strong>{{ $errors->first('adress') }}</strong>
								                </span>
								              @endif
											</div>
											<div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
													<label for="exampleInputEmail1">Avatar</label>
													<div class="input-group">
															<div class="input-group-addon"><i class="ti-user"></i></div>
															<input id="avatar" type="file" class="form-control" name="avatar" value="{{ old('avatar') }}" autofocus></div>
															@if ($errors->has('avatar'))
																<span class="help-block">
								                	<strong>{{ $errors->first('avatar') }}</strong>
								                </span>
								              @endif
											</div>


											<button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Update</button>
									</form>
							</div>
					</div>
			</div>
	</div>
</div>
<!-- /.row -->
@endsection
