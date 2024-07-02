<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Pasien;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index')
                ->with('anggota', $anggota);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'url_anggota' => 'required|file|mimes:jpeg,png|max:5000',
            'nama' => 'required|max:50',
            'jenis_kelamin' => 'required|max:50',
            'nomor_hp' => 'required|max:50',
            'alamat' => 'required|max:50',
            'tempat_lahir' => 'required|max:50',
            'tgl_lahir' => 'required|max:50',
            'pekerjaan' => 'required|max:50'
        ]);
         // ekstensi file yang di upload
         $ext = $request->url_anggota->getClientOriginalExtension();
         // rename misal : npm.extensi 2226240152.png
         $val['url_anggota'] = $request->nama.".".$ext;
         //upload ke dalam folder public/foto
         $request->url_anggota->move('fotoanggota/', $val['url_anggota']);
 
         // simpan tabel 
         Anggota::create($val);
            
         // // redirect ke halaman
         return redirect()->route('anggota.index')->with('success', $val['nama']. ' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($anggota)
    {
        $anggota = Anggota::find($anggota);
        return view('anggota.edit')->with('anggota', $anggota);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        if ($request->url_anggota){
            $val = $request->validate([
                'url_anggota' => 'required|file|mimes:jpeg,png|max:5000',
                'nama' => 'required|max:50',
                'jenis_kelamin' => 'required|max:50',
                'nomor_hp' => 'required|max:50',
                'alamat' => 'required|max:50',
                'tempat_lahir' => 'required|max:50',
                'tgl_lahir' => 'required|max:50',
                'pekerjaan' => 'required|max:50'
            ]);
             // ekstensi file yang di upload
             $ext = $request->url_anggota->getClientOriginalExtension();
             // rename misal : npm.extensi 2226240152.png
             $val['url_anggota'] = $request->nama.".".$ext;
             //upload ke dalam folder public/foto
             $request->url_anggota->move('fotoanggota/', $val['url_anggota']);
        }else{
            $val = $request->validate([
                // 'url_anggota' => 'required|file|mimes:jpeg,png|max:5000',
                'nama' => 'required|max:50',
                'jenis_kelamin' => 'required|max:50',
                'nomor_hp' => 'required|max:50',
                'alamat' => 'required|max:50',
                'tempat_lahir' => 'required|max:50',
                'tgl_lahir' => 'required|max:50',
                'pekerjaan' => 'required|max:50'
            ]);
        }
        //simpan tabel montir
            // $pasien = Pasien::find($montir);
            Anggota::where('id', $anggota['id'])->update($val);

            //redirect ke halaman list montir
            return redirect()->route('anggota.index')->with('success', $val['nama']. ' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($anggota)
    {
        $anggota = Anggota::find($anggota);
        $anggota->DELETE();
        return redirect()->route('anggota.index')->with('success', 'berhasil di Hapus');
    }
}
