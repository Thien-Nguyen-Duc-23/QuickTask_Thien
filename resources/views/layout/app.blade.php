<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@lang('home.title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ Html::style(asset('css/app.css')) }}
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <a class="navbar-brand">
                    @lang('home.task_list')
                </a>
            </nav>
        </div>
        @yield('content')
        {{ Html::script(asset('js/app.js')) }}
        {{ Html::script(asset('js/timeout.js')) }}
    </body>
</html>
