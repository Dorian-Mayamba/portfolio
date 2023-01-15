@extends('layouts.app')

@section('content')
    <div class="form-content">
        <h3 class="text-center"><small>Add a project</small></h3>
        <form action="{{ route('create-project') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="project_name" placeholder="project name">
                @error('project_name')
                    <div class="alert alert-danger">
                        <p><strong>{{ $message }}</strong></p>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                @php
                    $categories = \App\Models\Category::all();
                @endphp
                <select class="form-control form-control-lg" name="category_name" id="category_name"
                    placeholder="select a category">
                    <option value="" selected>Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                @error('category_name')
                    <div class="alert alert-danger">
                        <p><strong>{{ $message }}</strong></p>
                    </div>
                @enderror
            </div>
            <h3 class="text-center">project description</h3>
            <div class="form-group">
                <textarea name="project_description" id="project_description" cols="30" rows="10"
                    class="form-control form-control-lg"></textarea>
                @error('project_description')
                    <div class="alert alert-danger">
                        <p><strong>{{ $message }}</strong></p>
                    </div>
                @enderror
            </div>
            <h2 class="text-center"><small>Project logo</small></h2>
            <div class="form-group">
                <input type="file" class="form-control-file" name="project_logo" id="project_logo">
                @error('project_logo')
                    <div class="alert alert-danger">
                        <p><strong>{{ $message }}</strong></p>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" name="poject_link" placeholder="Link">
                @error('project_link')
                    <div class="alert alert-danger">
                        <p><strong>{{ $message }}</strong></p>
                    </div>
                @enderror
            </div>
            <h2 class="text-center"><small>Project file</small></h2>
            <div class="form-group">
                <input type="file" name="project_file" id="project_file" class="form-control-file form-control-lg">
                @error('project_file')
                    <div class="alert alert-danger">
                        <p><strong>{{ $message }}</strong></p>
                    </div>
                @enderror
            </div>
            <div class="form-row">
                <div class="col-sm-2 offset-sm-5">
                    <input type="submit" value="Add" class="form-control form-control-lg btn btn-lg btn-info">
                </div>
            </div>
        </form>
    </div>
@endsection
