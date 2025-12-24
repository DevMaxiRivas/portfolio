<div class="col-md-6" data-aos="fade-up">
    <div class="card-custom rounded-4 bg-base shadow-effect">
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
            @if (!empty($link))
                <a href="{{ $link }}" target="_blank" class="text-capitalize link-custom btn_see">
                    {{ __($btn_label) }}
                </a>
            @endif
        </div>
    </div>
</div>
