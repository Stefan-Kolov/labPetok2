@extends('layouts.app')

@section('content')
    <h1>Organizers</h1>
    <a href="{{ route('organizers.create') }}">Add Organizer</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @foreach($organizers as $org)
            <tr>
                <td>{{ $org->id }}</td>
                <td>{{ $org->name }}</td>
                <td>{{ $org->email }}</td>
                <td>{{ $org->phone }}</td>
                <td>
                    <a href="{{ route('organizers.show', $org) }}">View</a>
                    <a href="{{ route('organizers.edit', $org) }}">Edit</a>
                    <form action="{{ route('organizers.destroy', $org) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $organizers->links() }}
@endsection
