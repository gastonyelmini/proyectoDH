@extends('layouts.app')

@section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">{{$actualUser->name}}'s Profile</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!--row -->
<div class="row">
	<div class="col-md-12">
			<div class="white-box">
					<div class="user-bg"> 
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
											<h1>{{ $friends }}</h1>
									</div>
									<div class="col-md-4 col-sm-4 text-center">
											<p class="text-blue">Projects</p>
											<h1>{{ $projects }}</h1>
									</div>
									<div class="col-md-4 col-sm-4 text-center">
											<p class="text-danger">Tasks asigned</p>
											<h1>{{ $tasksAsigned }}</h1>
									</div>
									<div class="stats-row col-md-12 m-t-20 m-b-0 text-center">
											<div class="stat-item">
											<h6>{{$actualUser->ocupation}}</h6> <b>{{$actualUser->description}}</b></div>
									</div>
							</div>
					</div>
			</div>
	</div>

</div>
<!-- /.row -->
@endsection
