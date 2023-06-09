@extends('template.main')

@section('content')
    <h1>Todo List</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task->title }}

                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('tasks.create') }}">Create New Task</a>
@endsection
