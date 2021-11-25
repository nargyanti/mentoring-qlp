@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container px-5 mx-auto">   
        <h1 class="font-weight-bolder text-center">Temukan Mentormu Sekarang!</h1>     
    </div>
</div>

<div class="container my-3">
    <h2 class="font-weight-bolder text-center nav-pill-kategori-title">Pilih Kategori</h2>    
    <ul class="nav nav-pills mx-auto flex-column flex-sm-row" id="pills-tab" role="tablist">
        <li class="nav-item flex-sm-fill text-sm-center m-2" role="presentation">
            <a class="nav-link border active" id="pills-personal-development-tab" data-toggle="pill" href="#pills-personal-development" role="tab" aria-controls="pills-personal-development" aria-selected="true" style="border-radius: 20px">Personal Development</a>
        </li>
        <li class="nav-item flex-sm-fill text-sm-center m-2" role="presentation">
            <a class="nav-link border" id="pills-career-preparation-tab" data-toggle="pill" href="#pills-career-preparation" role="tab" aria-controls="pills-career-preparation" aria-selected="false" style="border-radius: 20px">Career Preparation</a>
        </li>
        <li class="nav-item flex-sm-fill text-sm-center m-2" role="presentation">
            <a class="nav-link border" id="pills-profession-insight-tab" data-toggle="pill" href="#pills-profession-insight" role="tab" aria-controls="pills-profession-insight" aria-selected="false" style="border-radius: 20px">Profession Insight</a>
        </li>
        <li class="nav-item flex-sm-fill text-sm-center m-2" role="presentation">
            <a class="nav-link border" id="pills-social-relations-tab" data-toggle="pill" href="#pills-social-relations" role="tab" aria-controls="pills-social-relations" aria-selected="false" style="border-radius: 20px">Social Relations</a>
        </li>
        <li class="nav-item flex-sm-fill text-sm-center m-2" role="presentation">
            <a class="nav-link border" id="pills-financial-literacy-tab" data-toggle="pill" href="#pills-financial-literacy" role="tab" aria-controls="pills-financial-literacy" aria-selected="false" style="border-radius: 20px">Financial Literacy</a>
        </li>        
    </ul>
</div>

<div class="container">    
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-personal-development" role="tabpanel" aria-labelledby="pills-personal-development-tab">
            @foreach ($categories as $category)
                @if ($category->pillar == "Personal Development")        
                <div class="row my-5 px-3">                
                    <h2 class="font-weight-bolder text-center col-12">{{ $category->expertise }}</h2>
                    <p class="text-center col-12">{{ $category->description }}</p>
                    @foreach ($expertises as $expertise)
                        @if($expertise->category_id == $category->id)
                        <div class="col m-2">
                            <div class="card mx-auto p-1 mentor-card">                            
                                <a href="{{ route('mentorDetail', $expertise->user->id) }}" target="_blank" class="text-dark text-decoration-none">
                                <div class="card-body text-center">
                                    @if(!is_null($expertise->user->profile_picture))
                                        <img src="{{ asset('img/uploads/'.$expertise->user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%;">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%;">                        
                                    @endif
                                    <div class="card-text">
                                        <p class="h5 mt-3"><b>{{ $expertise->user->name }}</b></p>
                                        <p class="mentor-description">{{ $expertise->user->description }}</p>
                                    </div>                                    
                                </div>
                                </a>
                            </div>
                        </div>
                        @endif                                                                            
                    @endforeach                    
                </div>
                @endif
            @endforeach  
        </div>
        <div class="tab-pane fade" id="pills-career-preparation" role="tabpanel" aria-labelledby="pills-career-preparation-tab">
            @foreach ($categories as $category)
                @if ($category->pillar == "Career Preparation")        
                <div class="row my-5 px-3">                
                    <h2 class="font-weight-bolder text-center col-12">{{ $category->expertise }}</h2>
                    <p class="text-center col-12">{{ $category->description }}</p>
                    @foreach ($expertises as $expertise)
                        @if($expertise->category_id == $category->id)
                        <div class="col m-2">
                            <div class="card mx-auto p-1 mentor-card">                            
                                <a href="{{ route('mentorDetail', $expertise->user->id) }}" target="_blank" class="text-dark text-decoration-none">
                                <div class="card-body text-center">
                                    @if(!is_null($expertise->user->profile_picture))
                                        <img src="{{ asset('img/uploads/'.$expertise->user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%;">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%;">                        
                                    @endif
                                    <div class="card-text">
                                        <p class="h5 mt-3"><b>{{ $expertise->user->name }}</b></p>
                                        <p class="mentor-description">{{ $expertise->user->description }}</p>
                                    </div>                                    
                                </div>
                                </a>
                            </div>
                        </div>
                        @endif                                                                            
                    @endforeach           
                </div>
                @endif
            @endforeach
        </div>        
        <div class="tab-pane fade" id="pills-profession-insight" role="tabpanel" aria-labelledby="pills-profession-insight-tab">
            @foreach ($categories as $category)
                @if ($category->pillar == "Profession Insight")        
                <div class="row my-5 px-3">                
                    <h2 class="font-weight-bolder text-center col-12">{{ $category->expertise }}</h2>
                    <p class="text-center col-12">{{ $category->description }}</p>
                    @foreach ($expertises as $expertise)
                        @if($expertise->category_id == $category->id)
                        <div class="col m-2">
                            <div class="card mx-auto p-1 mentor-card">                            
                                <a href="{{ route('mentorDetail', $expertise->user->id) }}" target="_blank" class="text-dark text-decoration-none">
                                <div class="card-body text-center">
                                    @if(!is_null($expertise->user->profile_picture))
                                        <img src="{{ asset('img/uploads/'.$expertise->user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%;">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%;">                        
                                    @endif
                                    <div class="card-text">
                                        <p class="h5 mt-3"><b>{{ $expertise->user->name }}</b></p>
                                        <p class="mentor-description">{{ $expertise->user->description }}</p>
                                    </div>                                    
                                </div>
                                </a>
                            </div>
                        </div>
                        @endif                                                                            
                    @endforeach           
                </div>
                @endif
            @endforeach
        </div>
        <div class="tab-pane fade" id="pills-social-relations" role="tabpanel" aria-labelledby="pills-social-relations-tab">
            @foreach ($categories as $category)
                @if ($category->pillar == "Social Relations")                 
                <div class="row my-5 px-3">                
                    <h2 class="font-weight-bolder text-center col-12">{{ $category->expertise }}</h2>
                    <p class="text-center col-12">{{ $category->description }}</p>
                    @foreach ($expertises as $expertise)
                        @if($expertise->category_id == $category->id)
                        <div class="col m-2">
                            <div class="card mx-auto p-1 mentor-card">                            
                                <a href="{{ route('mentorDetail', $expertise->user->id) }}" target="_blank" class="text-dark text-decoration-none">
                                <div class="card-body text-center">
                                    @if(!is_null($expertise->user->profile_picture))
                                        <img src="{{ asset('img/uploads/'.$expertise->user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%;">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%;">                        
                                    @endif
                                    <div class="card-text">
                                        <p class="h5 mt-3"><b>{{ $expertise->user->name }}</b></p>
                                        <p class="mentor-description">{{ $expertise->user->description }}</p>
                                    </div>                                    
                                </div>
                                </a>
                            </div>
                        </div>
                        @endif                                                                            
                    @endforeach        
                </div>
                @endif
            @endforeach
        </div>
        <div class="tab-pane fade" id="pills-financial-literacy" role="tabpanel" aria-labelledby="pills-financial-literacy-tab">
            @foreach ($categories as $category)
                @if ($category->pillar == "Financial Literacy")        
                <div class="row my-5 px-3">                
                    <h2 class="font-weight-bolder text-center col-12">{{ $category->expertise }}</h2>
                    <p class="text-center col-12">{{ $category->description }}</p>
                    @foreach ($expertises as $expertise)
                        @if($expertise->category_id == $category->id)
                        <div class="col m-2">
                            <div class="card mx-auto p-1 mentor-card">                            
                                <a href="{{ route('mentorDetail', $expertise->user->id) }}" target="_blank" class="text-dark text-decoration-none">
                                <div class="card-body text-center">
                                    @if(!is_null($expertise->user->profile_picture))
                                        <img src="{{ asset('img/uploads/'.$expertise->user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%;">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%;">                        
                                    @endif
                                    <div class="card-text">
                                        <p class="h5 mt-3"><b>{{ $expertise->user->name }}</b></p>
                                        <p class="mentor-description">{{ $expertise->user->description }}</p>
                                    </div>                                    
                                </div>
                                </a>
                            </div>
                        </div>
                        @endif                                                                            
                    @endforeach           
                </div>
                @endif
            @endforeach
        </div>
    </div>    
</div>

@endsection