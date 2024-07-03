@extends('layout.main')

@section('title','Dashboard')
    
@section('content')


    <!-- Menambahkan gambar di sini -->
    <div class="text-center">
        <img src="{{ url('https://tugubandung.id/wp-content/uploads/2022/06/hari-bidan.png') }}" alt="Gambar Bidan" class="img-fluid">
       
    </div>

    <div class="d-flex justify-content-center">
        <div class="text-center">
            <h1 class="display-3 text-white animated slideInLeft">Aplikasi Web Bidan</h1>
            <p class="text-dark animated slideInLeft mb-4 pb-2">Bidan adalah tenaga kesehatan profesional yang memiliki kualifikasi dan kompetensi khusus dalam memberikan 
                                                                pelayanan kesehatan yang komprehensif kepada wanita, terutama dalam hal kesehatan reproduksi, kehamilan, 
                                                                persalinan, dan perawatan bayi baru lahir.</p>
            <a href="{{ route('transaksi.store') }}" class="btn btn-warning py-sm-3 px-sm-5 me-3 animated slideInLeft">Klik disini</a>
        </div>
    </div>
    
@endsection