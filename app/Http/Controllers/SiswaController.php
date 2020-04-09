<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\SiswaRequest;
use Session;

use App\Model\Siswa;
use App\Model\Telepon;
use App\Model\Kelas;
use App\Model\Hobi;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('admin', ['except'=>['index', 'show']]);
    }

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
        $list_kelas = Kelas::all();
        $list_hobi = Hobi::all();
        return view('siswa.create', compact('judul', 'list_kelas', 'list_hobi'));
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
        
        //ini input ke table siswa
        $siswa = Siswa::create($input); 

        //ini input ke table telepon
        $telepon = new Telepon;
        $telepon->no_telepon = $request->input('no_telepon');
        $siswa->telepon()->save($telepon);

        $siswa->hobi()->attach($request->input('hobi'));

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
        $siswa = Siswa::findOrFail($id);
        $list_hobi = Hobi::all();
        return view('siswa.show', compact('siswa', 'siswa_hobi', 'list_hobi'));
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
        $list_kelas = Kelas::all();
        $list_hobi = Hobi::all();
        return view('siswa.edit', compact('siswa', 'judul', 'list_kelas', 'list_hobi'));
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

        //simpan ke table siswa
        $siswa->update($request->all());

        //simpan ke table telepon
        $telepon = $siswa->telepon;
        $telepon->no_telepon = $request->input('no_telepon');
        $siswa->telepon()->save($telepon);

        if(!is_null($request->input('hobi'))) {
            $siswa->hobi()->sync($request->input('hobi'));
        }

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
