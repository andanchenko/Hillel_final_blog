@extends('layouts.app')

@section('content')
    @if(Auth::user())
        <form method="post" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>

            <input type="text" id="title" name="title" value="{{ $post->title }}"/>
            <label for="preview">Preview</label>

            <textarea name="preview" id="preview">
                {{ $post->preview }}
            </textarea>

            <label for="content">Content</label>
            <textarea name="content" id="content">
                {{ $post->content }}
            </textarea>
            <label for="category">Category</label>

            <select name="category_id" id="category">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == $post->category->id) selected @endif>
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
            <label for="poster">Poster</label>
            <input type="file" name="poster"/>
            <input type="submit" value="Edit post"/>
        </form>
    @else
        <h2>
            <a href="/login">Login</a> or <a href="/register">register</a> please
        </h2>
    @endif
@endsection
