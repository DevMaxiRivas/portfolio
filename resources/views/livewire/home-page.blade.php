<main id="content-wrapper">
    <livewire:home-section-component />
    <livewire:profile-section-component />
    <livewire:section-component :id="$experiences_section['id']" :title="$experiences_section['title']" :subtitle="$experiences_section['subtitle']" :element_list="$experiences_section['projects']"
        :btn_label="$experiences_section['btn_label']" />
    <section>
        <div class="container">
            <livewire:project-card-list-component :id="$projects_section['project_list_id']" :url_resource="$projects_section['project_list_url']" />
        </div>
    </section>
    <livewire:section-component :id="$studies_section['id']" :title="$studies_section['title']" :subtitle="$studies_section['subtitle']" :element_list="$studies_section['projects']" />
    <livewire:contact-section-component />
</main>
