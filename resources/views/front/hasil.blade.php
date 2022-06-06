@extends('layouts-front.master')
@section('content')
    <section class="content">
        <div class="container">
            <div class="box">
                <p style="text-align:center">
                    <span class="soal">HASIL UJIAN</span> <br>
                </p>
                    <span class="soal">{{$numb->tgl}}||{{$numb->jam}}</span> <br>
                
                <p style="text-align:center">                        
                    <br><span class="soal">Nilai Anda :  {{$nilai}}</span> <br><br>
                </p>
            </div>

            @for ($i = 0; $i < 20; $i++)
                         
            <div class="box">
                <p style="text-align:center">
                    <span class="soal"> {{$i+1}} </span> <br>
                </p>
                <p style="text-align:justify; margin:20px">
                    <span class="soal">{{$semua_soal->find($q[$i])->soal}}</span> <br>
                </p>
                
                <span class="opsi">Jawaban Anda : {{$jawaban[$i]}}</span> <br><br>
                <span class="opsi">Kunci : {{$semua_soal->find($q[$i])->kunci}}</span> <br><br>
            
            </div>
            
            @endfor
            <p style="text-align:center">
                <a href="{{route('review')}}">
                    KE LAMAN REVIEW
                </a>
            </p>
        </div>
    </section>
@endsection