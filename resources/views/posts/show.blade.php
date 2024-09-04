@extends('layouts.context')

@section('content')
    <div class="card text-center mt-5 mb-5">
        <div class="card-header">
            {{ $post->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title"> {{ $post->title }}</h5>
            <p class="card-text"> {{ $post->description }}</p>
        </div>
        <div class="card-footer text-muted">
            {{ $post->created_at->format('F d, Y') }}
        </div>
    </div>
@endsection
