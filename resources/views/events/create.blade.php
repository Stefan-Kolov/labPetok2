@extends('layouts.app')

@section('content')
    <h1>Create Event</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.store') }}" method="POST">
        @csrf

        <label>Event Title:</label><br>
        <input type="text" name="title" value="{{ old('title') }}"><br><br>

        <label>Description (min 20 chars):</label><br>
        <textarea name="description">{{ old('description') }}</textarea><br><br>

        <label>Type:</label><br>
        <select name="type">
            <option value="">-- избери --</option>
            <option value="семинар">Семинар</option>
            <option value="работилница">Работилница</option>
            <option value="предavanje">Предавање</option>
        </select><br><br>

        <label>Date:</label><br>
        <input type="date" name="date" value="{{ old('date') }}"><br><br>

        <label>Organizer:</label><br>
        <select name="organizer_id">
            @foreach($organizers as $org)
                <option value="{{ $org->id }}">{{ $org->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Create</button>
    </form>

    <a href="{{ route('events.index') }}">Back</a>
@endsection
