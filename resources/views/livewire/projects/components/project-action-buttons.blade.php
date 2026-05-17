<div class="d-block d-sm-flex justify-content-between gap-2">
    @if (!empty($this->section_lear_more_id))
        <a href="#{{ $section_lear_more_id }}"
            class="d-none d-sm-block btn btn-brand text-capitalize link-custom btn_see mb-2">
            {{ __('project-page.project-description-section.btn_learn_more') }}
        </a>
    @endif
    <div class="d-flex justify-content-between gap-2">
        @if (!empty($this->github_link))
            <a href="{{ $this->github_link }}" target="_blank"
                class="btn btn-brand text-capitalize link-custom btn_see mb-2">
                {{ __('project-page.project-description-section.btn_see_code') }}
            </a>
        @endif
        @if (!empty($this->access_link))
            <a href="{{ $this->access_link }}" target="_blank"
                class="btn btn-brand text-capitalize link-custom btn_see mb-2">
                {{ __('project-page.project-description-section.btn_see_demo') }}
            </a>
        @endif
    </div>
</div>
