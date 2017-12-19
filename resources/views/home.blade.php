@extends('layouts.app') 

@section('content')
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Dashboard</h4> 
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<?php //echo breadcrumbs(); ?>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-md-12 col-lg-12 col-sm-12">
		<div class="white-box">
			<div class="row row-in">
				<div class="col-lg-3 col-sm-6 row-in-br">
					<div class="col-in row">
						<div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe016;"></i>
							<h5 class="text-muted vb">ACTIVE PROJECTS</h5> 
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<h3 class="counter text-right m-t-15 text-success">{{ count($activeProjects) }}</h3> 
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
					<div class="col-in row">
						<div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
							<h5 class="text-muted vb">ASSIGNED TASKS</h5> 
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<h3 class="counter text-right m-t-15 text-megna">{{ $tasksAsigned }}</h3> 
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="progress">
								<div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 row-in-br">
					<div class="col-in row">
						<div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
							<h5 class="text-muted vb">MY <br>FRIENDS</h5> 
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<h3 class="counter text-right m-t-15 text-danger">{{count($actualUser->friends()->get())}}</h3> 
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6  b-0">
					<div class="col-in row">
						<div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
							<h5 class="text-muted vb">ASSIGNED<br> PROJECTS</h5> 
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<h3 class="counter text-right m-t-15 text-primary">{{$assignedProjects}}</h3> 
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="progress">
								<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--row -->
<!-- /.row -->
<div class="row">
	<div class="col-md-7 col-lg-9 col-sm-12 col-xs-12">
		<div class="white-box">
			<h3 class="box-title">Active projects</h3>
			<div class="comment-center">
                @foreach($activeProjects as $project)
				<div class="comment-body">
					<div class="user-img">
						<img src="/images/profile_images/{{Auth::user()->avatar}}" alt="user" class="img-circle">
					</div>
					<div class="mail-contnet">
						<h5>{{ $project->title }}</h5>  <span class="mail-desc">{{ $project->description }}</span>  <span class="label label-rounded label-info">ID: {{ $project->id }}</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a>  <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">{{ $project->created_at }}</span>
					</div>
				</div>
                @endforeach
                @if(count($activeProjects) == 0) 
                <div class="comment-body">
					<h5>No projects yet! <i class="em em-mailbox_with_no_mail"></i></h5>
				</div>
                @endif
			</div>
		</div>
	</div>
	<div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
		<div class="row">
			<div class="col-md-12">
				<div class="bg-theme-dark m-b-15">
					<div class="row weather p-20">
						<div class="col-md-6 col-xs-6 col-lg-6 col-s m-6 m-t-40">
							<h3>&nbsp;</h3>
							<h1>{{round($weather[0]['Temperature']['Metric']['Value'])}}<sup>°C</sup></h1>
							<p class="text-white">Buenos Aires, Argentina.</p>
						</div>
						<div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 text-right"> <i class="wi wi-day-cloudy-high"></i>
							<br/>
							<br/> <b class = "text-white">{{$weather[0]['WeatherText']}}</b>
							<p class="w-title-sub">{{date('l \t\h\e jS')}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--row -->
<div class="row">
	<div class="col-md-12 col-lg-6 col-sm-12">
		<div class="white-box">
			<h3 class="box-title">Recent Comments</h3>
			@if(count($users_per_message) == 0)
				<div class="comment-body">
					<h5>No messages yet! <i class="em em-mailbox_with_mail"></i></h5>
				</div>
			@endif
			@if(count($users_per_message) != 0)
			<div class="comment-center">
        @foreach($users_per_message as $user)
					<div class="comment-body">
						<div class="user-img">
							@if($user['users'][0]->avatar)
								<img src="/images/profile_images/{{ $user['users'][0]->avatar }}" alt="user" class="img-circle">
							@endif
						</div>
						<div class="mail-contnet"> 
							<h5>{{ $user['users'][0]->name }}</h5>  
							<span class="mail-desc">{{ $user['message']->message }}</span>  
							<span class="label label-rounded label-info">{{ $user['message']->created_at }}</span>
						</div>
					</div>
				@endforeach
			</div>
			@endif
			
		</div>
	</div>
</div>
<!-- /.row -->
@endsection