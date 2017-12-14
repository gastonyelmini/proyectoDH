@extends('layouts.app')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Project: {{ $projectRequested->title }}</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<!-- <a href="/add-task'../../../../eliteadmin-inverse-php/form-basic.php'
" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add tasks</a> -->
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- Si el proyecto no tiene tasks -->
@if(count($projectTasks) == 0)

<!-- .row -->
<div class="row el-element-overlay m-b-40">
	<div class="no-friends">
		<h3>You have no <strong>tasks assiged to this project </strong><i class="em em-x"></i></h3>
	</div>
</div>
<!-- /.row -->

@endif 

@if(count($projectTasks) > 0)
<div class="row">
    <div class="col-sm-12 gantt-master" id="{{ $projectRequested->id }}">
        <div class="white-box">
            <h3 class="box-title m-b-0">Project <strong>{{ $projectRequested->title }}</strong></h3>
            <p class="text-muted m-b-30 font-13"> This is the actual project</p>
            <div class="gantt-container">
			    <svg id="gantt" width="400" height="600"></svg>
		    </div>
        </div>
    </div>
</div>
@endif

@endsection
