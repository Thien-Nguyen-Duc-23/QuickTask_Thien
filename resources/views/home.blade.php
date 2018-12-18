@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('home.card-header')</div>
                <div class="card-body">
                    @include('common.errors')
                    @lang('home.login-message')
                    <a href="{{ route('task.index') }}" class="btn btn-success text-white">@lang('home.label_task')</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
