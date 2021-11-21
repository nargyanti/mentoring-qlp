@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3" id="nav-setting">            
            <h1 class="h2 text-center">Pengaturan</h1>
            <div class="list-group-flush list-group text-center my-3">
                <a href="{{ route('setting.profile') }}" class="list-group-item list-group-item-action active" style="border-radius: 30px">Profil</a>
                <a href="{{ route('setting.account') }}" class="list-group-item list-group-item-action" style="border-radius: 30px">Akun</a>
            </div>            
        </div>   
        <div class="col-md-9 px-4">
            @include('layouts.message')
            @include('layouts.error')
            <h1 class="h2"><b>Edit Profil</b></h1>
            <hr class="my-3">
            <form action="{{ route('user.updateProfile', $user->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 col-md-12">
                    <label for="profile_picture" class="form-label font-weight-bold">Foto Profil</label>
                    <div>
                        @if(!is_null($user->profile_picture))
                            <img src="{{ asset('img/uploads/'.$user->profile_picture ) }}" alt="Foto profil" style="border-radius: 50%; width:120px" class="mr-4">                                                    
                        @else
                            <img src="{{ asset('img/user.png') }}" alt="Foto profil" style="border-radius: 50%; width:120px" class="mr-4">                        
                        @endif
                        <input type="file" id="profile_picture" style="display: none;" name="profile_picture"/>
                        <input type="button" class="btn btn-primary" value="Ubah Foto Profil" onclick="document.getElementById('profile_picture').click();"/>
                    </div>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="name" class="form-label font-weight-bold">Nama</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ $user->name }}" required>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="email" class="form-label font-weight-bold">E-mail</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}" required>                    
                </div>
                <div class="mb-3 col-md-12">
                    <label for="linkedin" class="form-label font-weight-bold">Akun LinkedIn</label>
                    <input class="form-control" type="text" name="linkedin" id="linkedin" value="{{ $user->linkedin }}">
                </div>                
                <div class="mb-3 col-md-12">     
                    <label for="expertise" class="form-label font-weight-bold">Expertise</label>
                    <table class="table table-bordered table-responsive-md">
                        <thead>
                            <tr class="text-center">                            
                                <th scope="col" style="width: 25%">Personal Development</th>
                                <th scope="col" style="width: 25%">Career Literacy</th>
                                <th scope="col" style="width: 25%">Financial Literacy</th>
                                <th scope="col" style="width: 25%">Social Relations</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>                                
                                <td>
                                    @foreach ($categories as $category)
                                        @if ($category->pillar == "Personal Development")                                                                                                                                       
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="expertise{{ $category->id }}" name="expertises[]" @foreach ($expertises as $expertise) {{ $expertise->category->expertise == $category->expertise ? 'checked' : '' }} @endforeach>
                                                <label class="form-check-label" for="$category->id">{{ $category->expertise }}</label>
                                            </div>                                    
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($categories as $category)
                                        @if ($category->pillar == "Career Literacy")                                                                                                                                       
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="expertise{{ $category->id }}" name="expertises[]" @foreach ($expertises as $expertise) {{ $expertise->category->expertise == $category->expertise ? 'checked' : '' }} @endforeach>
                                                <label class="form-check-label" for="$category->id">{{ $category->expertise }}</label>
                                            </div>                                    
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($categories as $category)
                                        @if ($category->pillar == "Financial Literacy")                                                                                                                                       
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="expertise{{ $category->id }}" name="expertises[]" @foreach ($expertises as $expertise) {{ $expertise->category->expertise == $category->expertise ? 'checked' : '' }} @endforeach>
                                                <label class="form-check-label" for="$category->id">{{ $category->expertise }}</label>
                                            </div>                                    
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($categories as $category)
                                        @if ($category->pillar == "Social Relations")                                                                                                                                       
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}" id="expertise{{ $category->id }}" name="expertises[]" @foreach ($expertises as $expertise) {{ $expertise->category->expertise == $category->expertise ? 'checked' : '' }} @endforeach>
                                                <label class="form-check-label" for="$category->id">{{ $category->expertise }}</label>
                                            </div>                                    
                                        @endif
                                    @endforeach
                                </td>                            
                            </tr>                          
                        </tbody>
                    </table>                    
                </div>
                <div class="mb-3 col-md-12">
                    <label for="session_hour" class="form-label font-weight-bold">Session Hour(s)</label>
                    <input class="form-control" type="text" name="session_hour" id="session_hour" value="{{ $user->session_hour }}">
                </div>
                <div class="mb-3 col-md-12">
                    <label for="total_client" class="form-label font-weight-bold">Total Client(s)</label>
                    <input class="form-control" type="number" name="total_client" min="0" id="total_client" value="{{ $user->total_client }}">
                </div>                
                <div class="mb-3 col-md-12">
                    <label for="profile" class="form-label font-weight-bold">Deskripsi Diri / Profil</label>
                    <textarea name="profile" id="profile" cols="30" rows="4" class="form-control">{{ $user->profile }}</textarea>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="education_background" class="form-label font-weight-bold">Background Pendidikan</label>
                    <textarea name="education_background" id="education_background" cols="30" rows="4" class="form-control">{{ $user->education_background }}</textarea>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="job_background" class="form-label font-weight-bold">Background Pekerjaan</label>
                    <textarea name="job_background" id="job_background" cols="30" rows="4" class="form-control">{{ $user->job_background }}</textarea>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="award" class="form-label font-weight-bold">Penghargaan</label>
                    <textarea name="award" id="award" cols="30" rows="4" class="form-control">{{ $user->award }}</textarea>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="one_on_one_link" class="form-label font-weight-bold">Link Jadwal Consulting One on One (Calendly)</label>
                    <input class="form-control" type="text" name="one_on_one_link" id="one_on_one_link" value="{{ $user->one_on_one_link }}">
                </div>
                <div class="mb-3 col-md-12">
                    <label for="one_to_many_link" class="form-label font-weight-bold">Link Jadwal Consulting Group (Calendly)</label>
                    <input class="form-control" type="text" name="one_to_many_link" id="one_to_many_link" value="{{ $user->one_to_many_link }}">
                </div>                
                <div class="mb-3 d-flex justify-content-end col-md-12">                
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>                
            </form>     
        </div>     
    </div>
</div>
<script type="module">
    import Tags from "{{ asset('js/tags.min.js') }}";
    Tags.init();
</script>
<script type="text/javascript">
    $("#profile").qeditor({});
    $("#job_background").qeditor({});
    $("#education_background").qeditor({});
    $("#award").qeditor({});
</script>
@endsection
