<div class="row gy-4">
    {{-- @php dd($element_list, $btn_label) @endphp --}}
    @foreach ($element_list as $element)
        <livewire:card-component :title="$element['title']" :subtitle="$element['subtitle']" :description="$element['description']" :link="$element['link']"
            :images_urls="$element['images_urls']" :btn_label="$btn_label" />
    @endforeach
</div>
