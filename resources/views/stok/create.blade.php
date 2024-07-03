@extends('layout.main')

@section('title', 'stok')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-dark" style="font-weight: bold;">Tambah Stok Obat</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('stok.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="kode" class="form-label text-dark">Kode Obat</label>
                                <input type="text" class="form-control" id="kode" name='kode' placeholder="Masukan kode obat"/>
                                @Error('kode')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama" class="form-label text-dark">Nama Obat</label>
                                <input type="text" class="form-control" id="nama" name='nama'placeholder="Masukan Nama obat"/>
                                @Error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jumlah" class="form-label text-dark">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name='jumlah' placeholder="Masukan jumlah obat"/>
                                @Error('jumlah')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="data_obat" class="form-label text-dark">Data Obat</label>
                                <select class="form-control" id="data_obat" name='data_obat'>
                                    <option value="Obat Masuk">Obat Masuk</option>
                                </select>
                                @Error('data_obat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tgl_kadaluarsa" class="form-label text-dark">Tanggal Kadaluarsa</label>
                                <input type="date" class="form-control" id="tgl_kadaluarsa" name='tgl_kadaluarsa' placeholder="Masukan tanggal kadaluarsa"/>
                                @Error('tgl_kadaluarsa')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="keterangan" class="form-label text-dark">Keterangan</label>
                                <input type="text" class="form-control" id="keterangan" name='keterangan' placeholder="Masukan keterangan"/>
                                @Error('pekerjaan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="harga" class="form-label text-dark">Harga</label>
                                <input type="number" class="form-control" id="harga" name='harga' placeholder="Masukan harga"/>
                                @Error('harga')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-dark">Simpan</button>
                            <a href="{{ url('stok') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
