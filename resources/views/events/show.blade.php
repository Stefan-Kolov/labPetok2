@extends('layouts.app')

@section('content')
    <h1>Event Details</h1>

    <p><strong>Title:</strong> {{ $event->title }}</p>

    <p><strong>Description:</strong><br>
        {{ $event->description }}
    </p>

    <p><strong>Type:</strong> {{ $event->type }}</p>

    <p><strong>Date:</strong> {{ $event->date }}</p>

    <p><strong>Organizer:</strong>
        {{ $event->organizer ? $event->organizer->name : 'No organizer' }}
    </p>

    <br>

    <a href="{{ route('events.edit', $event) }}">Edit</a>

    <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
    </form>

    <br><br>
    <a href="{{ route('events.index') }}">← Back to Events</a>
@endsection
