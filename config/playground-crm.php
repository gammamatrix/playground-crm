<?php

declare(strict_types=1);

return [
    'about' => (bool) env('PLAYGROUND_CRM_ABOUT', true),
    'load' => [
        'migrations' => (bool) env('PLAYGROUND_CRM_LOAD_MIGRATIONS', false),
    ],
];
