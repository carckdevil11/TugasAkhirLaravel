<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        if ($request->NIM != null) {
            # code...
            DB::table('user_mahasiswa')->insert([
                'Nama' => $request->namamahasiswa,
                'NIM' => $request->NIM,
                'Topik' => $request->topik,
                'Kritik' => $request->kritik,
                'Saran' => $request->saran
            ]);
            $request->session()->put('nim', $request->NIM);
            $request->session()->put('nama', $request->namamahasiswa);
            $request->session()->put('id', DB::getPdo()->lastInsertId());
        } else if ($request->jabatan != null) {
            # code...
            DB::table('user_civitas')->insert([
                'Nama' => $request->namacivitas,
                'Nomor_Pegawai' => $request->nomorpegawai,
                'Jabatan' => $request->jabatan,
                'Topik' => $request->topik,
                'Kritik' => $request->kritik,
                'Saran' => $request->saran
            ]);
            $request->session()->put('nip', $request->nomorpegawai);
            $request->session()->put('nama', $request->namacivitas);
            $request->session()->put('id', DB::getPdo()->lastInsertId());
        } else if ($request->asaldaerah != null) {
            # code...
            DB::table('user_masyarakat')->insert([
                'Nama' => $request->namamasyarakat,
                'Nomor_Telepon' => $request->nomortelepon,
                'Asal_Daerah' => $request->asaldaerah,
                'Topik' => $request->topik,
                'Kritik' => $request->kritik,
                'Saran' => $request->saran
            ]);
            $request->session()->put('asaldaerah', $request->asaldaerah);
            $request->session()->put('nama', $request->namamasyarakat);
            $request->session()->put('id', DB::getPdo()->lastInsertId());
        }





        return redirect('/form');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    { }

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
    public function update(Request $request)
    {

        if (session()->get('nim') != null) {
            # code...

            DB::table('user_mahasiswa')->where('ID', session()->get('id'))->update([
                'Topik' => $request->topik,
                'Kritik' => $request->kritik,
                'Saran' => $request->saran
            ]);

            $request->session()->forget('nim');
            $request->session()->forget('nama');
            $request->session()->forget('id');
        } else if (session()->get('nip') != null) {
            # code...
            DB::table('user_civitas')->where('ID', session()->get('id'))->update([
                'Topik' => $request->topik,
                'Kritik' => $request->kritik,
                'Saran' => $request->saran
            ]);
            $request->session()->forget('nip');
            $request->session()->forget('nama');
            $request->session()->forget('id');
        } else if (session()->get('asaldaerah') != null) {
            # code...
            DB::table('user_masyarakat')->where('ID', session()->get('id'))->update([
                'Topik' => $request->topik,
                'Kritik' => $request->kritik,
                'Saran' => $request->saran
            ]);
            $request->session()->forget('asaldaerah');
            $request->session()->forget('nama');
            $request->session()->forget('id');
        }




        // alihkan halaman ke halaman pegawai
        return redirect('/');
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

    public function login(Request $request)
    { }

    public function nama(){
        return view('contoh');
    }
    public function namabaru(Request $request){

        DB::table('nama')->insert([
                'nama_depan' => $request->nama_depan,
                'nama_belakang' => $request->nama_belakang
            ]);
            $request->session()->put('nama_depan', $request->nama_depan);
            $request->session()->put('nama_belakang', $request->nama_belakang);
            $request->session()->put('nama_depan', DB::getPdo()->lastInsertId());
    }
}
