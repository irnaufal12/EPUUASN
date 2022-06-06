<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use App\Models\SesiUjian;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiUjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = SesiUjian::paginate(5);
        $user = User::all();
        return view('sesi_ujian.index', ['table' => $table])->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
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
        $user_id = Auth::user()->id;
        $peraturan_id = $request->tentang;
        $count = SesiUjian::count();
        

        SesiUjian::create([
            'user_id' => $user_id,
            'peraturan_id' => $peraturan_id,
            'tgl' => Carbon::now()->format('Y-m-d'),
            'jam' => Carbon::now()->format('H:i:s'),
            'id_soal_1' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_2' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_3' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_4' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_5' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_6' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_7' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_8' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_9' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_10' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_11' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_12' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_13' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_14' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_15' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_16' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_17' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_18' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_19' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
            'id_soal_20' => BankSoal::where('peraturan_id', $peraturan_id)->inRandomOrder()->take(20)->distinct()->first()->id,
        ]);

        return redirect()->route('test')->with('count', $count);
        // return dd($request);
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
        $table = SesiUjian::find($id);
        $soal = BankSoal::all();
        return view('sesi_ujian.show')->with('table', $table)->with('soal', $soal);
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
    }
}
