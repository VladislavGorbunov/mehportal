@if(session('message'))
    <div class="alert alert-success mt-3 text-center">
        <small>{{ session('message') }}</small>
    </div>
@endif