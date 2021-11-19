@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container px-5 row">        
        <div class="col-md-3">
            @if(!is_null($user->profile_picture))
            <img src="{{ asset('storage/'.$user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:230px">
            @else
                <img src="https://via.placeholder.com/200" alt="Foto profil" style="border-radius: 50%; width:230px">                        
            @endif        
        </div>
        <div class="col-md-9 pl-5">            
            <h1 class="display-4" style="font-size: 50px">{{ $user->name }}</h1>
            <img src="https://via.placeholder.com/200" style="border-radius: 50%; width:40px">            
            <img src="https://via.placeholder.com/200" style="border-radius: 50%; width:40px">            
            <table class="table table-borderless" style="font-size: 25px">
                <tr>
                    <th>Session Hour(s)</th>
                    <th>Total Client(s)</th>
                    <th>Rating(s)</th>
                </tr>
                <tr>
                    <td>{{ $user->session_hour }}</td>
                    <td>{{ $user->total_client }}</td>
                    <td>{{ $user->rating }}</td>
                </tr>
            </table>
            <a href="#jadwal-mentor"><button class="btn btn-primary btn-lg" role="button">Konsultasi sekarang!</button></a>        
        </div>
    </div>
</div>

<div class="container">        
    <div class="my-2">
        <h1 class="font-weight-bolder">Profil</h1>
        <p>{{ $user->profile }}</p>
    </div>
    <div class="my-2">
        <h1 class="font-weight-bolder">Background Pendidikan</h1>
        <p>{{ $user->education_background }}</p>
    </div>
    <div class="my-2">
        <h1 class="font-weight-bolder">Background Pekerjaan</h1>
        <p>{{ $user->job_background }}</p>
    </div>
    <div class="my-2">
        <h1 class="font-weight-bolder">Penghargaan</h1>
        <p>{{ $user->award }}</p>
    </div>
    <div class="my-2">
        <h1 class="font-weight-bolder" id="jadwal-mentor">Jadwal Mentor</h1>
        <div>
            <!-- Calendly inline widget begin -->
            <div class="calendly-inline-widget" data-url="{{ $user->one_on_one_link }}" style="min-width:50%;height:680px;"></div>
            <!-- Calendly inline widget end -->
        </div>
    </div>
</div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>

@endsection