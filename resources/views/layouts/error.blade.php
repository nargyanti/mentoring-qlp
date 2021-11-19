@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ups!</strong> Ada masalah saat kamu memasukkan datamu.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif