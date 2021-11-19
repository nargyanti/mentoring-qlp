@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Mentors</h1>
    <div class="row">
    @foreach ($users as $user)
        <div class="col">
            <a href="{{ route('mentorDetail', $user->id) }}">
            <div class="card" style="width: 220px;height:250px">                            
                <div class="card-body text-center">
                    @if(!is_null($user->profile_picture))
                        <img src="{{ asset('storage/'.$user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:120px">                                                    
                    @else
                        <img src="https://via.placeholder.com/120" alt="Foto profil" style="border-radius: 50%; width:120px">                        
                    @endif
                <p class="card-text h5 mt-3"><b>{{ $user->name }}</b></p>
                </div>
            </div>
            </a>
        </div>
    @endforeach    
    </div>
</div>

@endsection