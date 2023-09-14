@extends('layouts.master')
@section('content')
    <h1>Show Post</h1>

    @if ($posts == null)
        <h1>Data Doesn't exist</h1>
    @else
        <h3>Judul > {{ $posts ->judul }}</h3>
        <h3>Deskripsi > {{ $posts -> deskripsi }}</h3>
    @endif
    
@endsection