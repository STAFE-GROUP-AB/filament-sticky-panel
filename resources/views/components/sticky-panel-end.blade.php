@if($include_page)
</main>
<aside class="hidden xl:col-span-4 xl:block">
    @if($component)
        @include($component)
    @else
        @include('filament-sticky-panel::notconfigured')
    @endif
</aside>
@endif
