@extends('layouts.app')

@section('content')

<div class="row mx-auto">                
    <div class="col-xl-6 px-5 py-5">                        
        <h1 class="font-weight-bolder mb-4">Register</h1>
        <form method="POST" action="{{ route('register') }}" class="my-2">
            @csrf        
            <div class="form-group">                
                <input placeholder="Nama" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="form-group">                
                <input placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
            </div>                                         

            <div class="form-group">                
                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
            </div>                 
            
            <div class="form-group">                
                <input placeholder="Konfirmasi Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                                                    
            </div>

            <div class="form-group">            
                <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk sekarang!</a></p>                
            </div>

            <div class="form-group my-5">
                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Register') }}
                </button>           
            </div>                 
        </form>             
    </div>
    <div class="col-xl-6 text-right" style="background-color:#FFF6E9" id="login-image">
        <img src="{{ asset('img/login-image.png') }}" alt="Login Image" style="height: 100vh;">
    </div>    
</div>
@endsection
