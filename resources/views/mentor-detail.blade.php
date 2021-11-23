@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container mx-auto row">        
        <div class="col-xl-3 text-center">
            @if(!is_null($user->profile_picture))
            <img src="{{ asset('img/uploads/'.$user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:230px">
            @else
                <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:230px">                        
            @endif        
        </div>
        <div class="col-xl-9 px-5 py-2 mentor-detail-jumbotron-about">            
            <div class="badge-expertise">
                @foreach($expertises as $expertise) 
                    <div class="badge badge-pill badge-primary my-1">
                        {{ $expertise->category->expertise }}
                    </div>
                @endforeach            
            </div>
            <h1 class="display-4 font-weight-bolder" style="font-size: 50px">{{ $user->name }}</h1>            
            <a href="mailto:{{ $user->email }}" target="_blank"><img src="{{ asset('img/email.png') }}" style="border-radius: 50%; width:40px"></a>
            <a href="{{ $user->linkedin }}" target="_blank"><img src="{{ asset('img/linkedin.png') }}" style="border-radius: 50%; width:40px"></a>            
            <div class="row my-4 mx-auto">
                <div class="col-md">
                    <h2 class="text-secondary" style="font-size: 18px;">Session Hour(s)</h2>
                    <p style="font-size: 28px;font-weight:700">{{ $user->session_hour }} hour(s)</p>
                </div>
                <div class="col-md">
                    <h2 class="text-secondary" style="font-size: 18px;">Total Client(s)</h2>
                    <p style="font-size: 28px;font-weight:700">{{ $user->total_client }}</p>
                </div>
                <div class="col-md">
                    <h2 class="text-secondary" style="font-size: 18px;">Rating(s)</h2>
                    <p style="font-size: 28px;font-weight:700">{{ $user->rating }}/5</p>
                </div>
            </div>
            <a href="#jadwal-mentor"><button class="btn btn-primary btn-lg" role="button">Konsultasi sekarang!</button></a>        
        </div>
    </div>
</div>

<div class="container px-4 text-justify">        
    <div class="my-4">
        <h2 class="font-weight-bolder h2">Profil</h2>
        {!! $user->profile !!}
    </div>
    <div class="my-4">
        <h2 class="font-weight-bolder">Background Pendidikan</h2>
        {!! $user->education_background !!}
    </div>
    <div class="my-4">
        <h2 class="font-weight-bolder">Background Pekerjaan</h2>
        {!! $user->job_background !!}
    </div>
    <div class="my-4">
        <h2 class="font-weight-bolder">Penghargaan</h2>
        {!! $user->award !!}
    </div>
    <div class="my-4">
        <h2 class="font-weight-bolder mb-3" id="jadwal-mentor">Jadwal Mentor</h2>
        @if(!is_null($user->one_on_one_link))            
            <div>
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="{{ $user->one_on_one_link }}?primary_color=fc6b56" style="min-width:50%;height:680px;"></div>
                <!-- Calendly inline widget end -->
            </div>
        @endif
        
        {{-- @if(!is_null($user->one_to_many_link))
            <h2>Consulting Group</h2>
            <div>
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="{{ $user->one_to_many_link }}?primary_color=fc6b56" style="min-width:50%;height:680px;"></div>
                <!-- Calendly inline widget end -->
            </div>
        @endif         --}}
    </div>
</div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
{{-- <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> --}}
@endsection