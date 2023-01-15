@extends('layouts.app')

@section('content')
    <section class="contact-content">
        <h2 class="text-info text-center">Contact Me</h2>
        <div class="form">
            <form action="{{ route('contact-us') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="col-sm-4  offset-sm-2">
                        <input type="text" class="form-control" name="name" placeholder="your name">
                        @error('name')
                            <div class="alert alert-danger">
                                <p><strong>{{ $message }}</strong></p>
                            </div>
                        @enderror
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="email" placeholder="your email">
                        @error('email')
                            <div class="alert alert-danger">
                                <p><strong>{{ $message }}</strong></p>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-8 offset-sm-2">
                        <input type="text" class="form-control" name="subject" placeholder="subject">
                        @error('subject')
                            <div class="alert alert-danger">
                                <p><strong>{{ $message }}</strong></p>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-8 offset-sm-2">
                        <label for="comment"><span>Your suggestion</span></label>
                        <textarea name="comment" id="comment" cols="30" rows="10" class="form-control"></textarea>
                        @error('comment')
                            <div class="alert alert-danger">
                                <p><strong>{{ $message }}</strong></p>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-2 offset-md-5">
                        <input type="submit" class="form-control btn btn-lg btn-success" value="Send">
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}" type="text/css">
@endsection
