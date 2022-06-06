@extends('layouts-front.master')
@section('content')
    <section class="content">
        <div class="container">
            <form action="{{route('hasil')}}" method="POST">
              @method('PUT')
              @csrf

            @for ($i = 0; $i < 20; $i++)
                         
            <div class="box">
                <p style="text-align:center">
                    <span class="soal"> {{$i+1}} </span> <br>
                </p>
                <p style="text-align:justify; margin:20px">
                    <span class="soal">{{$semua_soal->find($q[$i])->soal}}</span> <br>
                </p>
                
                  
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="j_{{$i+1}}" id="j_{{$i+1}}" value="A">
                        <label class="form-check-label" for="j_{{$i+1}}">
                            <span class="opsi">A. {{$semua_soal->find($q[$i])->pil_A}}</span>
                        </label>
                </div>  <br>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="j_{{$i+1}}" id="j_{{$i+1}}" value="B">
                        <label class="form-check-label" for="j_{{$i+1}}">
                            <span class="opsi">B. {{$semua_soal->find($q[$i])->pil_B}}</span>
                        </label>
                </div> <br>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="j_{{$i+1}}" id="j_{{$i+1}}" value="C">
                        <label class="form-check-label" for="j_{{$i+1}}">
                            <span class="opsi">C. {{$semua_soal->find($q[$i])->pil_C}}</span>
                        </label>
                </div> <br>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="j_{{$i+1}}" id="j_{{$i+1}}" value="D">
                        <label class="form-check-label" for="j_{{$i+1}}">
                                <span class="opsi">D. {{$semua_soal->find($q[$i])->pil_D}}</span>
                        </label>
                </div> <br>
                <div class="form-check">
                        <input class="form-check-input" type="radio" name="j_{{$i+1}}" id="j_{{$i+1}}" value="E">
                        <label class="form-check-label" for="j_{{$i+1}}">
                            <span class="opsi">E. {{$semua_soal->find($q[$i])->pil_E}}</span>
                        </label>
                </div> 
            </div>
            
            @endfor
            <p style="text-align:center">
                <button class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                     Submit
               </button>
            </p>
            </form>
        </div>
    </section>
@endsection