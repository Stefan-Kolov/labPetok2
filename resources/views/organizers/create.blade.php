@extends('layouts.app')

@section('content')
    <h1>Create Organizer</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('organizers.store') }}" method="POST">
        @csrf

        <label>Name and Surname:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}"><br><br>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('organizers.index') }}">Back</a>
@endsection
