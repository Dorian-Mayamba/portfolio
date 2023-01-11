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
                    The purpose of these applications is to be run in a desktop computer.
                    They are mostly developed in c#, java and python. The goal of the applications is to
                    allow the users to automate redundant desktop tasks.
                </p>
            </div>
            <div class="service2 col-md-4">
                <h2 class="text-center"><small>Mobile applications</small></h2>
                <p>
                    The purpose of these applications is to be run in the mobile devices. the goal
                    of these applications is to allow the users that cannot access a desktop device to 
                    automate their tasks from a mobile device. They will be able to access the same service as any desktop
                    application.
                </p>
            </div>
            <div class="service3 col-md-4">
                <h2 class="text-center"><small>Web applications</small></h2>
                <p>
                    Web Applications will allow the users to manage their businesses online. They are often 
                    to manage sales etc...
                </p>
            </div>
        </div>
    </section>
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection
