@extends('layouts.app')

@section('content')
    <h1>Edit Event</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Event Title:</label><br>
        <input type="text" name="title" value="{{ old('title', $event->title) }}"><br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description', $event->description) }}</textarea><br><br>

        <label>Type:</label><br>
        <select name="type">
            <option value="семинар" {{ $event->type == 'семинар' ? 'selected' : '' }}>Семинар</option>
            <option value="работилница" {{ $event->type == 'работилница' ? 'selected' : '' }}>Работилница</option>
            <option value="предavanje" {{ $event->type == 'предavanje' ? 'selected' : '' }}>Предавање</option>
        </select><br><br>

        <label>Date:</label><br>
        <input type="date" name="date" value="{{ old('date', $event->date) }}"><br><br>

        <label>Organizer:</label><br>
        <select name="organizer_id">
            @foreach($organizers as $org)
                <option value="{{ $org->id }}"
                    {{ $event->organizer_id == $org->id ? 'selected' : '' }}>
                    {{ $org->name }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('events.index') }}">Back</a>
@endsection
