<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\SiswaRequest;
use Session;

use App\Model\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa_list = Siswa::all();
        $jml_siswa = $siswa_list->count();
        return view('siswa.index', compact('siswa_list', 'jml_siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $judul = 'Tambah Data Siswa';
        return view('siswa.create', compact('judul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        $input = $request->all();
        // $this->validate($request, [
        //     'nisn' => 'required|string|size:4|unique:siswa,nisn',
        //     'nama_depan' => 'required|string|max:50',
        //     'nama_akhir' => 'required|string|max:50',
        //     'tempat_lahir' => 'required|string|max:50',
        //     'tanggal_lahir' => 'required|date',
        //     'jenis_kelamin' => 'required|in:L,P',
        // ]);
        Siswa::create($request->all()); 
        Session::flash('flash_message','Data Siswa dengan NISN '.$request->input('nisn').' Berhasil ditambah');
        return redirect('siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id); //select * from siswa where id_siswa=$id
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $judul = 'Edit Data Siswa';
        return view('siswa.edit', compact('siswa', 'judul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SiswaRequest $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $input = $request->input();
        
        // $this->validate($request, [
        //     'nisn' => 'required|string|size:4|unique:siswa,nisn,'.$request->input('id_siswa').',id_siswa',
        //     'nama_depan' => 'required|string|max:50',
        //     'nama_akhir' => 'required|string|max:50',
        //     'tempat_lahir' => 'required|string|max:50',
        //     'tanggal_lahir' => 'required|date',
        //     'jenis_kelamin' => 'required|in:L,P',
        // ]);
        
        $siswa->update($request->all());
        Session::flash('flash_message','Data Siswa dengan NISN '.$request->input('nisn').' Berhasil diedit');
        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::whereIdSiswa($id)->delete();
        return redirect('siswa');
    }
}
