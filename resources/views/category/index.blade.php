@extends('layouts.app')

@section('content')
    <table>
        <th>
        <td>ID</td>
        <td>Name</td>
        <td></td>
        <td></td>
        </th>
        <tbody>
        @foreach($categories as $category)
            <tr @if(!$category->is_active)style="background-color: red;"@endif>
                <td>{{ $category->id }}</td>

                <td><a href="{{route('show_category', ['categoryId' => $category->id])}}">{{ $category->name }}</a></td>
                <form method="post" action="{{ route('delete_category', ['categoryId' => $category->id]) }}">
                    @csrf
                    {{ method_field('DELETE') }}
                    <td><button type="submit">X</button></td>
                </form>
                <td>
                    <form method="post" action="{{ route('edit_category', ['categoryId' => $category->id]) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <td><button type="submit">Edit</button></td>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('create_category')}}">Create new category</a>
@endsection
