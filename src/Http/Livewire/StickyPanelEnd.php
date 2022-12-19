<?php

namespace STAFEGROUPAB\FilamentStickyPanel\Http\Livewire;

use Filament\Forms\ComponentContainer;
use Filament\Notifications\Notification;
use Filament\Pages\Actions\CreateAction;
use Filament\Pages\Page;
use Filament\Support\Exceptions\Cancel;
use Filament\Support\Exceptions\Halt;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Livewire\Component;
use STAFEGROUPAB\FilamentStickyPanel\Facades\FilamentStickyPanel;

class StickyPanelEnd extends Component
{
    public $currentUrl;
    public $include_page = null;
    public $component = null;
    public function mount(): void
    {
        $this->currentUrl = ENV('APP_URL') . $_SERVER['REQUEST_URI'];
        if (is_array(config('filament-sticky-panel.pages'))) {
            $pages = config('filament-sticky-panel.pages');
            foreach ($pages as $page) {
                if (basename($this->currentUrl) == $page['page_url']){
                    $this->include_page = true;
                    $this->component = $page['component'];
                    break;
                }
            }
        }

    }


    public function render(): View
    {

        return view('filament-sticky-panel::components.sticky-panel-end');
    }
}
