<?php

namespace STAFEGROUPAB\FilamentStickyPanel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use STAFEGROUPAB\FilamentStickyPanel\Commands\FilamentStickyPanelCommand;

class FilamentStickyPanelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-sticky-panel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-sticky-panel_table')
            ->hasCommand(FilamentStickyPanelCommand::class);
    }
}
