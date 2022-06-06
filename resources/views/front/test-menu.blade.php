@extends('layouts-front.master')
@section('content')
    <section class="content">
        <div class="container">
            <div class="left-col">
                <img class="img-circle" src="image/circle-h.svg" alt="Background Circle">
                <div class="center">
                    HALAMAN EVALUASI
                </div>
            </div>
            <div class="right-col">
                <div class="dropdown-col">
                    <p>PILIH UNTUK MEMULAI</p>
                    <img src="image/dropdown.svg" alt="">
                </div>
                {{-- <img src="image/start.svg" style="width:5em"> --}}
                <a href="{{ route('topik') }}">MULAI UJIAN</a>
                {{-- <img src="image/review.svg" style="width:5em"> --}}
                <a href="{{ route('review') }}">REVIEW SCORE</a>
            </div>
        </div>
    </section>
@endsection