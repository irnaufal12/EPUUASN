<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use App\Models\Peraturan;
use App\Models\SesiUjian;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = BankSoal::paginate(5);
        return view('bank_soal.index', ['table' => $table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $table = Peraturan::all();
        return view('bank_soal.create')->with('table', $table);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tentang = $request->tentang;
        $soal = $request->soal;
        $pil_A = $request->pil_A;
        $pil_B = $request->pil_B;
        $pil_C = $request->pil_C;
        $pil_D = $request->pil_D;
        $pil_E = $request->pil_E;
        $kunci = $request->kunci;
        $peraturan = Peraturan::where('tentang', $tentang)->first();
        $peraturan_id = $peraturan->id;

        BankSoal::create([
            'peraturan_id' => $peraturan_id,
            'soal' => $soal,
            'pil_A' => $pil_A,
            'pil_B' => $pil_B,
            'pil_C' => $pil_C,
            'pil_D' => $pil_D,
            'pil_E' => $pil_E,
            'kunci' => $kunci,
        ]);

        return redirect()->route('bank_soal.index')->with('success', 'Data Berhasil Dibuat');
        // return dd($peraturan_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('bank_soal.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $table = BankSoal::find($id);
        $peraturan = Peraturan::all();
        return view('bank_soal.edit')->with('id', $id)->with('table', $table)->with('peraturan', $peraturan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
        $tentang = $request->tentang;
        $soal = $request->soal;
        $pil_A = $request->pil_A;
        $pil_B = $request->pil_B;
        $pil_C = $request->pil_C;
        $pil_D = $request->pil_D;
        $pil_E = $request->pil_E;
        $kunci = $request->kunci;
        $peraturan = Peraturan::where('tentang',$tentang)->first();
        $peraturan_id = $peraturan->id;
        
        BankSoal::find($id)->update([
            'peraturan_id' => $peraturan_id,
            'soal' => $soal,
            'pil_A' => $pil_A,
            'pil_B' => $pil_B,
            'pil_C' => $pil_C,
            'pil_D' => $pil_D,
            'pil_E' => $pil_E,
            'kunci' => $kunci,
        ]);

        return redirect()->route('bank_soal.index')->with('success', 'Data Berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        SesiUjian::where('id_soal_1', $id)->delete();
        SesiUjian::where('id_soal_2', $id)->delete();
        SesiUjian::where('id_soal_3', $id)->delete();
        SesiUjian::where('id_soal_4', $id)->delete();
        SesiUjian::where('id_soal_5', $id)->delete();
        SesiUjian::where('id_soal_6', $id)->delete();
        SesiUjian::where('id_soal_7', $id)->delete();
        SesiUjian::where('id_soal_8', $id)->delete();
        SesiUjian::where('id_soal_9', $id)->delete();
        SesiUjian::where('id_soal_10', $id)->delete();
        SesiUjian::where('id_soal_11', $id)->delete();
        SesiUjian::where('id_soal_12', $id)->delete();
        SesiUjian::where('id_soal_13', $id)->delete();
        SesiUjian::where('id_soal_14', $id)->delete();
        SesiUjian::where('id_soal_15', $id)->delete();
        SesiUjian::where('id_soal_16', $id)->delete();
        SesiUjian::where('id_soal_17', $id)->delete();
        SesiUjian::where('id_soal_18', $id)->delete();
        SesiUjian::where('id_soal_19', $id)->delete();
        SesiUjian::where('id_soal_20', $id)->delete();
        BankSoal::find($id)->delete();
        return redirect()->route('bank_soal.index')->with('success', 'Data Berhasil Dihapus');
    }
}
