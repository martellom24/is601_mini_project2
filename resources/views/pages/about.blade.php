@extends('layouts.default')

@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">About Page</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            <p>
                <a href="{{route('contact')}}" class="btn btn-primary my-2">Contact Me</a>
            </p>
        </div>
    </section>
@endsection