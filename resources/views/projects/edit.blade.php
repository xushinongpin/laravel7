@extends('layouts.app')
@section('content')
    <h1 class="title">Edit prtoject</h1>
    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf
        <div class="field">
            <label for="title" class="label">title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="title" value="{{ $project->title  }}">
            </div>
        </div>
        <div class="field">
            <label for="description" class="label">description</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="description" value="{{ $project->description  }}">
            </div>
        </div>
        <div><button type="submit">create projerct</button></div>
    </form>
    <form action="/projects/{{ $project->id }}" method="POST">
        @method('DELETE')
        @csrf()
        <div class="field">
            <div class="control">
                <button class="botton" type="submit">delete</button>
            </div>
        </div>
    </form>
@endsection