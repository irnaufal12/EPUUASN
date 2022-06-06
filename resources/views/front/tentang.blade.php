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
                    <p>PILIH TOPIK UNTUK MEMULAI TEST</p>
                    <img src="image/dropdown.svg" alt="">
                </div>
                <form action="{{route('sesi_ujian.store')}}" method="POST">
                    @csrf
                    <select name="tentang" id="">
                        <option value="1">APARATUR SIPIL NEGARA</option>
                        <option value="1">APARATUR SIPIL NEGARA</option>
                        <option value="1">APARATUR SIPIL NEGARA</option>
                    </select>
                <button class="btn-login" type="submit">
                    Submit
                </button>
                </form>
            </div>
        </div>
    </section>
@endsection