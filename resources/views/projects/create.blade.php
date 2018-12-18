@extends('layouts.app')
@section('content')
<h1 class="title">create prtoject</h1>
<form method="POST" action="/projects">
    @csrf
    <div class="field">
        <label for="title" class="label">title</label>
        <div class="control">
            <input
                    type="text"
                    class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                    name="title"
                    placeholder="title"
                    value="{{ old('title') }}">
        </div>
    </div>
    <div class="field">
        <label for="description" class="label">description</label>
        <div class="control">
            <input
                    type="text"
                    class="input {{ $errors->has('description') ? 'is-danger' : '' }}"
                    name="description"
                    placeholder="description"
                    value=""
                    required>
        </div>
    </div>
    <div><button type="submit">create projerct</button></div>
    @include('errors')
</form>
@endsection