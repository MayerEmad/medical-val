<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'user' => 'c,r,u,d',
            'category' => 'c,r,u,d',
            'product' => 'c,r,u,d',
            'policy' => 'u,d',
            'bill'=>'r',
        ],
        'editoradmin' => [
            'category' => 'r,u',
            'product' => 'r,u',
            'bill'=>'r',
        ],
        'admin' => [
            'category' => 'r',
            'product' => 'r',
            'bill'=>'r',
        ],
        'customer' => [
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
