@extends('layouts.master')

@section('title', 'blog')

@section('content')
    <div class="top-header">
        <h2>Inside Design: Stories and Interviews</h2>
        <p>Subscribe to learn about new product feature, the latest in technology, and updates</p>
    </div>

    <div class="search-form">
        <input type="email" placeholder="yourmom@gmail.com">
        <button>Subscribe</button>
    </div>

    <h3>Recent blog post</h3>
    <div class=page-container>
        <div class="main-page">

        </div>
    </div>
@endsection