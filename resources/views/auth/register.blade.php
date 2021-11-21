@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="px-3">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">{{ __('Nama') }}</label>                            
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">{{ __('E-Mail') }}</label>                            
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror           
                        </div>                                         

                        <div class="form-group">
                            <label for="password" class="form-label">{{ __('Password') }}</label>                            
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror           
                        </div>                 
                        
                        <div class="form-group">
                            <label for="password-confirm" class="form-label">{{ __('Konfirmasi Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">                                                    
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6">
                                <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk sekarang!</a></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="width:100px">
                                {{ __('Register') }}
                            </button>           
                        </div>                 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
