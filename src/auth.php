<?php

return [

    'guards' => [
        'admin' => [
            'driver'   => 'session',
            'provider' => 'admin',
        ],
    ],

    'providers' => [
        'admin' => [
            'driver' => 'eloquent',
            'model'  => Ideiasweb\Admin\Models\Usuario::class,
        ],
    ],

    //'passwords' => [
    //    'admin' => [
    //        'provider' => 'admin',
    //        'table'    => 'password_resets',
    //        'expire'   => 60,
    //    ],
    //],

];
