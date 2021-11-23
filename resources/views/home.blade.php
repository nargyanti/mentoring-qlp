@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container px-3 mx-auto row">        
        <div class="col-lg-6">
            <h1 class="font-weight-bolder" id="jumbotron-heading">Apapun masalahnya, pasti ada solusinya!</h1>
            <p style="font-size: 18px text-justify">Platform ini mempertemukan kamu dengan mentor pilihan yang siap membantu kamu dalam mengembangkan potensi di masa quarter-life</p>
            <a href="#kategori"><button class="btn btn-primary btn-lg" role="button">Pilih kategori!</button></a>
        </div>
        <div class="col-lg-6 px-5">            
            <img src="{{ asset('img/jumbotron-home.png') }}" alt="Foto profil" style="max-width:450px;width:450px"  class="img-home">
        </div>
    </div>
</div>

<div class="container">
    <div class="my-4 mx-auto text-center px-3" id="kategori">
        <h1 class="font-weight-bolder">Kategori</h1>
        <p style="font-size: 18px">Pilih kategori sesuai dengan keluh kesah kamu</p>
        <div class="row my-4 ">
            <div class="pillar col-md my-2 category-item" onclick="">
                <a href="{{ route('mentors') }}" target="_blank" class="text-dark text-decoration-none">
                    <img src="{{ asset('img/personal-development.png') }}" alt="Foto profil" style="border-radius: 50%; width:150px">
                    <h2 class="h3 my-3 font-weight-bold">Personal Development</h2>
                    <p>Untuk kamu yang ingin belajar mengembangkan kemampuan dasar pribadi</p>
                </a>
            </div>            
            <div class="pillar col-sm my-2">
                <a href="{{ route('mentors') }}" target="_blank" class="text-dark text-decoration-none">
                    <img src="{{ asset('img/career-preparation.png') }}" alt="Foto profil" style="border-radius: 50%; width:150px">
                    <h2 class="h3 my-3 font-weight-bold">Career Preparation</h2>
                    <p>Untuk kamu yang sedang ingin mempersiapkan masa bekerja</p>
                </a>
            </div>            
            <div class="pillar col-sm my-2">
                <a href="{{ route('mentors') }}" target="_blank" class="text-dark text-decoration-none">
                    <img src="{{ asset('img/professional-insight.png') }}" alt="Foto profil" style="border-radius: 50%; width:150px">
                    <h2 class="h3 my-3 font-weight-bold">Profession Insight</h2>
                    <p>Untuk kamu yang sedang ingin memperdalam insight profesional</p>
                </a>
            </div>            
            <div class="pillar col-sm my-2">
                <a href="{{ route('mentors') }}" target="_blank" class="text-dark text-decoration-none">
                    <img src="{{ asset('img/social-relations.png') }}" alt="Foto profil" style="border-radius: 50%; width:150px">
                    <h2 class="h3 my-3 font-weight-bold">Social Relations</h2>
                    <p>Untuk kamu yang ingin belajar relational dan social networking</p>                
                </a>
            </div>
            <div class="pillar col-sm my-2">
                <a href="{{ route('mentors') }}" target="_blank" class="text-dark text-decoration-none">
                    <img src="{{ asset('img/financial-literacy.png') }}" alt="Foto profil" style="border-radius: 50%; width:150px">
                    <h2 class="h3 my-3 font-weight-bold">Financial Literacy</h2>
                    <p>Untuk kamu yang sedang ingin belajar menata keuangan sejak dini</p>
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="my-4" id="benefit">
        <h1 class="font-weight-bolder text-center">Benefit</h1>        
        <div class="row mx-auto px-5 my-4">
            <div class="pillar col-md-5 pr-5">
                <img src="{{ asset('img/benefit.png') }}" alt="Foto profil" style="width:400px" class="img-home">
            </div>
            <div class="pillar col-md-7 benefit-list">
                <ul style="font-size: 20px;list-style: none;line-height:1.8">
                    <li><b style="font-size: 30px;padding-right:20px">✓</b>Lorem ipsum dolor sit amet</li>
                    <li><b style="font-size: 30px;padding-right:20px">✓</b>Lorem ipsum dolor sit amet</li>
                    <li><b style="font-size: 30px;padding-right:20px">✓</b>Lorem ipsum dolor sit amet</li>
                    <li><b style="font-size: 30px;padding-right:20px">✓</b>Lorem ipsum dolor sit amet</li>
                </ul>
            </div>            
        </div>
    </div> --}}
</div>

@endsection