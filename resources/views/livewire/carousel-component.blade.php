<div class="container" wire:ignore>
    <div id="carouselHeader{{ $id }}" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" wire:click="$js.goToSlide(0)" data-bs-slide-to="0" class="active"></button>
            <button type="button" wire:click="$js.goToSlide(1)" data-bs-slide-to="1"></button>
            <button type="button" wire:click="$js.goToSlide(2)" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=800&h=400&fit=crop"
                    class="d-block w-100" alt="Montaña">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=800&h=400&fit=crop"
                    class="d-block w-100" alt="Naturaleza">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800&h=400&fit=crop"
                    class="d-block w-100" alt="Bosque">
            </div>
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
