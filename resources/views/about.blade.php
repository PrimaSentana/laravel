@extends('layouts.master')

@section('title', 'Exercise | About Me')

@section('content')
    <div class="container">
        <h3>Tentang saya</h3>
        <ul>
            <li>Nama: {{ $nama }}</li>
            <li>Hobi: @foreach ($hobby as $item)
                {{ $item -> hobi }}
            @endforeach</li>
            <li>Nilai: {{ $nilai }}</li>
        </ul>

        {{-- kondisi if-else --}}
        @if ($nilai > 90)
            <h3>Sempurna!</h3>
        @elseif ($nilai >= 60)
            <h3>Bagus</h3>
        @else
            <h3>Belajar Lagi dek</h3>
        @endif

        {{-- for --}}
        @for ($i = 0; $i < 5; $i++)
            <p>urutan ke - {{ $i }}</p>
        @endfor
    </div>
@endsection