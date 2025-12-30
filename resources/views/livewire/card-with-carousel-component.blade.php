<div class="col-md-{{ $full_width ? '12' : '6' }}" data-aos="fade-up">
    <div class="card-custom rounded-4 bg-base shadow-effect h-100">
        @php $id = str_replace(' ', '', $data['title']) . rand(1, 1000) @endphp
        @if (!empty($data['images_urls']))
            <livewire:carousel-component :images_urls="$data['images_urls']" :id="$id" />
        @endif
        <div class="card-custom-content p-4">
            <div>
                <h4>{{ $data['title'] }}</h4>
                @if (!empty($data['subtitle']))
                    <p class="text-brand mb-2">{{ $data['subtitle'] }}</p>
                @endif
                <p>
                    {!! str($data['description'])->sanitizeHtml() !!}
                </p>
            </div>
            @if (!empty($data['link']) || !empty($data['tags']))
                <div class="d-flex justify-content-between gap-2">
                    @if (!empty($data['link']))
                        <a href="{{ $data['link'] }}" target="_blank"
                            class="btn btn-brand text-capitalize link-custom btn_see">
                            {{ $data['btn_label'] }}
                        </a>
                    @endif
                    @if (!empty($data['tags']))
                        @php $collapse_id = ucwords(str_replace(' ', '', $data['title'])) @endphp
                        <button class="btn btn-brand text-capitalize link-custom btn_see" type="button"
                            data-toggle="collapse" data-target="#collapseTags{{ $collapse_id }}" aria-expanded="false"
                            aria-controls="collapseTags{{ $collapse_id }}"
                            wire:click="$js.showTags('{{ $collapse_id }}')">
                            {{ $data['btn_see_tags'] }}
                        </button>
                    @endif
                </div>
            @endif
            @if (!empty($data['tags']))
                <div class="collapse" id="collapseTags{{ $collapse_id }}" wire:ignore>
                    <div class="d-block mt-3">
                        @foreach ($data['tags'] as $tag)
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
