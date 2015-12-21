<html>
<head>
    <title>App Name - @yield('title')</title>
    {!! HTML::style('css/bootstrap.min.css') !!}
    {!! HTML::script('js/bootstrap.min.js') !!}
</head>
<body>
@section('sidebar')
    <div>
        <a href="{{ route('events.index') }}">Events</a>
    </div>
    <div>
        <a href="{{ route('members.index') }}">Member</a>
    </div>
    <div>
        <a href="{{ route('loot.index') }}">Loot</a>
    </div>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>