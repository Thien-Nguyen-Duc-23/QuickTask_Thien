@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('home.reset_password')</div>
                <div class="card-body">
                    @include('common.errors')
                    {!! Form::open(['method' => 'POST', 'route' => 'password.email']) !!}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">@lang('home.label_email')</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @include('common.errors')
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit(trans('home.btn_reset_password') , ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
