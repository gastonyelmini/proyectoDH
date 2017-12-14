@extends('layouts.app')

@section('content')
<div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Tasks and collaborators</h4> </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
      <!-- <a href="/add-project" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add project</a> -->
          <?php //echo breadcrumbs(); ?>
      </div>
      <!-- /.col-lg-12 -->
  </div>

@if(!$tasksAndCollaborators)
    <div class="row el-element-overlay m-b-40">
        <div class="no-friends">
            <h3>You have no <strong>tasks</strong> <i class="em em-astonished"></i></h3>
        </div>
    </div>
@endif

@foreach($tasksAndCollaborators as $taskAndCollaborators) 
    <div class="col-sm-6">
        <div class="white-box">
            <h3 class="box-title">{{$taskAndCollaborators['task']->title}}</h3>
            <div class="row text-center">
                @if($taskAndCollaborators['collaborators'])
                    @foreach($taskAndCollaborators['collaborators'] as $collaborators)
                        <div class="col-sm-4">
                            <p style="text-align: center; margin-bottom: -10px;">{{strtoupper ($collaborators[0]->name)}}</p>
                            <div class="chart easy-pie-chart-1" data-percent="{{$taskAndCollaborators['task']->progress}}"> <span><img src="/images/profile_images/{{$collaborators[0]->avatar}}" alt="user" class="img-circle"/></span> </div>
                        </div>
                        
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endforeach


@endsection