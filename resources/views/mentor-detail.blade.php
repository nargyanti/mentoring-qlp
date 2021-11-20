@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container px-5 mx-auto row">        
        <div class="col-md-3">
            @if(!is_null($user->profile_picture))
            <img src="{{ asset('storage/'.$user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:230px">
            @else
                <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:230px">                        
            @endif        
        </div>
        <div class="col-md-9 pl-5">            
            <h1 class="display-4 font-weight-bolder" style="font-size: 50px">{{ $user->name }}</h1>
            <a href="mailto:{{ $user->email }}" target="_blank"><img src="{{ asset('img/email.png') }}" style="border-radius: 50%; width:40px"></a>
            <a href="{{ $user->linkedin }}" target="_blank"><img src="{{ asset('img/linkedin.png') }}" style="border-radius: 50%; width:40px"></a>            
            <table class="table table-borderless my-4">
                <tr class="text-secondary" style="font-size: 18px;">
                    <th>Session Hour(s)</th>
                    <th>Total Client(s)</th>
                    <th>Rating(s)</th>
                </tr>
                <tr style="font-size: 28px">
                    <td><b>{{ $user->session_hour }} hour(s)</b></td>
                    <td><b>{{ $user->total_client }}</b></td>
                    <td><b>{{ $user->rating }}</b></td>
                </tr>
            </table>
            <a href="#jadwal-mentor"><button class="btn btn-primary btn-lg" role="button">Konsultasi sekarang!</button></a>        
        </div>
    </div>
</div>

<div class="container px-4 text-justify">        
    <div class="my-4">
        <h1 class="font-weight-bolder">Profil</h1>
        <p>{{ $user->profile }}</p>
    </div>
    <div class="my-4">
        <h1 class="font-weight-bolder">Background Pendidikan</h1>
        <p>{{ $user->education_background }}</p>
    </div>
    <div class="my-4">
        <h1 class="font-weight-bolder">Background Pekerjaan</h1>
        <p>{{ $user->job_background }}</p>
    </div>
    <div class="my-4">
        <h1 class="font-weight-bolder">Penghargaan</h1>
        <p>{{ $user->award }}</p>
    </div>
    <div class="my-4">
        <h1 class="font-weight-bolder mb-3" id="jadwal-mentor">Jadwal Mentor</h1>
        @if(!is_null($user->one_on_one_link))
            <h2>Consulting One-On-One</h2>
            <div>
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="{{ $user->one_on_one_link }}?primary_color=fc6b56" style="min-width:50%;height:680px;"></div>
                <!-- Calendly inline widget end -->
            </div>
        @endif
        
        @if(!is_null($user->one_to_many_link))
            <h2>Consulting Group</h2>
            <div>
                <!-- Calendly inline widget begin -->
                <div class="calendly-inline-widget" data-url="{{ $user->one_to_many_link }}?primary_color=fc6b56" style="min-width:50%;height:680px;"></div>
                <!-- Calendly inline widget end -->
            </div>
        @endif        
    </div>
</div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
{{-- <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> --}}
@endsection