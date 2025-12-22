<div class="col-md-6" data-aos="fade-up">
    <div class="card-custom rounded-4 bg-base shadow-effect">
        @if ($project->any_pictures)
            <div class="card-custom-image rounded-4">
                @php
                    $url = Storage::disk('local')->temporaryUrl($project->image_paths[0], now()->addMinutes(5));
                @endphp
                <img class="rounded-4" src="{{ $url ?? '' }}"
                    alt="Project-{{ str_replace(' ', '-', $project->title) }}Image">
            </div>
        @endif
        <div class="card-custom-content p-4">
            <h4>{{ $project->translated_title }}</h4>
            <p>{{ substr($project->translated_description, 0, 150) . (strlen($project->translated_description) > 150 ? '...' : '') }}
            </p>
            <a href="{{ $project->github_link }}" target="_blank"
                class="link-custom btn_see">{{ __('homepage.projects-section.btn-see_project') }}</a>
        </div>
    </div>
</div>
