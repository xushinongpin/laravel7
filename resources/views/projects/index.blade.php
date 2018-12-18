@extends('layouts.app')
@section('content')
    <h1 class="title">prtoject</h1>
    <ul>
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection