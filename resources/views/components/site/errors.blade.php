@if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li><small>{{ $error }}</small></li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger mt-3 text-center">
        <small>{{ session('error') }}</small>
    </div>
@endif