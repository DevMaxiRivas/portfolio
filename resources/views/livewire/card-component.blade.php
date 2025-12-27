<div class="col-md-6" data-aos="fade-up">
    <div class="card-custom rounded-4 bg-base shadow-effect h-100">
        @if (!empty($images_urls))
            <div class="card-custom-image rounded-4">
                <img class="rounded-4" src="{{ $images_urls[0] ?? '' }}" alt="{{ str_replace(' ', '-', $title) }}Image">
            </div>
        @endif
        <div class="card-custom-content p-4">
            <h4>{{ $title }}</h4>
            @if (!empty($subtitle))
                <p class="text-brand mb-2">{{ $subtitle }}</p>
            @endif
            <p>{{ substr($description, 0, 150) . (strlen($description) > 150 ? '...' : '') }}
            </p>
            @if (!empty($link) || !empty($tags))
                <div class="d-flex justify-content-between gap-2">
                    @if (!empty($link))
                        <a href="{{ $link }}" target="_blank"
                            class="btn btn-brand text-capitalize link-custom btn_see">
                            {{ $btn_label }}
                        </a>
                    @endif
                    @if (!empty($tags))
                        @php $collapse_id = ucwords(str_replace(' ', '', $title)) @endphp
                        <button class="btn btn-brand text-capitalize link-custom btn_see" type="button"
                            data-toggle="collapse" data-target="#collapseTags{{ $collapse_id }}" aria-expanded="false"
                            aria-controls="collapseTags{{ $collapse_id }}"
                            wire:click="$js.showTags('{{ $collapse_id }}')">
                            {{ $btn_see_tags }}
                        </button>
                    @endif
                </div>
            @endif
            @if (!empty($tags))
                <div class="collapse" id="collapseTags{{ $collapse_id }}" wire:ignore>
                    <div class="d-block mt-3">
                        @foreach ($tags as $tag)
                            <span class="badge bg-white text-brand">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@script
    <script>
        $js('showTags', (collapse_id) => {
            collapse = $('#collapseTags' + collapse_id);
            if (collapse.hasClass('show')) {
                collapse.collapse('hide');
            } else {
                collapse.collapse('show');
            }
        })
    </script>
@endscript
