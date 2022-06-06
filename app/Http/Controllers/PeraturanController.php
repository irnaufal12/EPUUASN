<?php

namespace App\Http\Controllers;

use App\Models\BankSoal;
use App\Models\Peraturan;
use App\Models\SesiUjian;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $table = Peraturan::paginate(5);
        return view('peraturan.index', ['table' => $table]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('peraturan.create');
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
        $no_peraturan = $request->no_peraturan;
        $tentang = $request->tentang;
        $tgl_ditetapkan = $request->tgl_ditetapkan;
        $tgl_diundangkan = $request->tgl_diundangkan;

        Peraturan::create([
            'no_peraturan' => $no_peraturan,
            'tentang' => $tentang,
            'tgl_ditetapkan' => $tgl_ditetapkan,
            'tgl_diundangkan' => $tgl_diundangkan,
        ]);

        return redirect()->route('peraturan.index')->with('success', 'Data Berhasil Dibuat');
        
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
        return view('peraturan.show')->with('id', $id);
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
        $table = Peraturan::find($id);
        return view('peraturan.edit')->with('id', $id)->with('table',$table);
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
        $no_peraturan = $request->no_peraturan;
        $tentang = $request->tentang;
        $tgl_ditetapkan = $request->tgl_ditetapkan;
        $tgl_diundangkan = $request->tgl_diundangkan;

        Peraturan::find($id)->update([
            'no_peraturan' => $no_peraturan,
            'tentang' => $tentang,
            'tgl_ditetapkan' => $tgl_ditetapkan,
            'tgl_diundangkan' => $tgl_diundangkan,
        ]);

        return redirect()->route('peraturan.index')->with('success', 'Data Berhasil Diupdate');
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
        SesiUjian::where('peraturan_id', $id)->delete();
        BankSoal::where('peraturan_id', $id)->delete();
        Peraturan::find($id)->delete();
        return redirect()->route('peraturan.index')->with('success', 'Data Berhasil Dihapus');
    }
}
