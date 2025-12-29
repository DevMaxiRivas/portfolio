<div class="container">
    <div class="row gy-4">
        @for ($i = 0; $i < $size_list; $i++)
            @if ($size_list % 2 != 0 && $i == $size_list - 1)
                @php $full_width = true;@endphp
            @endif
            <livewire:card-with-carousel-component :data="$list[$i]" :full_width="$full_width ?? false" />
        @endfor
    </div>
    <div class="mt-4 container d-flex justify-content-center" data-aos="fade-up">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><button class="page-link" href="#" wire:click="previousPage">Previous</button>
                </li>
                <li class="page-item"><button class="page-link" href="#" wire:click="nextPage">Next</button></li>
            </ul>
        </nav>
    </div>
</div>
