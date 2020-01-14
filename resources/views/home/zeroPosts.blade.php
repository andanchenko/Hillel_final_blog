@extends('layouts.app')
@section('content')
<h2>There is not enough active posts. <a href="{{route('create_post')}}">Create</a> or
    <a href="{{route('show_posts')}}">activate</a>, please</h2>
@endsection