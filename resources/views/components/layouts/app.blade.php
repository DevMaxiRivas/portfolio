<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $title ?? 'Maximiliano Rivas Systems Analyst' }}</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
                <span class="h3 fw-bold d-block d-lg-none">Maximiliano Rivas</span>
                <img src="{{ asset('images/person.webp') }}" class="d-none d-lg-block rounded-circle"
                    alt="profile-picture">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">{{ __('navbar.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profiles">{{ __('navbar.profiles') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#work">{{ __('navbar.work') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">{{ __('navbar.about_me') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">{{ __('navbar.contact') }}</a>
                    </li>

                    <!-- Menú desplegable para seleccionar idioma -->
                    @livewire('language-component')

                </ul>
            </div>
        </div>
    </nav>
    {{ $slot }}
    @livewire('footer-section-component')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
