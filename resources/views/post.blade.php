@extends('layout')

@section('content')

    <article>

        <h2>{{ $post->title }}</a></h2>
        {!! $post->body !!}

    </article>

    <a href="/lara-test/">Go Back</a>
    
@endsection


    
