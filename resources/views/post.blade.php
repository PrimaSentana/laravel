@extends('layouts.master')
@section('content')
    <h2>Post Display</h2>
    <div class="container">
        @foreach ($posts as $post)
            <p>id: {{ $post -> id }}</p>
            <p>judul > {{ $post -> judul }}</p>
            <p>deskripsi > {{ $post -> deskripsi }}</p>
            <form action="/post/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
        
                <input type="submit" value="Delete">
            </form>
            <hr>

            
        @endforeach
    </div>
@endsection