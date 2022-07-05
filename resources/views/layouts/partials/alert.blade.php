@if (session()->has('message'))

    <div class="container">
        <div class="alert alerti{{ session('mesaj_tur') }}">{{ session('mesaj') }}</div>
    </div>

    @endif
