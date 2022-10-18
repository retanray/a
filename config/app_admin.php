<?php

return [
  'prefix' => env('APP_ADMIN_PREFIX', 'admin'),
  'admin_types' => [
        'super_admin' => 'Super Administrator',
        'admin'     => 'Administrator',
        'moderator' => 'Moderator',
        'editor'    => 'Editor',
    ],
];