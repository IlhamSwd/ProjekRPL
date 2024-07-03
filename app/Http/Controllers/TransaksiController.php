<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Stok;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index')
                ->with('transaksi', $transaksi);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stok = Stok::all();
        $pasien = Pasien::all();
        return view('transaksi.create')->with('stok', $stok)->with('pasien', $pasien);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        if ($request->user()->cannot('create', Transaksi::class)) {
            abort(403);
        }
        $val = $request->validate([
            'stok_id' => 'nullable',
            'pasien_id' => 'nullable',
            'tgl_transaksi' => 'required|max:50',
            'jumlah' => 'required'

        ]);

         // simpan tabel fakultas
         Transaksi::create($val);
 
         // // radirect ke halaman list fakultas
         return redirect()->route('transaksi.index')->with('success', ' pembayaran telah dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        $stok = Stok::all();
        $pasien = Pasien::all();
        return view('transaksi.edit')->with('stok', $stok)->with('pasien', $pasien)->with('transaksi', $transaksi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $transaksi)
    {
        $val = $request->validate([
            'stok_id' => 'nullable',
            'pasien_id' => 'nullable',
            'tgl_transaksi' => 'required|max:50',
            'jumlah' => 'required'
        ]);

        $transaksi = Transaksi::find($transaksi);
        Transaksi::where('id', $transaksi['id'])->update($val);
 
         // // radirect ke halaman 
         return redirect()->route('transaksi.index')->with('success', ' pembayaran berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($transaksi)
    {
        $transaksi = Transaksi::find($transaksi);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'berhasil di Hapus');
    }
}
