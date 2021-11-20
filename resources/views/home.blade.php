@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container px-5 mx-auto row">        
        <div class="col-md-6">
            <h1 class="font-weight-bolder" id="jumbotron-heading">Apapun masalahnya, pasti ada solusinya!</h1>
            <p style="font-size: 18px text-justify">Sharing cerita kamu sekarang dengan mentor berpengalaman dan terpercaya melalui program Mentoring Quarter Life Projects</p>
            <a href="#kategori"><button class="btn btn-primary btn-lg" role="button">Konsultasi sekarang!</button></a>
        </div>
        <div class="col-md-6 px-5">            
            <img src="{{ asset('img/jumbotron-home.png') }}" alt="Foto profil" style="max-width:450px;width:450px"  class="img-home">
        </div>
    </div>
</div>

<div class="container">
    <div class="my-4 mx-auto text-center px-5" id="kategori">
        <h1 class="font-weight-bolder">Kategori</h1>
        <p style="font-size: 18px">Pilih kategori sesuai dengan keluh kesah kamu</p>
        <div class="row my-4 ">
            <div class="pillar col my-2">
                <a href="#" class="text-dark">
                    <img src="{{ asset('img/personal-development.png') }}" alt="Foto profil" style="border-radius: 50%; width:150px">
                    <h2 class="h3 my-3 font-weight-bold">Personal Development</h2>
                </a>
            </div>
            <div class="pillar col my-2">
                <a href="#" class="text-dark">
                    <img src="{{ asset('img/financial-literacy.png') }}" alt="Foto profil" style="border-radius: 50%; width:150px">
                    <h2 class="h3 my-3 font-weight-bold">Financial Literacy</h2>
                </a>
            </div>
            <div class="pillar col my-2">
                <a href="#" class="text-dark">
                    <img src="{{ asset('img/career-literacy.png') }}" alt="Foto profil" style="border-radius: 50%; width:150px">
                    <h2 class="h3 my-3 font-weight-bold">Career Literacy</h2>
                </a>
            </div>
            <div class="pillar col my-2">
                <a href="#" class="text-dark">
                    <img src="{{ asset('img/social-relations.png') }}" alt="Foto profil" style="border-radius: 50%; width:150px">
                    <h2 class="h3 my-3 font-weight-bold">Social Relations</h2>
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