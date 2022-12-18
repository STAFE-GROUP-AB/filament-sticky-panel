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
    public $exclude_page = null;

    public function mount(): void
    {
        $this->currentUrl = ENV('APP_URL') . $_SERVER['REQUEST_URI'];
        if (is_array(config('filament-sticky-panel.exclude_pages'))) {
            $exclusions = config('filament-sticky-panel.exclude_pages');
            foreach ($exclusions as $exclusion) {
                if (basename($this->currentUrl) == $exclusion){
                    $this->exclude_page = true;
                    break;
                }
            }
        }

    }


    public function render(): View
    {

        return view('filament-sticky-panel::components.sticky-panel-end', ['data' => [$this->currentUrl]]);
    }
}
