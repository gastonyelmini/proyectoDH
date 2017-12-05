@extends('layouts.app')

@section('content')
<!-- {{ $projects }} -->
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Add tasks
          @if($projects)
           to {{ $projects[0]->title }}
          @endif
        </h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<!-- <a href="/add-task'../../../../eliteadmin-inverse-php/form-basic.php'
" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add tasks</a> -->
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

@if(session()->get('title'))
<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info">
			{{ "El proyecto " . session()->get('title') . " ha sido creado exitosamente." }}
		</p>
	</div>
</div>
@endif
@if(session()->get('taskCreated'))
<div class="row">
	<div class="col-md-12">
		<p class="alert alert-info">
			{{ session()->get('taskCreated') }}
		</p>
	</div>
</div>
@endif

<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Add task</h3>
            <p class="text-muted m-b-30 font-13"> Add a class to your project </p>
            <form class="form" method="POST" action="/add-task">
                {{ csrf_field() }}
                <div class="form-group row">
                  <label for="example-text-input" class="col-2 col-form-label">Title</label>
                  <div class="col-10">
                      <input required class="form-control" name="title" type="text" placeholder="Plase, insert a task name" id="example-text-input title" value="{{ old('title') }}">
                      @if($errors->has('title'))
      								  <span class="help-block">
      								    <strong>{{ $errors->first('title') }}</strong>
      								  </span>
      								@endif
                  </div>
                </div>

                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">From</label>
                    <div class="col-10">
                        <input required class="form-control" name="from" type="date" id="example-date-input">
                        @if($errors->has('from'))
          								<span class="help-block">
          									<strong>{{ $errors->first('from') }}</strong>
          								</span>
          							@endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">To</label>
                    <div class="col-10">
                        <input required class="form-control" name="to" type="date" id="example-date-input">
                        @if($errors->has('to'))
          								<span class="help-block">
          									<strong>{{ $errors->first('to') }}</strong>
          								</span>
          							@endif
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label for="example-color-input" class="col-2 col-form-label">Color</label>
                    <div class="col-10">
                        <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                    </div>
                </div> -->

                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
            </form>
        </div>
    </div>
</div>


<!-- SECOND SECTION -->


<div class="row">
  <div class="col-sm-12">
      <div class="white-box">
          <h3 class="box-title m-b-0">Your tasks</h3>
          <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
          <div class="table-responsive">
              <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                  <thead>
                      <tr>
                          <th>Title</th>
                          <th>Start</th>
                          <th>End</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Title</th>
                          <th>Start</th>
                          <th>End</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    @foreach($tasks as $task)
                      <tr>
                          <td>{{ $task->title }}</td>
                          <td>{{ $task->from }}</td>
                          <td>{{ $task->to }}</td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
<!-- /.row -->








<!--
<div class="row">
@if(session()->get('title'))
	<div class="col-md-12">
		<p class="alert alert-info">
			{{ "El proyecto " . session()->get('title') . " ha sido creado exitosamente." }}
		</p>
	</div>
</div>
@endif
@if(session()->get('taskCreated'))
	<div class="col-md-12">
		<p class="alert alert-info">
			{{ session()->get('taskCreated') }}
		</p>
	</div>
</div>
@endif
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Add a new task</div>
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="/add-task">
          	{{ csrf_field() }}

          	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
              <label for="title" class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title" placeholder="Plase, insert a task name" value="{{ old('title') }}" required autofocus>

								@if($errors->has('title'))
								  <span class="help-block">
								    <strong>{{ $errors->first('title') }}</strong>
								  </span>
								@endif

              </div>
          	</div>
            <div class="form-group">
              <label for="from" class="col-md-4 control-label">from</label>
              <div class="col-md-6 ">
								<input type="text" class="form-control" name="from" placeholder="dd/mm/yyyy">
							</div>
							@if($errors->has('from'))
								<span class="help-block">
									<strong>{{ $errors->first('from') }}</strong>
								</span>
							@endif
            </div>
						<div class="form-group">
              <label for="to" class="col-md-4 control-label">to</label>
              <div class="col-md-6 ">
								<input type="text" class="form-control" name="to" placeholder="dd/mm/yyyy">
							</div>
							@if($errors->has('to'))
								<span class="help-block">
									<strong>{{ $errors->first('to') }}</strong>
								</span>
							@endif
            </div>
						<div class="form-group">
              <label for="project" class="col-md-4 control-label"></label>
              <div class="col-md-6">
								@if($projects)
									<select id="dropdown" class="selectpicker">
										@if(!empty($_GET))
											@foreach($projects as $project)
												@if($_GET["id"] == $project->id)
										  		<option selected id="{{ $project->id }} " value="{{ $project->title }}">{{ $project->title }}</option>
												@else
													<option id="{{ $project->id }}" value="{{ $project->title }}">{{ $project->title }}</option>
												@endif

											@endforeach
										@else
											@foreach($projects as $project)
												<option id="{{ $project->id }}" value="{{ $project->title }}">{{ $project->title }}</option>
											@endforeach
										@endif
									</select>
								@endif
							</div>
            </div>


            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Submit
                </button>
              </div>
            </div>
        	</form>
      	</div>
      </div>
    </div>
  </div>
</div> -->

<script>
	window.onload = function () {
		var id = $('#dropdown option').filter(':selected').text();
		console.log(id);
	}
</script>
@endsection
