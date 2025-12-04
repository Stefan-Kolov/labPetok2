@extends('layouts.app')

@section('content')
    <h1>{{ $organizer->name }}</h1>
    <p>Email: {{ $organizer->email }}</p>
    <p>Phone: {{ $organizer->phone }}</p>

    <h2>Events</h2>
    <ul>
        @foreach($events as $event)
            <li>{{ $event->title }} ({{ $event->type }}) on {{ $event->date }}</li>
        @endforeach
    </ul>

    <a href="{{ route('organizers.index') }}">Back to list</a>
@endsection
