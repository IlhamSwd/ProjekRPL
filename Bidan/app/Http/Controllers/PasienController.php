<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;


class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index')
                ->with('pasien', $pasien);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        if ($request->user()->cannot('create', Pasien::class)) {
            abort(403);
        }
        $val = $request->validate([
            'url_pasien' => 'required|file|mimes:jpeg,png|max:5000',
            'nama' => 'required|max:50',
            'jenis_kelamin' => 'required|max:50',
            'nomor_hp' => 'required|max:50',
            'alamat' => 'required|max:50',
            'tempat_lahir' => 'required|max:50',
            'tgl_lahir' => 'required|max:50',
            'keluhan' => 'required|max:50'
        ]);
         // ekstensi file yang di upload
         $ext = $request->url_pasien->getClientOriginalExtension();
         // rename misal : npm.extensi 2226240152.png
         $val['url_pasien'] = $request->nama.".".$ext;
         //upload ke dalam folder public/foto
         $request->url_pasien->move('fotopasien/', $val['url_pasien']);
 
         // simpan tabel 
         Pasien::create($val);
            
         // // redirect ke halaman
         return redirect()->route('pasien.index')->with('success', $val['nama']. ' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit')->with('pasien', $pasien);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        if ($request->url_pasien){
            $val = $request->validate([
                'url_pasien' => 'required|file|mimes:jpeg,png|max:5000',
                'nama' => 'required|max:50',
                'jenis_kelamin' => 'required|max:50',
                'nomor_hp' => 'required|max:50',
                'alamat' => 'required|max:50',
                'tempat_lahir' => 'required|max:50',
                'tgl_lahir' => 'required|max:50',
                'keluhan' => 'required|max:50'
            ]);
             // ekstensi file yang di upload
             $ext = $request->url_pasien->getClientOriginalExtension();
             // rename misal : npm.extensi 2226240152.png
             $val['url_pasien'] = $request->nama.".".$ext;
             //upload ke dalam folder public/foto
             $request->url_pasien->move('fotopasien/', $val['url_pasien']);
        }else{
            $val = $request->validate([
                // 'url_pasien' => 'required|file|mimes:jpeg,png|max:5000',
                'nama' => 'required|max:50',
                'jenis_kelamin' => 'required|max:50',
                'nomor_hp' => 'required|max:50',
                'alamat' => 'required|max:50',
                'tempat_lahir' => 'required|max:50',
                'tgl_lahir' => 'required|max:50',
                'keluhan' => 'required|max:50'
            ]);
        }
        //simpan tabel montir
            // $pasien = Pasien::find($montir);
            Pasien::where('id', $pasien['id'])->update($val);

            //redirect ke halaman list montir
            return redirect()->route('pasien.index')->with('success', $val['nama']. ' berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->DELETE();
        return redirect()->route('pasien.index')->with('success', 'berhasil di Hapus');
    }
}
