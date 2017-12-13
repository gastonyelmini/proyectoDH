@extends('layouts.app')

@section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">My Profile</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!--row -->
<div class="row">
	<div class="col-md-6">
			<div class="white-box">
					<div class="user-bg"> <img src="../plugins/images/large/" style="100%">
							<div class="overlay-box">
									<div class="user-content">
											<a href="javascript:void(0)"><img alt="img" class="thumb-lg img-circle" src="/images/profile_images/{{$actualUser->avatar}}"></a>
											<h4 class="text-white">{{$actualUser->name}}</h4>
											<h5 class="text-white">{{$actualUser->email}}</h5>
									</div>
							</div>
					</div>
					<div class="user-btm-box">
							<div class="row">
									<div class="col-md-4 col-sm-4 text-center">
											<p class="text-purple">Friends</p>
											<h1>{{count($actualUser->friends()->get())}}</h1>
									</div>
									<div class="col-md-4 col-sm-4 text-center">
											<p class="text-blue">Projects</p>
											<h1>{{count($actualUser->getProjects())}}</h1>
									</div>
									<div class="col-md-4 col-sm-4 text-center">
											<p class="text-danger"><i class="ti-dribbble"></i></p>
											<h1>556</h1>
									</div>
									<div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
											<div class="stat-item">
													<h6>{{$actualUser->ocupation}}</h6> <b>{{$actualUser->description}}</b></div>
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
															<input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name', $actualUser->name) }}" autofocus> </div>
															@if ($errors->has('name'))
																<span class="help-block">
																	<strong>{{ $errors->first('name') }}</strong>
																</span>
								              @endif
											</div>
											<div class="form-group{{ $errors->has('ocupation') ? ' has-error' : '' }}">
													<label for="exampleInputEmail1">Ocupation</label>
													<div class="input-group">
															<div class="input-group-addon"><i class="ti-id-badge"></i></div>
															<input id="ocupation" type="text" class="form-control" name="ocupation" value="{{ old('ocupation', $actualUser->ocupation) }}" autofocus placeholder="Ocupation"> </div>
															@if ($errors->has('ocupation'))
																<span class="help-block">
								                	<strong>{{ $errors->first('ocupation') }}</strong>
								                </span>
								              @endif
											</div>
											<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
													<label for="exampleInputEmail1">Description</label>
													<div class="input-group">
															<div class="input-group-addon"><i class="ti-comment-alt"></i></div>
															<input id="description" type="text" class="form-control" name="description" value="{{ old('description', $actualUser->description) }}" autofocus placeholder="Description"> </div>
															@if ($errors->has('description'))
																<span class="help-block">
								                	<strong>{{ $errors->first('description') }}</strong>
								                </span>
								              @endif
											</div>
											<div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
													<label for="exampleInputEmail1">Adress</label>
													<div class="input-group">
															<div class="input-group-addon"><i class="ti-home"></i></div>
															<input id="adress" type="text" class="form-control" name="adress" value="{{ old('adress', $actualUser->adress) }}" autofocus placeholder="Adress"> </div>
															@if ($errors->has('adress'))
																<span class="help-block">
								                	<strong>{{ $errors->first('adress') }}</strong>
								                </span>
								              @endif
											</div>
											<div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
													<label for="exampleInputEmail1">Avatar</label>
                          <input id="avatar" type="file" class="dropify" name="avatar" value="{{ old('avatar') }}" autofocus>
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
