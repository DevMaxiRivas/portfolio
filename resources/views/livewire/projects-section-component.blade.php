        <section id="work" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-lg-8">
                        <h6 class="text-brand">WORK</h6>
                        <h1>My Most Important Projects</h1>
                    </div>
                </div>

                @if ($projects->count() > 0)
                    <div class="row gy-4">
                        @foreach ($projects as $project)
                            <livewire:project-card-component :project="$project" />
                        @endforeach

                    </div>
                @else
                    <div class="row gy-4">
                        <p>No projects found.</p>
                    </div>
                @endif
        </section>
