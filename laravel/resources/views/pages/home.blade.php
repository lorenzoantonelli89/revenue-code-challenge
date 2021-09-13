@extends('layouts.main-layout')
@section('pageTitle')
    Home Page
@endsection
@section('content')

    <main>
        <h1>
            Lista post
        </h1>
        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    title
                </th>
                <th>
                    content
                </th>
                <th>
                    url
                </th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        <a href="{{route('show', $post->id)}}">
                            {{$post->id}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('show', $post->id)}}">
                            {{Str::limit($post->title, 15)}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('show', $post->id)}}">
                            {{Str::limit($post->content, 35)}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('show', $post->id)}}">
                            {{Str::limit($post->url, 20)}}
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <a id="newPost" href="{{route('create')}}">
            new post
        </a>
    </main>
    
@endsection