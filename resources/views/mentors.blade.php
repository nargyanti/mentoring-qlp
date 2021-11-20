@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container px-5 mx-auto">   
        <h1 class="font-weight-bolder text-center">Temukan Mentormu Sekarang!</h1>     
    </div>
</div>

<div class="container">    
    {{-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
        </li>
    </ul> --}}
    <div class="row">
    @foreach ($users as $user)
        <div class="col">
            <a href="{{ route('mentorDetail', $user->id) }}" target="_blank" class="text-dark">
            <div class="card mx-auto m-3" style="width: 220px;height:250px">                            
                <div class="card-body text-center">
                    @if(!is_null($user->profile_picture))
                        <img src="{{ asset('storage/'.$user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:120px">                                                    
                    @else
                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:120px">                        
                    @endif
                <p class="card-text h5 mt-3"><b>{{ $user->name }}</b></p>
                </div>
            </div>
            </a>
        </div>
    @endforeach    
    </div>    
    {{-- <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
    </div>     --}}
</div>

@endsection