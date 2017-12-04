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
        <h4 class="page-title">Chat</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- .chat-row -->
<div class="chat-main-box">
    <!-- .chat-left-panel -->
    <div class="chat-left-aside">
        <div class="open-panel"><i class="ti-angle-right"></i></div>
        <div class="chat-left-inner">
            <div class="form-material">
                <input class="form-control p-20" type="text" placeholder="Search Contact"> </div>
            <ul class="chatonline style-none ">
                <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="active"><img src="../plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="../plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                </li>
                <li class="p-20"></li>
            </ul>
        </div>
    </div>
    <!-- .chat-left-panel -->
    <!-- .chat-right-panel -->
    <div class="chat-right-aside">
        <div class="chat-main-header">
            <div class="p-20 b-b">
                <h3 class="box-title">Chat Message</h3> </div>
        </div>
        <div class="chat-box">
            <ul class="chat-list slimscroll p-t-30">
                <chat-log :messages="messages"></chat-log>
            </ul>
            <div class="row send-chat-box">
                <div class="col-sm-12">
                    <chat-composer v-on:messagesent="addMessage"></chat-composer>
                </div>
            </div>
        </div>
    </div>
    <!-- .chat-right-panel -->
</div>
<!-- /.chat-row -->



@endsection
