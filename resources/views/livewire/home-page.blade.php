<main id="content-wrapper">
    <livewire:home-section-component />
    <livewire:profile-section-component />
    {{-- @php dd($projects_section) @endphp --}}
    <livewire:section-component :title="$projects_section['title']" :subtitle="$projects_section['subtitle']" :element_list="$projects_section['projects']" />
    <livewire:projects-section-component />
    <livewire:about-section-component />
    <livewire:contact-section-component />
</main>
