        <section id="work" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-uppercase text-brand">{{ __($title) }}</h6>
                        <h2 class="text-capitalize">{{ __($subtittle) }}</h2>
                    </div>
                </div>

                @if (!empty($element_list))
                    <livewire:list-cards-component :element_list="$element_list" />
                @else
                    <div class="row gy-4">
                        <p>No cards to show</p>
                    </div>
                @endif

                {{-- <livewire:list-cards-component /> --}}
        </section>
