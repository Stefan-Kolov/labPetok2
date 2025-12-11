<!DOCTYPE html>
<html>
<head>
    <title>Event System</title>
</head>
<body>
<nav>
    <a href="{{ route('organizers.index') }}">Organizers</a> |
    <a href="{{ route('events.index') }}">Events</a>
</nav>

@if(session('success'))
    <div style="padding:10px; background: #d4edda; color:#155724; margin-bottom:15px;">
        {{ session('success') }}
    </div>
@endif


<hr>

@yield('content')
</body>
</html>
