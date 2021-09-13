@extends('layouts.main-layout')
@section('pageTitle')
    Dettagli Post
@endsection
@section('content')

    <main>
        <h1>
            Dettaglio post
        </h1>
        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    titolo
                </th>
                <th>
                    content
                </th>
                <th>
                    url
                </th>
            </tr>
            <tr>
                <td>
                    {{$post->id}}
                </td>
                <td>
                    {{$post->title}}
                </td>
                <td>
                    {{$post->content}}
                </td>
                <td>
                    {{$post->url}}
                </td>
            </tr>
        </table>
        <a id="backHome" href="{{route('home')}}">
            back to home
        </a>
    </main>
    
@endsection