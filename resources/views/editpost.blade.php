@extends('layouts.master')
@section('content')
    <h1>Create From CRUD</h1>
    <form action="/post/{{ $posts -> id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="{{ $posts -> judul }}">

        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Isikan deskripsi (opsional)">
            {{ $posts -> deskripsi }}
        </textarea>

        <input type="submit" name="submit" value="Edit">
    </form>
@endsection