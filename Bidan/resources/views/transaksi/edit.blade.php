@extends('layout.main')

@section('title', 'transaksi')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">  
            <div class="card">
                <div class="card-header text-dark" style="font-weight: bold;">Edit Data transaksi</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('transaksi.update', $transaksi['id']) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="kode" class="form-label text-dark">Kode Obat</label>
                            <select class="form-control" id="kode" name='kode'>
                                @foreach ($stok as $item)
                                    <option value="{{ $item['id'] }}">
                                        {{$item['kode']}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stok_id" class="form-label text-dark">Nama Obat</label>
                            <select class="form-control" id="stok_id" name='stok_id'>
                                @foreach ($stok as $item)
                                    <option value="{{ $item['id'] }}">
                                        {{$item['nama']}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pasein_id" class="form-label text-dark">Pasien</label>
                            <select class="form-control" id="pasien_id" name='pasien_id'>
                                @foreach ($pasien as $item)
                                    <option value="{{ $item['id'] }}">
                                        {{$item['nama']}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_transaksi" class="form-label text-dark">Tanggal Transaksi</label>
                            <input type="date" class="form-control" id="tgl_transaksi" name="tgl_transaksi" placeholder="Masukan tanggal transaksi"/>
                            @Error('tgl_transaksi')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="stok_id" class="form-label text-dark">Harga</label>
                            <select class="form-control" id="stok_id" name='stok_id'>
                                @foreach ($stok as $item)
                                    <option value="{{ $item['id'] }}">
                                        {{$item['harga']}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="form-label text-dark">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukan Jumlah" />
                            @Error('jumlah')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-dark">Simpan</button>
                        <a href="{{ url('') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection