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
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Project {{ $projectRequested->title }}</h3>
            <p class="text-muted m-b-30 font-13"> This is the actual project</p>
            <div class="gantt-container">
			    <svg id="gantt" width="400" height="600"></svg>
		    </div>
        </div>
    </div>
</div>

@endsection
