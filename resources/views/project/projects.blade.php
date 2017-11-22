
@extends('layouts.app')

@section('content')
<div class="container">
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
                          <p>Created at: {{date('d-m-Y', strtotime($project->created_at))}}</p>

                        </div>
                        <div class="project-selector">
                          <a id="{{ $project->id }}" class="btn btn-info" href="/add-task?id={{ $project->id }}" type="button" name="button">Ver</a>
                          <a id="{{ $project->id }}" class="btn btn-info" href="/add-task?id={{ $project->id }}" type="button" name="button">Tasks</a>
                        </div>
                      </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
