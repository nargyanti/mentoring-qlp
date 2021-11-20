@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3" id="nav-setting">            
            <h1 class="h2 text-center">Pengaturan</h1>
            <div class="list-group-flush list-group text-center my-3">
                <a href="{{ route('setting.profile') }}" class="list-group-item list-group-item-action" style="border-radius: 30px">Profil</a>
                <a href="{{ route('setting.account') }}" class="list-group-item list-group-item-action active" style="border-radius: 30px">Akun</a>
            </div>            
        </div>   
        <div class="col-md-9 px-4">
            @include('layouts.message')
            <h1 class="h2"><b>Ubah Password</b></h1>
            <hr class="my-3">
            <form action="{{ route('user.updateAccount', $user->id) }}" method="post" class="row">
                @csrf
                @method('PUT')
                <div class="mb-3 col-md-12">
                    <label for="new_password" class="form-label font-weight-bold">Password Baru</label>
                    <input class="form-control" type="password" name="new_password" id="new_password" required>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="confirmation_password" class="form-label font-weight-bold">Konfirmasi Password</label>
                    <input class="form-control" type="password" name="confirmation_password" id="confirmation_password" required>
                </div>                   
                <div class="mb-3 d-flex justify-content-end col-md-12">                
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>                
            </form>
        </div>     
    </div>
</div>
@endsection
