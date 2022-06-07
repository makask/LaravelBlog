@extends('layout')
@section('title','Posts')
@section('content')
    <h1>Posts</h1>
    {{$posts->links()}}
    <div class="row row-cols-4">
        @foreach($posts as $post)
            <div class="col">
                @include('partials.post-card')
            </div>
        @endforeach
    </div>

@endsection
