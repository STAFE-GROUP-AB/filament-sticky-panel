<?php

// config for STAFEGROUPAB/FilamentStickyPanel
return [

    // Please configure what Livewire component you want to be rendered as the right sand panel.
    // You can create as many panels as you like for different basename urls.

    'pages' => [
        'admin' => [
            'page_url' => 'admin',
            'component' => '', //'livewire.demo-component',
        ],
        'edit' => [
            'page_url' => 'edit',
            'component' => '', //'livewire.edit-helper-component',
        ],
    ],
];
