@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $project->project_logo }}" alt="logo" title="{{ $project->project_name }}">
        </div>
        <div class="col-md-4">
            <p>{{ $project->project_description }}</p>
        </div>
    </div>
    <div class="row">
        <a href="{{ $project->project_link }}">Project link</a>
    </div>
    @if (Auth::user() && Auth::user()->role->name == "admin")
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('edit-project', $project->id) }}" class="btn btn-lg btn-warning">Edit project</a>
            </div>
            <div class="md-4">
                <button onclick="document.getElementById('delete-form').submit();" class="btn btn-lg btn-danger">Delete project</button>
                <form id="delete-form" action="{{ route('delete-project', $project->id) }}" method="post" style="display: none">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    @endif
@endsection