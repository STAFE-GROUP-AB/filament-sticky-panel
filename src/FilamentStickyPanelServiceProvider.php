<?php

namespace STAFEGROUPAB\FilamentStickyPanel;

use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;

class FilamentStickyPanelServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-sticky-panel')
            ->hasConfigFile()
            ->hasViews();
    }

    public function boot()
    {
        Livewire::component('sticky-panel-start', Http\Livewire\StickyPanelStart::class);
        Livewire::component('sticky-panel-end', Http\Livewire\StickyPanelEnd::class);

        Filament::registerRenderHook(
            'content.start',
            fn (): string => Blade::render('@livewire(\'sticky-panel-start\')'),
        );
        Filament::registerRenderHook(
            'content.end',
            fn (): string => Blade::render('@livewire(\'sticky-panel-end\')'),
        );

        parent::boot();
    }
}
