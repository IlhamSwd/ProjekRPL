@extends('layout.main')

@section('title','anggota')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-dark" style="font-weight: bold;">Edit Anggota</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('anggota.update', $anggota['id']) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama" class="form-label text-dark">Nama</label>
                                <input type="text" class="form-control" id="nama" name='nama' value="{{ old('nama') ? old('nama') : $anggota["nama"] }}"/>
                                @Error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-label text-dark">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name='jenis_kelamin' value="{{ old('jenis_kelamin') ? old('jenis_kelamin') : $anggota["jenis_kelamin"] }}" placeholder="Masukan jenis kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nomor_hp" class="form-label text-dark">Nomor HP</label>
                                <input type="text" class="form-control" id="nomor_hp" name='nomor_hp' value="{{ old('nomor_hp') ? old('nomor_hp') : $anggota["nomor_hp"] }}"/>
                                @Error('nomor_hp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror   
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="form-label text-dark">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') ? old('alamat') : $anggota["alamat"] }}"/>
                                @Error('alamat')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir" class="form-label text-dark">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') ? old('tempat_lahir') : $anggota["tempat_lahir"] }}"/>
                                @Error('tempat_lahir')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir" class="form-label text-dark">Tanggal Lahir</label>a
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') ? old('tgl_lahir') : $anggota["tgl_lahir"] }}"/>
                                @Error('tgl_lahir')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="url_anggota" class="form-label text-dark">Foto</label>
                                <input type="file" class="form-control" id="url_anggota" name='url_anggota' value="{{ old('url_anggota') ? old('url_anggota') : $anggota["url_anggota"] }}"/>
                                @Error('url_anggota')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan" class="form-label text-dark">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') ? old('pekerjaan') : $anggota["pekerjaan"] }}"/>
                                @Error('pekerjaan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark">Simpan</button>
                            <a href="{{ url('anggota') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection