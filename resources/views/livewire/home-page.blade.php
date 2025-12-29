<main id="content-wrapper">
    <livewire:home-section-component />
    <section>
        <div class="container">
            <livewire:project-card-list-component />
        </div>
    </section>
    <livewire:profile-section-component />
    <livewire:section-component :id="$experiences_section['id']" :title="$experiences_section['title']" :subtitle="$experiences_section['subtitle']" :element_list="$experiences_section['projects']"
        :btn_label="$experiences_section['btn_label']" />
    <livewire:section-component :id="$projects_section['id']" :title="$projects_section['title']" :subtitle="$projects_section['subtitle']" :element_list="$projects_section['projects']"
        :btn_label="$projects_section['btn_label']" :btn_see_tags="$projects_section['btn_see_tags']" />
    <livewire:section-component :id="$studies_section['id']" :title="$studies_section['title']" :subtitle="$studies_section['subtitle']" :element_list="$studies_section['projects']" />
    <livewire:contact-section-component />
</main>
