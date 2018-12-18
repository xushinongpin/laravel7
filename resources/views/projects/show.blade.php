@extends('layouts.app')
@section('content')
    <h1 class="title">{{ $project->title }}</h1>
    @can('update',$project)
        <a href="">Update</a>
    @endcan
    <div class="content">{{ $project->description }}</div>
    @if($project->tasks->count())
        <div>
            @foreach($project->tasks as $task)
                <div>
                    {{--<form action="/tasks/{{ $task->id }}" method="POST">--}}
                    <form action="/completed-tasks/{{ $task->id }}" method="POST">
                        @if ($task->completed)
                            @method('DELETE')
                        @endif
{{--                        @method('PATCH')--}}
                        @csrf
                        <label for="completed" class="checkbox {{ $task->completed ? 'is-completed' : '' }}">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    {{-- add a new task form --}}
    <form action="/projects/{{ $project->id }}/tasks" method="POST" class="box">
        @csrf
        <div class="field">
            <label for="description" class="label">new task</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="new task" required>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">addtask</button>
            </div>
        </div>
        @include('errors')
    </form>

    <p><a href="/projects/{{ $project->id }}/edit">Edit</a></p>
@endsection