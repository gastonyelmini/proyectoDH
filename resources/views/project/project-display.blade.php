@extends('layouts.app')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Project: </h4> 
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
            <h3 class="box-title m-b-0">Project</h3>
            <p class="text-muted m-b-30 font-13"> This is the actual project</p>
            <svg style="z-index: 100" id="gantt"></svg> 
        </div>     
    </div>
</div>

<script>
    //# sourceMappingURL=app.js.map
    var tasks = [
        {
            id: 'Task 1',
            name: 'Redesign website',
            start: '2016-12-28',
            end: '2016-12-31',
            progress: 20,
            dependencies: 'Task 2, Task 3'
        },
    ]
    var gantt = new Gantt("#gantt", tasks);
</script>
@endsection