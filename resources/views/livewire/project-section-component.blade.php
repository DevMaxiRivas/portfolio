<section id="{{ $id }}" class="full-height px-lg-5">
    <div class="container">

        <div class="row pb-4" data-aos="fade-up">
            <div class="col-lg-8">
                <h6 class="text-uppercase text-brand">{{ $title }}</h6>
                <h2 class="text-capitalize">{{ $subtitle }}</h2>
            </div>
        </div>
        <livewire:project-card-list-component :data="$data_list" />
</section>
