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

<hr>

@yield('content')
</body>
</html>
