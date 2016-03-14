<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>M Social</title>
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="col-md-9">
                @yield('content')
            </div>
            <div class="col-md-3">
                <p>
                    Sidebar
                </p>
            </div>
        </div>
    </body>
</html>
