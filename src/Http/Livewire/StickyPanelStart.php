<?php

namespace STAFEGROUPAB\FilamentStickyPanel\Http\Livewire;

use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Illuminate\View\View;
use Livewire\Component;
use STAFEGROUPAB\FilamentStickyPanel\Facades\FilamentStickyPanel;

class StickyPanelStart extends Component
{
    public $currentUrl;
    public $include_page = null;

    public function mount(): void
    {
        $this->currentUrl = ENV('APP_URL') . $_SERVER['REQUEST_URI'];
        if (is_array(config('filament-sticky-panel.pages'))) {
            $pages = config('filament-sticky-panel.pages');
            foreach ($pages as $page) {
                if (basename($this->currentUrl) == $page['page_url']){
                    $this->include_page = true;
                    break;
                }
            }
        }

    }
    public function render(): View
    {
        return view('filament-sticky-panel::components.sticky-panel-start');
    }
}
