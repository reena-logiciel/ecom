<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    {!! Html::style('css/bootstrap.css') !!}
    {!! Html::style('css/metisMenu.min.css') !!}
    {!! Html::style('css/timeline.css') !!}
    {!! Html::style('css/sb-admin-2.css') !!}

</head>

<body>

    @yield('content')
    
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/metisMenu.min.js') !!}
    {!! Html::script('js/sb-admin-2.js') !!}

</body>

</html>
