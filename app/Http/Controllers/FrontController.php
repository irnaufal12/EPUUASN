<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use App\Models\Peraturan;
use App\Models\SesiUjian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    //
    public function uu_asn() {
        return view('front.uu-asn');
    }

    public function show_uu() {
        $file = 'pdf\UU_Nomor_5_Tahun_2014.pdf';
        return response()->file($file);;
    }

    public function review() {
        $user_id = Auth::user()->id;
        $peraturan = Peraturan::all();
        $hasil = SesiUjian::where('user_id', $user_id)->get();

        return view('front.review')->with('hasil', $hasil)->with('peraturan', $peraturan);
    }

    public function test() {

        
        $numb = SesiUjian::all()->last();
        $semua_soal = BankSoal::all();

        $q = array( 
            $numb->id_soal_1,
            $numb->id_soal_2,
            $numb->id_soal_3,
            $numb->id_soal_4,
            $numb->id_soal_5,
            $numb->id_soal_6,
            $numb->id_soal_7,
            $numb->id_soal_8,
            $numb->id_soal_9,
            $numb->id_soal_10,
            $numb->id_soal_11,
            $numb->id_soal_12,
            $numb->id_soal_13,
            $numb->id_soal_14,
            $numb->id_soal_15,
            $numb->id_soal_16,
            $numb->id_soal_17,
            $numb->id_soal_18,
            $numb->id_soal_19,
            $numb->id_soal_20,
        );

        $soal = array();
        for($i = 0; $i < 20; $i++){
            $soal[$i] = $semua_soal->where('id' , $q[$i])->get('soal');
        }

        return view('front.test')->with('semua_soal', $semua_soal)->with('q', $q)->with('numb', $numb);
    }

    public function menu() {
        return view('front.test-menu');
    }

    public function tentang() {
        return view('front.tentang');
    }

    public function hasil_ujian(Request $request) {
        // $nilai;

        $jawaban = array(
            $request->j_1, 
            $request->j_2, 
            $request->j_3, 
            $request->j_4, 
            $request->j_5, 
            $request->j_6, 
            $request->j_7, 
            $request->j_8, 
            $request->j_9, 
            $request->j_10, 
            $request->j_11, 
            $request->j_12, 
            $request->j_13, 
            $request->j_14, 
            $request->j_15, 
            $request->j_16, 
            $request->j_17, 
            $request->j_18, 
            $request->j_19, 
            $request->j_20, 
        );

        $numb = SesiUjian::all()->last();
        $semua_soal = BankSoal::all();
        $q = array(
            $numb->id_soal_1,
            $numb->id_soal_2,
            $numb->id_soal_3,
            $numb->id_soal_4,
            $numb->id_soal_5,
            $numb->id_soal_6,
            $numb->id_soal_7,
            $numb->id_soal_8,
            $numb->id_soal_9,
            $numb->id_soal_10,
            $numb->id_soal_11,
            $numb->id_soal_12,
            $numb->id_soal_13,
            $numb->id_soal_14,
            $numb->id_soal_15,
            $numb->id_soal_16,
            $numb->id_soal_17,
            $numb->id_soal_18,
            $numb->id_soal_19,
            $numb->id_soal_20,
        );

        $counter = 0;
        for ($i=0; $i < 20 ; $i++) { 
            $kunci = BankSoal::find($q[$i])->kunci;
            $j = $jawaban[$i];

            if($kunci == $j) {
                $counter++;
            }
        }

        $nilai = $counter*5;
        SesiUjian::find($numb)->last()->update([
            'nilai' => $nilai,
        ]);

        return view('front.hasil')->with('nilai', $nilai)->with('numb', $numb)->with('semua_soal', $semua_soal)->with('q', $q)->with('jawaban', $jawaban);
    }
}
