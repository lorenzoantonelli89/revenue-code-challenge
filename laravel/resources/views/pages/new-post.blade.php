@extends('layouts.main-layout')
@section('pageTitle')
    Aggiungi Post
@endsection
@section('content')

    <main>
        <h1>
            add new post
        </h1>
        
        <form method="POST" action="{{route('store')}}">

            @csrf
            @method('POST')
            {{-- ERRORI --}}
                 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div>
                <div class="container-label">
                    <label for="title">
                        Title
                    </label>
                </div>
                <input type="text" name="title" required>
            </div>
            <div>
                <div class="container-label">
                    <label for="content">
                        Content
                    </label>
                </div>
                <textarea name="content" id="" cols="30" rows="10" required></textarea>
            </div>
            <div>
                <div class="container-label">
                     <label for="url">
                        Url
                    </label>
                </div>
                <input type="text" name="url" required>
            </div>
            <div id="submit">
                <input type="submit">
            </div>
        </form>
    </main>
    
@endsection