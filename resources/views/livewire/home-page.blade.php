<main id="content-wrapper">
    <livewire:home-section-component />
    <livewire:profile-section-component />
    <livewire:project-section-component :data="$projects_section" />
    <livewire:project-section-component :data="$experiences_section" />
    <livewire:section-component :id="$studies_section['id']" :title="$studies_section['title']" :subtitle="$studies_section['subtitle']" :element_list="$studies_section['projects']" />
    <livewire:contact-section-component />
</main>
