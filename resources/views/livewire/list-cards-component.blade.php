<div class="row gy-4">
    @for ($i = 0; $i < $size_list; $i++)
        @if ($size_list % 2 != 0 && $i == $size_list - 1)
            @php $full_width = true;@endphp
        @endif
        <livewire:card-component :title="$element_list[$i]['title']" :subtitle="$element_list[$i]['subtitle'] ?? ''" :description="$element_list[$i]['description']" :link="$element_list[$i]['link'] ?? ''"
            :tags="$element_list[$i]['tags'] ?? []" :images_urls="$element_list[$i]['images_urls'] ?? []" :btn_label="$btn_label ?? ''" :btn_see_tags="$btn_see_tags ?? ''" :full_width="$full_width ?? false" />
    @endfor
</div>
