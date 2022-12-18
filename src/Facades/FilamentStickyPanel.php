<?php

namespace STAFEGROUPAB\FilamentStickyPanel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \STAFEGROUPAB\FilamentStickyPanel\FilamentStickyPanel
 */
class FilamentStickyPanel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \STAFEGROUPAB\FilamentStickyPanel\FilamentStickyPanel::class;
    }
}
