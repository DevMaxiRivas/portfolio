<main id="content-wrapper">
    @if (!empty($translation))
        <section id="section-description" class="full-height px-lg-5">
            <div class="container">
                <div class="row mt-4 pb-4" data-aos="fade-up">
                    <div>
                        <h2 class="text-capitalize">{{ $translation['title'] }}</h2>
                        <h6 class="text-uppercase text-brand">
                            {!! str($translation['description'])->sanitizeHtml() !!}
                        </h6>
                    </div>
                    <livewire:projects.components.project-action-buttons :github_link="$this->project['github_link']" :access_link="$this->project['access_link']"
                        :section_lear_more_id="'section-details'" />
                </div>
                <div style="max-height: 500px" data-aos="fade-up">
                    @if (!empty($this->project['images_urls']))
                        <livewire:carousel-component :images_urls="$this->project['images_urls']" :id="$this->project['id']" :height_image="$height_image" />
                    @endif
                </div>
        </section>
        <section id="section-details" class="p-lg-5">
            <div class="container">
                {!! str($translation['details'])->sanitizeHtml() !!}
                @assets
                    <style>
                        a {
                            text-decoration: none;
                        }

                        table {
                            display: block;
                            margin: 20px;
                            overflow-x: auto;
                            white-space: nowrap;
                        }

                        th,
                        td {
                            border: 1px solid var(--color-body);
                        }

                        th,
                        td {
                            padding: 4px 4px;
                        }

                        th p {
                            margin: 0;
                        }

                        td p {
                            margin: 0;
                        }
                    </style>
                @endassets
            </div>
        </section>
    @else
        <section id="project" class="full-height px-lg-5">
            <div class="container">
                <div class="row mt-4 pb-4" data-aos="fade-up">
                    <div>
                        <h2 class="text-capitalize">{{ $this->project['title'] }}</h2>
                        <h6 class="text-uppercase text-brand">
                            Tradución pendiente
                        </h6>
                    </div>
                    <livewire:projects.components.project-action-buttons :github_link="$this->project['github_link']" :access_link="$this->project['access_link']" />
                </div>
                <div style="max-height: 500px" data-aos="fade-up">
                    @if (!empty($this->project['images_urls']))
                        <livewire:carousel-component :images_urls="$this->project['images_urls']" :id="$this->project['id']" :height_image="$height_image" />
                    @endif
                </div>
            </div>
        </section>

    @endif
</main>
