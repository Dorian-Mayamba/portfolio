@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4">
                <h2>{{ $project->project_name }}</h2>
                <img src="{{ $project->project_logo }}" alt="logo" title="{{ $project->project_name }}">
                <a href="{{ $project->project_link }}">Github link</a>
            </div>
        @endforeach
    </div>
@endsection