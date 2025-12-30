<div class="container" id="{{ $id }}">
    <div class="position-relative">
        <div class="row gy-4">
            @foreach ($list as $index => $element_list)
                @php $full_width = (count($list) % 2 != 0 && $index == count($list) - 1) ? true : false @endphp
                <livewire:card-with-carousel-component :data="$element_list" :full_width="$full_width" :btn_see_tags_label="$btn_see_tags_label"
                    :btn_label="$btn_label" wire:key="{{ $id }}-{{ $element_list['id'] }}" />
            @endforeach
        </div>
        <!-- Spinner overlay durante la carga -->
        <div wire:loading.class.remove="d-none"
            class="d-none position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center bg-light bg-opacity-75">
            <div class="spinner-border text-brand" role="status">
                <span
                    class="visually-hidden">{{ __('livewire-components.project-card-list-component.loading') }}...</span>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center gap-2 mt-4" data-aos="fade-up">
        <a href="#{{ $id }}" class="btn btn-brand text-capitalize link-custom btn_see"
            wire:click="previousPage" wire:loading.attr="disabled" wire:loading.class="opacity-50">
            <span wire:loading.remove>{{ __('livewire-components.project-card-list-component.previous') }}</span>
            <span wire:loading>{{ __('livewire-components.project-card-list-component.loading') }}...</span>
        </a>
        </li>
        <li class="page-item">
            <a href="#{{ $id }}" class="btn btn-brand text-capitalize link-custom btn_see"
                wire:click="nextPage" wire:loading.attr="disabled" wire:loading.class="opacity-50">
                <span wire:loading.remove>{{ __('livewire-components.project-card-list-component.next') }}</span>
                <span wire:loading>{{ __('livewire-components.project-card-list-component.loading') }}...</span>
            </a>
    </div>
</div>
