@extends('layouts.app')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Add projects</h4> </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="/add-task" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Add tasks</a>
        <?php //echo breadcrumbs(); ?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- .row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Add project</h3>
            <p class="text-muted m-b-30 font-13"> Create a new project and start adding tasks!</p>
            <form class="form-horizontal" method="POST" action="/add-project">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-12">Name</label>
                    <div class="col-md-12">
                        <input id="title" class="form-control" name="title" placeholder="Plase, insert a project name..." value="{{ old('title') }}" required type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12">Description</label>
                    <div class="col-md-12">
                        <textarea id="description" name="description" placeholder="Insert a description of your project..." class="form-control" rows="5"></textarea>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Add project</button>
            </form>
        </div>
    </div>
</div>
<!-- /.row -->
<!-- /.row -->
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new project</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/add-project">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" placeholder="Plase, insert a project name" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
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










@endsection
