@extends('layouts.app')

@section('content')
    <div class="form">
        <h2 class="text-center text-secondary"><small>Add Category</small></h2>
        <form action="{{ route('create-category') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="category_name" class="form-control form-control-lg" placeholder="name">
                @error('category_name')
                    <div class="alert alert-danger">
                        <p class="text-danger text-center"><strong>{{ $message }}</strong></p>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" class="form-control form-control-lg btn btn-lg btn-success">
            </div>
        </form>
    </div>
@endsection