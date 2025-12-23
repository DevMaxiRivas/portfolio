<div class="row gy-4">
    @foreach ($element_list as $element)
        {{-- @php dd($element) @endphp --}}
        <livewire:card-component :title="$element['title']" :subtittle="$element['subtittle']" :description="$element['description']" :link="$element['link']"
            :images_urls="$element['images_urls']" :btn_label="$element['btn_label']" />
    @endforeach
</div>
