<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\peserta;

class simpan_peserta extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('soal2');
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
        
        $peserta = new peserta;

        $peserta->nama                          = $request->nama;
        $peserta->nik                           = $request->nik;
        $peserta->no_hp                         = $request->no_hp;
        $peserta->email                         = $request->email;
        $peserta->skema                         = $request->skema;
        $peserta->sertifikasi                   = $request->sertifikasi;
        $peserta->tempat_uji_kompetensi         = $request->tempat_uji_kompetensi;
        $peserta->rekomendasi                   = $request->rekomendasi;
        $peserta->tgl_terbit_sertifikasi        = $request->tgl_terbit_sertifikat;
        $peserta->tgl_lahir                     = $request->tgl_lahir;
        $peserta->organisasi                    = $request->organisasi;

        $peserta->save();

        return redirect()->action('simpan_peserta@index');
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
