@extends('layouts.app')
@section('content')
    @if(Auth::user())
        <form method="post">
            @csrf
            <label for="name">Name</label>

            <input type="text" id="name" name="name"/>

            <input type="submit" value="Create category"/>
        </form>
    @else
        <h2>
            <a href="/login">Login</a> or <a href="/register">register</a> please
        </h2>
    @endif
@endsection