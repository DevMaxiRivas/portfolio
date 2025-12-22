<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLanguage" role="button" data-bs-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        {{ __('navbar.language') }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownLanguage">
        @foreach ($languages as $language)
            <a class="text-brand dropdown-item text-uppercase" href="#"
                wire:click="setLanguage('{{ $language }}')">
                {{ __('languages.' . $language) }}
            </a>
        @endforeach
    </div>
</li>
