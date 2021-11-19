@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show my-4" role="alert">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
@elseif ($message = Session::get('failed'))
    <div class="alert alert-danger alert-dismissible fade show my-4" role="alert">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>    
@endif