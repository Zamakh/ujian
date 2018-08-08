<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\peserta;
use DB;
use View;
use URL;

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
        //validasi input dari form soal2
        $this->validate($request,[
            'nama'                  => 'required|max:20',
            'nik'                   => 'required|integer',
            'no_hp'                 => 'required|integer',
            'email'                 => 'required',
            'skema'                 => 'required',
            'sertifikasi'           => 'required',
            'tempat_uji_kompetensi' => 'required',
            'rekomendasi'           => 'required',
            'tgl_terbit_sertifikasi'=> 'required',
            'tgl_lahir'             => 'required',
            'organisasi'            => 'required',
            'no_hp'                 => 'required'
        ]);

        $nama                                           = $request['nama'];
        $nik                                            = $request['nik'];
        $email                                          = $request['email'];
        $skema                                          = $request['skema'];
        $sertifikasi                                    = $request['sertifikasi'];
        $tempat_uji_kompetensi                          = $request['tempat_uji_kompetensi'];
        $rekomendasi                                    = $request['rekomendasi'];
        $tgl_terbit_sertifikasi                         = $request['tgl_terbit_sertifikasi'];
        $tgl_lahir                                      = $request['tgl_lahir'];
        $organisasi                                     = $request['organisasi'];
        $no_hp                                          = $request['no_hp'];

        //input data dari form soal2 menuju DB Ujian Table Peserta
        $peserta = new peserta;

        $peserta->nama                          = $nama;
        $peserta->nik                           = $nik;
        $peserta->no_hp                         = $no_hp;
        $peserta->email                         = $email;
        $peserta->skema                         = $skema;
        $peserta->sertifikasi                   = $sertifikasi;
        $peserta->tempat_uji_kompetensi         = $tempat_uji_kompetensi;
        $peserta->rekomendasi                   = $rekomendasi;
        $peserta->tgl_terbit_sertifikasi        = $tgl_terbit_sertifikasi;
        $peserta->tgl_lahir                     = $tgl_lahir;
        $peserta->organisasi                    = $organisasi;

        $peserta->save();

        return redirect()->action('simpan_peserta@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = DB::table('peserta')
                        ->select('peserta.*')
                        ->orderBy('tgl_lahir', 'desc')
                        ->get();

       
        return view::make('soal2_1', ['data' => $data]);
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
