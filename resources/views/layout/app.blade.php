<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ trans('home.title') }}
        </title>
        <!-- CSS And JavaScript -->
        {{ Html::style(asset('css/app.css')) }}
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
                <a class="navbar-brand">
                    {{ trans('home.task_list') }}
                </a>
            </nav>
        </div>
        @yield('content')
        <!-- Script -->
        {{ Html::script(asset('js/app.js')) }}
    </body>
</html>
