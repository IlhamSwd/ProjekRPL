@extends('layout.main')

@section('title','pasien')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-dark" style="font-weight: bold;">Tambah Data Pasien</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('pasien.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nama" class="form-label text-dark">Nama</label>
                                <input type="text" class="form-control" id="nama" name='nama' placeholder="masukan nama pasien"/>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-label text-dark">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name='jenis_kelamin' placeholder="masukan jenis kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nomor_hp" class="form-label text-dark">Nomor HP</label>
                                <input type="text" class="form-control" id="nomor_hp" name='nomor_hp' placeholder="masukan nomor hp"/>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="form-label text-dark">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="masukan alamat"/>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir" class="form-label text-dark">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir"/>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir" class="form-label text-dark">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="masukan tanggal lahir"/>
                            </div>
                            <div class="form-group">
                                <label for="keluhan" class="form-label text-dark">Keluhan</label>
                                <input type="text" class="form-control" id="keluhan" name="keluhan" placeholder="masukan keluhan"/>
                            </div>
                            <div class="form-group">
                                <label for="url_pasien" class="form-label text-dark">Foto</label>
                                <input type="file" class="form-control" id="url_pasien" name='url_pasien' placeholder="masukan foto"/>
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