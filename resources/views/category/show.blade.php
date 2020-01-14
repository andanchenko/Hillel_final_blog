@extends('layouts.app')

@section('content')
<div class="col-full" align="center">
    <h2>{{ $category->name }}</h2>
    <h4>Posts list:</h4>
    <dl>
    @foreach($category->posts as $post)
        <dt><a href="/post/{{$post->id}}">{{$post->title}}</a></dt>
        <dd>{{$post->id}}">{{$post->preview}}</dd>
    @endforeach
    </dl>
</div>
@endsection
