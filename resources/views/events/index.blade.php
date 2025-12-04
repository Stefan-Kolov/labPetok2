@extends('layouts.app')

@section('content')
    <h1>Events</h1>
    <a href="{{ route('events.create') }}">Add Event</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Type</th>
            <th>Date</th>
            <th>Organizer</th>
            <th>Actions</th>
        </tr>
        @foreach($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>{{ $event->title }}</td>
                <td>{{ $event->type }}</td>
                <td>{{ $event->date }}</td>
                <td>{{ $event->organizer->name }}</td>
                <td>
                    <a href="{{ route('events.show', $event) }}">View</a>
                    <a href="{{ route('events.edit', $event) }}">Edit</a>
                    <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $events->links() }}
@endsection
