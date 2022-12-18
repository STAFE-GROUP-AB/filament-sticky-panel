@if(!$exclude_page)
</main>
<aside class="hidden xl:col-span-4 xl:block">
    @if(\View::exists(config('filament-sticky-panel.component')))
        @include(config('filament-sticky-panel.component'), $data)
    @else
        @include('filament-sticky-panel::notconfigured')
    @endif
</aside>
@endif
