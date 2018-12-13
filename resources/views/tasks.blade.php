@extends('layout.app')
@section('content')
<!-- Bootstrap Boilerplate... -->
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ trans('home.new_task')}}
            </div>
            <div class="panel-body">
                <!-- New Task Form -->
                {!! Form::open(['method' => 'POST', 'class' => 'form-horizontal']) !!}
                    {{ csrf_field() }}
                    <!-- Task Name -->
                    <div class="form-group">
                        {!! Form::label('email', trans('home.task'), ['class' => 'col-sm-3 control-label']) !!}  
                        <div class="col-sm-6">
                            {!! Form::text('name', '', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            {!! Form::submit(trans('home.add'), ['class' => 'btn btn-default']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- TODO: Current Tasks -->
@endsection
