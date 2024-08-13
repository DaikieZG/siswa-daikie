<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function view()
    {
        $siswa=siswa::all();
        return view('view_viewsiswa', compact('siswa'));
    }
    public function create()
    {
        return view('view_addsiswa');
    }
    public function store(Request $request)
    {
        $siswa=new Siswa();
         $siswa->id=$request->id;
         $siswa->nama=$request->nama;
         $siswa->alamat=$request->alamat;
         $siswa->tempat_tgl=$request->tempat_tgl;
         $siswa->kelas=$request->kelas;
         $siswa->jurusan=$request->jurusan;
         $siswa->angkatan=$request->angkatan;
        $siswa->save();
         return redirect('siswa');
    }
    public function edit(Request $request)
    {
        $siswa=siswa::find($request->id);
        return view('view_editsiswa', compact('siswa'));
    }
    public function update(Request $request)
    {
        $siswa=siswa::find($request->id);
         $siswa->nama=$request->nama;
         $siswa->alamat=$request->alamat;
         $siswa->tempat_tgl=$request->tempat_tgl;
         $siswa->kelas=$request->kelas;
         $siswa->jurusan=$request->jurusan;
         $siswa->angkatan=$request->angkatan;
        $siswa->save();
        return redirect('siswa');
    }
    public function destroy(Request $request)
    {
        $siswa=siswa::find($request->id);
        $siswa->delete();
        return redirect('siswa');
    }
}
