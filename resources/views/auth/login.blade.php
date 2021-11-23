@extends('layouts.app')

@section('content')
<div class="row mx-auto">                
    <div class="col-xl-6 px-5 py-4">                        
        <h1 class="font-weight-bolder mb-4">Login</h1>
        <form method="POST" action="{{ route('login') }}" class="my-2">
            @csrf            
            <div class="form-group">                                
                <input placeholder="E-mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                
            </div>

            <div class="form-group">                                
                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror                
            </div>

            <div class="form-group">                
                <p>Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang!</a></p>                
            </div>

            <div class="form-group my-4">                
                <button type="submit" class="btn btn-primary w-100">
                    {{ __('Log In') }}
                </button>                                              
            </div>
        </form>                    
    </div>
    <div class="col-xl-6 text-right" style="background-color:#FFF6E9" id="login-image">
        <img src="{{ asset('img/login-image.png') }}" alt="Login Image" style="height: 100vh;">
    </div>    
</div>
@endsection
