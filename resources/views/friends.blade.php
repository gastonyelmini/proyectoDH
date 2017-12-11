@extends('layouts.app')

@section('content')

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">My Friends</h4> </div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="{{ route('add-friend') }}" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add a friend</a>
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- .row -->
<div class="row el-element-overlay m-b-40">
		<!-- /.usercard -->

		@foreach ($friends as $friend)
		<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
			<div class="white-box">
				<div class="el-card-item">
					<div class="el-card-avatar el-overlay-1">
						<img src="/images/profile_images/{{$friend->avatar}}" />
						<div class="el-overlay">
							<ul class="el-info">
								<!-- Ver perfil -->
								<li>
									<a class="btn default btn-outline image-popup-vertical-fit" href="/images/profile_images/{{$friend->avatar}}">
										<i class="fa fa-search" aria-hidden="true"></i>
										View
									</a>
								</li>
								<!-- Agregar amigo -->
								<li>
									<a class="btn default btn-outline addFriend" >
										<i class="fa fa-trash-o" aria-hidden="true"></i>
										Delete
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="el-card-content">
						<h3 class="box-title">{{$friend->name}}</h3>
						<small>{{$friend->email}}</small>
						<br/>
					</div>
				</div>
			</div>
		</div>
		<!-- /.usercard-->
    @endforeach
		<!-- /.usercard-->

	</div>
	<!-- /.row -->


@endsection
