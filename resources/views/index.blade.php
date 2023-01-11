@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h2 class="text-center"><small>Portfolio home</small></h2>
        <div class="portfolio-background">
            <img class="w-100 rounded-left rounded-right rounded-bottom rounded-top" src="{{ asset('portfolio-bg.jpg') }}" alt="portfolio-background">
        </div>
        <div class="banner">
            <p class="banner-text">
                Welcome to my portfolio website, Here I have a range of projects that I have created.
                To create these projects I have applied my skills in numerous programming languages e.g(java,c# and python).
                I hope you will enjoy playing around these projects. Please find the list of my previous projects
                by clicking on the link down below.
            </p>
            <div class="link text-center">
                <a id="banner-link" href="{{ route('projects') }}" class="btn btn-lg btn-primary">Projects</a>
            </div>
        </div>
    </div>
@endsection


@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
