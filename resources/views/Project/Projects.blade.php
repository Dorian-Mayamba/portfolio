@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-4 bg-success py-2">
                <div class="text-center">
                    <h2><small><strong class="text-danger">{{ $project->project_name }}</strong></small></h2>
                    <h3><small><strong class="text-light">{{ $project->project_category }}</strong></small></h3>
                    <div class="img my-2">
                        <img src="{{ $project->project_logo }}" alt="logo" title="{{ $project->project_name }}">
                    </div>
                    <div>
                        <a class="btn btn-info btn-lg" href="{{ $project->project_link }}">Github link</a>
                    </div>
                    <div>
                        @php
                            $data = explode('/', $project->project_file);
                        @endphp
                        <a href="{{ route('download-game', $project->id) }}" class="btn btn-success btn-lg">{{ $data[3] }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
