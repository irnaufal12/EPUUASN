@extends('layouts-front.master')
@section('content')
    <section class="content">
        <div class="container">
            <div class="review-table">
              
                <div class="date">
                    <h2>HARI / TANGGAL</h2>
                    <div class="fill">
                        @foreach ($hasil as $item)
                        <h3>{{$item->tgl}}</h3>
                        <hr>    
                        @endforeach
                    </div>
                </div>
                <div class="score">
                    <h2>SCORE</h2>
                    <div class="large-fill">
                        @foreach ($hasil as $item)
                        <h3>{{$item->nilai}}</h3>
                        <hr>
                        @endforeach 
                        </div>
                </div>
                <div class="tentang">
                        <h2>TENTANG</h2>
                        <div class="fill">
                        @foreach ($hasil as $item)
                        <h3>{{$peraturan->find($item->peraturan_id)->tentang}}</h3>
                        <hr>
                        @endforeach
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection