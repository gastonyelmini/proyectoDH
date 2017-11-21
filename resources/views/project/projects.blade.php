@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Projects</div>
                <div class="panel-body">
                  @foreach ($projects as $project)
                      <div class="project">
                        <div class="project-title">
                          <h3>{{$project->title}}</h3>
                          <p>Created at: {{date('d-m-Y', strtotime($project->created_at))}}</p>

                        </div>
                        <div class="project-selector">
                          <button type="button" name="button">Ver proyecto</button>
                        </div>
                      </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
