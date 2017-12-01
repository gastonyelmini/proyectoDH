
@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Projects</div>
                <div class="panel-body">
                  @if(!$projects->count())
                    <div class="row">
                      <div class="col-md-12">
                        <p class="alert alert-info">
                          Cree su nuevo <a href="/add-project">Proyecto</a>
                        </p>
                      </div>
                    </div>
                  @endif
                  @foreach ($projects as $project)
                      <div class="project">
                        <div class="project-title">
                          <h3>{{$project->title}}</h3>
                        </div>
                        <div class="project-half">
                          <div class="project-users">
                            <p><strong>Project author</strong></p>
                            <div class="project-author-container">
                              <img src="/images/profile_images/{{Auth::user()->avatar}}" alt="">
                            </div>
                            <div class="project-collaborators">
                              <p><strong>Project collaborators</strong></p>
                              <div class="project-author-container">
                                <img src="/images/profile_images/{{Auth::user()->avatar}}" alt="">
                              </div>
                            </div>
                            <div class="created-at">
                              <p><strong>Created at: </strong>{{date('d-m-Y', strtotime($project->created_at))}}</p>
                            </div>
                          </div>
                        </div>
                        <div class="project-half">
                          <div class="project-selector">
                            <a id="{{ $project->id }}" class="btn btn-info select-buttons" href="" type="button" name="button">View project</a>
                            <a id="{{ $project->id }}" class="btn btn-info select-buttons" href="/add-task?id={{ $project->id }}" type="button" name="button">View Tasks</a>
                            <a id="{{ $project->id }}" class="btn btn-info select-buttons" href="" type="button" name="button">Add collaborator</a>
                          </div>
                        </div>
                      </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">My projects</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="/add-project" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add project</a>
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!--row -->
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
            <div class="comment-center">
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
                        <a href="javacript:void(0)" class="action">
                          <i class="ti-close text-danger"></i>
                        </a>
                        <a href="javacript:void(0)" class="action">
                          <i class="ti-check text-success"></i>
                        </a>
                        <span class="time pull-right">{{date('d-m-Y', strtotime($project->created_at))}}</span></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- /.row -->
@endsection
