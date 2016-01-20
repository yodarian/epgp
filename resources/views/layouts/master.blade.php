<html>
<head>
    <title>SWTOR EPGP - @yield('title')</title>
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/epgp.css') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">SWTOR EPGP</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="{{ route('events.index') }}">Events</a></li>
            <li><a href="{{ route('members.index') }}">Member</a></li>
            <li><a href="{{ route('loot.index') }}">Loot</a></li>
        </ul>
    </div>
</nav>
@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>
</body>
</html>