@extends('layouts.app')

@section('content')
    <section id="title">
        <h1 class="text-center text-black-50"><small>Services</small></h1>
    </section>
    <section id="service-banner"></section>
    <section id="service-text" class="provided-services">
        <div class="row">
            <div class="service1 col-md-4">
                <h2 class="text-center"><small>Desktop applications</small></h2>
                <p>

                </p>
            </div>
            <div class="service2 col-md-4">
                <h2 class="text-center"><small>Mobile applications</small></h2>
                <p>

                </p>
            </div>
            <div class="service3 col-md-4">
                <h2 class="text-center"><small>Web applications</small></h2>
                <p>

                </p>
            </div>
        </div>
    </section>
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
