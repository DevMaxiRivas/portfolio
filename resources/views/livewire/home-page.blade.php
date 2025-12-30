<main id="content-wrapper">
    <livewire:home-section-component />
    <livewire:profile-section-component />
    <livewire:section-component :id="$experiences_section['id']" :title="$experiences_section['title']" :subtitle="$experiences_section['subtitle']" :element_list="$experiences_section['projects']"
        :btn_label="$experiences_section['btn_label']" />
    <livewire:project-section-component :data="$projects_section" />
    <livewire:section-component :id="$studies_section['id']" :title="$studies_section['title']" :subtitle="$studies_section['subtitle']" :element_list="$studies_section['projects']" />
    <livewire:contact-section-component />
</main>
