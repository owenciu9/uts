<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = siswa::orderBy('nomor_induk', 'desc')->paginate(3); 
        return view('siswa/index')-> with('data', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('nomor_induk',$request->nomor_induk);
        Session::flash('nama',$request->nama);
        Session::flash('alamat',$request->alamat);
        $request->validate([
            'nomor_induk' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required'],[

            'nomor_induk.required'=>'Nomor Induk Wajib Diisi',
            'nomor_induk.numeric'=>'Nomor Induk Wajib Diisi dalam angka',
            'nama.required'=>'Nama Wajib Diisi',
            'alamat.required'=>'alamat Wajib Diisi'
            ]
        );
        $data = [
            'nomor_induk' => $request -> input('nomor_induk'),
            'nama' => $request -> input('nama'),
            'alamat' => $request -> input('alamat'),
        ];
        siswa::create($data);
        return redirect('siswa')->with('success','Berhasil menambahkan data');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = siswa::where('nomor_induk', $id)->first();
        return view('siswa/show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = siswa::where('nomor_induk',$id)->first();
        return view('siswa/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required'],[

            'nomor_induk.numeric'=>'Nomor Induk Wajib Diisi dalam angka',
            'nama.required'=>'Nama Wajib Diisi',
            'alamat.required'=>'alamat Wajib Diisi'
            ]
        );

        $data = [
            'nama'=> $request->input('nama'),
            'alamat'=> $request->input('alamat'),

        ];
        siswa::where('nomor_induk',$id)->update($data);
        return redirect('/siswa')->with('success','Berhasil memperbarui Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        siswa::where('nomor_induk',$id)->delete();
        return redirect('/siswa')->with('success','Berhasil menghapus data');
    }
}
