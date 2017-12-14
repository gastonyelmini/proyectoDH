@extends('layouts.app')

@section('content')
<div class="row bg-title">
      <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Projects assigned</h4> </div>
      <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
      <!-- <a href="/add-project" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add project</a> -->
          <?php //echo breadcrumbs(); ?>
      </div>
      <!-- /.col-lg-12 -->
  </div>




<div class="row">
    <div class="col-md-12">
        <div class="white-box">  
            @foreach($projects as $project)

            <div id="{{ $project[0]->id }}" class="comment-center">
                            <div class="comment-body">
                                <div class="user-img"> <img src="/images/profile_images/{{Auth::user()->avatar}}" alt="user" class="img-circle"></div>
                                <div class="mail-contnet">
                                    <h5>{{$project[0]->title}} </h5>
                                    <span class="mail-desc">

                                        @if ($project[0]->description)
                                        {{ $project[0]->description }}
                                        @endif
                                    </span>
                                    <a id="{{ $project[0]->id }}" href="/project-display/{{ $project[0]->id }}">
                                        <span class="label label-rounded label-info">View project</span>
                                    </a>
                                    <!-- <a id="{{ $project[0]->id }}" href="/add-task?id={{ $project[0]->id }}">
                                        <span class="label label-rounded label-info">Add tasks</span>
                                    </a> -->
                                    <a id="{{ $project[0]->id }}" href="/collaborators/{{ $project[0]->id }}">
                                        <span class="label label-rounded label-info">Tasks and collaborators</span>
                                    </a>
                                    
                                    <span class="time pull-right">{{date('d-m-Y', strtotime($project[0]->created_at))}}</span></div>
                            </div>
                        </div>
            @endforeach
        </div>
    </div>
</div>
@endsection