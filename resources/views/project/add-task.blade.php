@extends('layouts.app')

@section('content')
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
</div>

<script>
	window.onload = function () {
		var id = $('#dropdown option').filter(':selected').text();
		console.log(id);
	}
</script>
@endsection
