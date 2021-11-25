@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container p-5 mx-auto">   
        <h1 class="font-weight-bolder text-center">Panduan Pendaftaran Program Mentoring</h1>     
    </div>
</div>

<div class="guide px-5 text-center">
    <div class="guide-step m-5">
        <p class="h5 px-3" style="line-height: 1.5"><b>Sebelum mendaftar program mentoring, bacalah deskripsi tiap kategori pada halaman Home untuk memahami pelayanan mentoring yang sedang kamu butuhkan.</b></p>
        <img src="{{ asset('img/guide/step-1.png') }}" alt="Guide Step 1" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step m-5">
        <p class="h5 px-3" style="line-height: 1.5"><b>Setelah memahami deskripsi tiap kategori, kunjungi halaman Mentors dengan memilih tab "Mentors" atau menekan salah satu kategori yang disediakan. Kemudian, pilih salah satu mentor yang melayani kategori dan sub-kategori mentoring yang cocok dengan permasalahanmu.</b></p>
        <img src="{{ asset('img/guide/step-2.png') }}" alt="Guide Step 2" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step m-5">
        <p class="h5 px-3" style="line-height: 1.5"><b>Pada halaman profil mentor, baca profil mentor untuk mengetahui informasi mentor yang kamu pilih. Klik tombol "Konsultasi sekarang!" untuk memilih jadwal konsultasi.</b></p>
        <img src="{{ asset('img/guide/step-3.png') }}" alt="Guide Step 3" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step m-5">
        <p class="h5 px-3" style="line-height: 1.5"><b>Pada bagian jadwal mentoring, pilih tanggal yang paling cocok dengan waktu kamu dengan menekan tanggal dan waktu yang disediakan oleh mentor.</b></p>
        <img src="{{ asset('img/guide/step-4.png') }}" alt="Guide Step 4" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step m-5">
        <p class="h5 px-3" style="line-height: 1.5"><b>Kemudian, isi form sebagai informasi tambahan untuk mentor sebelum melakukan mentoring. Pastikan e-mail kamu aktif agar Calendly bisa mengirimkan pesan undangan.</b></p>
        <img src="{{ asset('img/guide/step-5.png') }}" alt="Guide Step 5" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step m-5">
        <p class="h5 px-3" style="line-height: 1.5"><b>Jika pengisian data berhasil, maka akan muncul halaman yang menyatakan bahwa kamu berhasil mendaftar program mentoring.</b></p>
        <img src="{{ asset('img/guide/step-6.png') }}" alt="Guide Step 6" class="img-fluid border" style="width:1000px">
    </div>
    <div class="guide-step mt-5 mb-4">
        <p class="h5 px-3" style="line-height: 1.5"><b>Cek e-mail kamu untuk mendapatkan link Google Meet yang digunakan untuk melakukan mentoring dengan mentor.</b></p>
        <img src="{{ asset('img/guide/step-7.png') }}" alt="Guide Step 7" class="img-fluid border" style="width:1000px">
    </div>
    <a href="{{ asset('docs/Panduan Penggunaan Website Mentoring QLP - Mentee.pdf') }}"><button class="btn btn-primary btn-lg" role="button">Download Panduan</button></a>
</div>

@endsection