
@extends('layouts.app')

@section('content')


<div id="projectsRoot">
  <div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">My projects</h4> </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="/add-project" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add project</a>
          <?php //echo breadcrumbs(); ?>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!--row -->
  @if(session()->get('title'))
  <div class="row">
  	<div class="col-md-12">
  		<p class="alert alert-info">
  			{{ "El proyecto " . session()->get('title') . " ha sido creado exitosamente." }}
  		</p>
  	</div>
  </div>
  @endif

  <div class="row">
      <div class="col-md-12">
          <div class="white-box">
              <h3 class="box-title">My Projects</h3>

              @if(!$projects->count())
                <p class="alert alert-info">
                  Cree su nuevo <a href="/add-project">Proyecto</a>
                </p>
              @endif

              @foreach ($projects as $project)
              <div id="{{ $project->id }}" class="comment-center">
                  <div class="comment-body">
                      <div class="user-img"> <img src="/images/profile_images/{{Auth::user()->avatar}}" alt="user" class="img-circle"></div>
                      <div class="mail-contnet">
                          <h5>{{$project->title}} </h5>
                          <span class="mail-desc">

                            @if ($project->description)
                            {{ $project->description }}
                            @endif
                          </span>
                          <a id="{{ $project->id }}" href="#">
                            <span class="label label-rounded label-info">View project</span>
                          </a>
                          <a id="{{ $project->id }}" href="/add-task?id={{ $project->id }}">
                            <span class="label label-rounded label-info">Tasks</span>
                          </a>
                          <a id="{{ $project->id }}" href="">
                            <span class="label label-rounded label-info">Collaborators</span>
                          </a>
                          <a @click="closeProject({{ $project->id }})" href="javacript:void(0)" class="action">
                            <i class="ti-close text-danger"></i>
                          </a>
                          <a @click="completeProject()" href="javacript:void(0)" class="action">
                            <i class="ti-check text-success"></i>
                          </a>
                          <span class="time pull-right">{{date('d-m-Y', strtotime($project->created_at))}}</span></div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</div>
<!-- /.row -->
@endsection
