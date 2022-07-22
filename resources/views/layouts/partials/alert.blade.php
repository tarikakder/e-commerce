@if (session()->has('message'))

    <div class="container">
        <div class="alert alert-{{ session('mesage_tur') }}">{{ session('message') }}</div>
    </div>

    @endif
