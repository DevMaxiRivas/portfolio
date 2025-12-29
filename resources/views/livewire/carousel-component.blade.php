<div class="card-custom-image rounded-4" wire:ignore>
    <div id="carouselHeader{{ $id }}" class="carousel slide">
        <div class="carousel-indicators">
            @for ($i = 0; $i < count($images_urls); $i++)
                <button type="button" wire:click="$js.goToSlide({{ $i }})"
                    data-bs-slide-to="{{ $i }}" class="{{ $i === 0 ? 'active' : '' }}"></button>
            @endfor
        </div>

        <div class="carousel-inner">
            @foreach ($images_urls as $image)
                <div class="carousel-item active">
                    <img src="{{ $image }}" class="rounded-4 d-block w-100" alt="Imagen de Proyecto">
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" wire:click="$js.slideCarousel('prev')">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" wire:click="$js.slideCarousel('next')">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>
</div>

@assets
    <style>
        .card {
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .carousel-item img {
            height: 300px;
            object-fit: cover;
        }
    </style>
@endassets

@script
    <script>
        let carouselInstance = null;

        // Función para inicializar el carousel
        function initCarousel() {
            const carouselElement = document.getElementById('carouselHeader{{ $id }}');
            if (carouselElement) {
                // Destruir instancia anterior si existe
                if (carouselInstance) {
                    carouselInstance.dispose();
                }
                // Crear nueva instancia
                carouselInstance = new bootstrap.Carousel(carouselElement, {
                    interval: false, // Desactivar auto-play para mejor control con Livewire
                    wrap: true,
                    touch: true
                });
            }
        }

        // Función para navegar (prev/next)
        $js('slideCarousel', (direction) => {
            if (!carouselInstance) {
                initCarousel();
            }
            if (direction === 'prev') {
                carouselInstance.prev();
            } else {
                carouselInstance.next();
            }
        })

        // Función para ir a un slide específico
        $js('goToSlide', (index) => {
            if (!carouselInstance) {
                initCarousel();
            }
            carouselInstance.to(index);
        })

        // Inicializar cuando el DOM está listo
        document.addEventListener('DOMContentLoaded', initCarousel);

        // Reinicializar después de actualizaciones de Livewire
        document.addEventListener('livewire:load', initCarousel);
        document.addEventListener('livewire:update', initCarousel);
    </script>
@endscript
