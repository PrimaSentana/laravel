@extends('layouts.master')
@section('content')
    <h1>Create From CRUD</h1>
    <form action="/post" method="POST">
        @csrf
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" required>

        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" placeholder="Isikan deskripsi (opsional)"></textarea>

        <input type="submit" name="submit" value="Create">
    </form>
@endsection