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
                    @foreach ($items as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="/#{{ $item['id'] }}">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                    <!-- Menú desplegable para seleccionar idioma -->
                    <livewire:language-component />

                </ul>
            </div>
        </div>
    </nav>
