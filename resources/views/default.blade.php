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
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">


        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>
    </div>
    
     {!! Html::script('js/jquery.min.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/metisMenu.min.js') !!}
    {!! Html::script('js/sb-admin-2.js') !!}

</body>

</html>
