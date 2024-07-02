@extends('layout.main')

@section('title', 'pasien')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6">  
            <div class="card">
                <div class="card-header text-dark" style="font-weight: bold;">Edit Data Pasien</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pasien.update', $pasien['id']) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama" class="form-label text-dark">Nama</label>
                            <input type="text" class="form-control" id="nama" name='nama' value="{{ old('nama') ? old('nama') : $pasien["nama"] }}"/>
                            @Error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="form-label text-dark">Jenis kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name='jenis_kelamin' value="{{ old('jenis_kelamin') ? old('jenis_kelamin') : $pasien["jenis_kelamin"] }}" placeholder="Masukan jenis kelamin">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp" class="form-label text-dark">Nomor HP</label>
                            <input type="text" class="form-control" id="nomor_hp" name='nomor_hp' value="{{ old('nomor_hp') ? old('nomor_hp') : $pasien["nomor_hp"] }}"/>
                            @Error('nomor_hp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="form-label text-dark">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') ? old('alamat') : $pasien["alamat"] }}"/>
                            @Error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="form-label text-dark">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name='tempat_lahir' value="{{ old('tempat_lahir') ? old('tempat_lahir') : $pasien["tempat_lahir"] }}"/>
                            @Error('tempat_lahir')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir" class="form-label text-dark">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name='tgl_lahir' value="{{ old('tgl_lahir') ? old('tgl_lahir') : $pasien["tgl_lahir"] }}"/>
                            @Error('tlg_lahir')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="url_pasien" class="form-label text-dark">Foto</label>
                            <input type="file" class="form-control" id="url_pasien" name='url_pasien' value="{{ old('url_pasien') ? old('url_pasien') : $pasien["url_pasien"] }}"/>
                            @Error('url_pasien')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="keluhan" class="form-label text-dark">Keluhan</label>
                            <input type="text" class="form-control" id="keluhan" name='keluhan' value="{{ old('keluhan') ? old('keluhan') : $pasien["keluhan"] }}"/>
                            @Error('keluhan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-dark">Simpan</button>
                        <a href="{{ url('pasien') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection