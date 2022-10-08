@extends('layouts-front.master')
@section('content')
    <section class="content">
        <div class="container">
            <div class="review-table">
              
                <div class="date">
                    <h2>HARI / TANGGAL</h2>
                    <div class="fill">
                        @foreach ($hasil as $item)
                        <span style="font-size:30px">{{$item->tgl}}</span>
                        <hr>    
                        @endforeach
                    </div>
                </div>
                <div class="score">
                    <h2>SCORE</h2>
                    <div class="large-fill">
                        @foreach ($hasil as $item)
                        <?php
                            if ($item->nilai==NULL) {
                                $item->nilai=0;
                            }
                        ?>
                        <span style="font-size:48px">{{$item->nilai}}</span>
                        <hr>
                        @endforeach 
                        </div>
                </div>
                <div class="tentang">
                        <h2>TENTANG</h2>
                        <div class="fill">
                        @foreach ($hasil as $item)
                        <span style="font-size:12px">{{$peraturan->find($item->peraturan_id)->tentang}}</span>
                        <hr>
                        @endforeach
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection