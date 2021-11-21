@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <div class="container px-5 mx-auto">   
        <h1 class="font-weight-bolder text-center">Temukan Mentormu Sekarang!</h1>     
    </div>
</div>

<div class="container my-3">    
    <ul class="nav nav-pills mx-auto flex-column flex-sm-row" id="pills-tab" role="tablist">
        <li class="nav-item flex-sm-fill text-sm-center m-2" role="presentation">
            <a class="nav-link border" id="pills-personal-development-tab" data-toggle="pill" href="#pills-personal-development" role="tab" aria-controls="pills-personal-development" aria-selected="true" style="border-radius: 20px">Personal Development</a>
        </li>
        <li class="nav-item flex-sm-fill text-sm-center m-2" role="presentation">
            <a class="nav-link border" id="pills-career-literacy-tab" data-toggle="pill" href="#pills-career-literacy" role="tab" aria-controls="pills-career-literacy" aria-selected="false" style="border-radius: 20px">Career Literacy</a>
        </li>
        <li class="nav-item flex-sm-fill text-sm-center m-2" role="presentation">
            <a class="nav-link border" id="pills-financial-literacy-tab" data-toggle="pill" href="#pills-financial-literacy" role="tab" aria-controls="pills-financial-literacy" aria-selected="false" style="border-radius: 20px">Financial Literacy</a>
        </li>
        <li class="nav-item flex-sm-fill text-sm-center m-2" role="presentation">
            <a class="nav-link border" id="pills-social-relations-tab" data-toggle="pill" href="#pills-social-relations" role="tab" aria-controls="pills-social-relations" aria-selected="false" style="border-radius: 20px">Social Relations</a>
        </li>
    </ul>
</div>

<div class="container">    
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-personal-development" role="tabpanel" aria-labelledby="pills-personal-development-tab">
            @foreach ($categories as $category)
                @if ($category->pillar == "Personal Development")        
                <div class="row my-5">                
                    <h2 class="font-weight-bolder text-center col-12">{{ $category->expertise }}</h2>
                    @foreach ($expertises as $expertise)
                        @if($expertise->category_id == $category->id)
                        <div class="col">
                            <a href="{{ route('mentorDetail', $expertise->user->id) }}" target="_blank" class="text-dark">
                            <div class="card mx-auto m-3" style="width: 220px;height:250px">                            
                                <div class="card-body text-center">
                                    @if(!is_null($expertise->user->profile_picture))
                                        <img src="{{ asset('img/uploads/'.$expertise->user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:120px">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:120px">                        
                                    @endif
                                    <p class="card-text h5 mt-3"><b>{{ $expertise->user->name }}</b></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endif                            
                    @endforeach            
                </div>
                @endif
            @endforeach  
        </div>
        <div class="tab-pane fade" id="pills-career-literacy" role="tabpanel" aria-labelledby="pills-career-literacy-tab">
            @foreach ($categories as $category)
                @if ($category->pillar == "Career Literacy")        
                <div class="row my-5">                
                    <h2 class="font-weight-bolder text-center col-12">{{ $category->expertise }}</h2>
                    @foreach ($expertises as $expertise)
                        @if($expertise->category_id == $category->id)
                        <div class="col">
                            <a href="{{ route('mentorDetail', $expertise->user->id) }}" target="_blank" class="text-dark">
                            <div class="card mx-auto m-3" style="width: 220px;height:250px">                            
                                <div class="card-body text-center">
                                    @if(!is_null($expertise->user->profile_picture))
                                        <img src="{{ asset('img/uploads/'.$expertise->user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:120px">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:120px">                        
                                    @endif
                                <p class="card-text h5 mt-3"><b>{{ $expertise->user->name }}</b></p>
                                </div>
                            </div>
                            </a>
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
                <div class="row my-5">                
                    <h2 class="font-weight-bolder text-center col-12">{{ $category->expertise }}</h2>
                    @foreach ($expertises as $expertise)
                        @if($expertise->category_id == $category->id)
                        <div class="col">
                            <a href="{{ route('mentorDetail', $expertise->user->id) }}" target="_blank" class="text-dark">
                            <div class="card mx-auto m-3" style="width: 220px;height:250px">                            
                                <div class="card-body text-center">
                                    @if(!is_null($expertise->user->profile_picture))
                                        <img src="{{ asset('img/uploads/'.$expertise->user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:120px">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:120px">                        
                                    @endif
                                <p class="card-text h5 mt-3"><b>{{ $expertise->user->name }}</b></p>
                                </div>
                            </div>
                            </a>
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
                <div class="row my-5">                
                    <h2 class="font-weight-bolder text-center col-12">{{ $category->expertise }}</h2>
                    @foreach ($expertises as $expertise)
                        @if($expertise->category_id == $category->id)
                        <div class="col">
                            <a href="{{ route('mentorDetail', $expertise->user->id) }}" target="_blank" class="text-dark">
                            <div class="card mx-auto m-3" style="width: 220px;height:250px">                            
                                <div class="card-body text-center">
                                    @if(!is_null($expertise->user->profile_picture))
                                        <img src="{{ asset('img/uploads/'.$expertise->user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:120px">
                                    @else
                                        <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:120px">                        
                                    @endif
                                <p class="card-text h5 mt-3"><b>{{ $expertise->user->name }}</b></p>
                                </div>
                            </div>
                            </a>
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