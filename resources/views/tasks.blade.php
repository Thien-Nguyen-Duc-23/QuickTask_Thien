@extends('layout.app')
@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('home.new_task')
            </div>
            <div class="panel-body">
                <!-- Display Validation Errors -->
                @include('common.errors')
                @include('common.success')
                <!-- New Task Form -->
                {!! Form::open(['route' => 'postTask', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                    {{ csrf_field() }}
                    <!-- Task Name -->
                    <div class="form-group">
                        {!! Form::label('task', trans('home.task'), ['class' => 'col-sm-3 control-label']) !!}
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
            @php
                $defaut=0;
            @endphp
            @if (count($listTask) > $defaut)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @lang('home.current_tasks')
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>@lang('home.task')</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($listTask as $task)
                                    <tr>
                                        <td class="table-text">
                                            <div>{{ $task->name }}</div>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
