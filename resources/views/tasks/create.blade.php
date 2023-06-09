@extends('template/main')

@section('content')
    <h1>Create Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>

        <button type="submit">Create</button>
    </form>
@endsection
