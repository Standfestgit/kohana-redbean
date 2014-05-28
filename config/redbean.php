<?php defined('SYSPATH') OR die('No direct access allowed.');

return
    array(
        'debug'                  => false,
        'strict_typing'          => true,
        'beautiful_column_names' => true,

        'default'                => array(
            'frozen'            => false,
            'auto_set_encoding' => true,
            'database'          => array(
                'dsn'      => 'mysql:host=localhost;dbname=dbname',
                'username' => 'username',
                'password' => 'password',
            )
        ),
        'alternate'              => array(
            'frozen'            => true,
            'auto_set_encoding' => false,
            'database'          => array(
                'dsn'      => 'mysql:host=localhost;dbname=dbname',
                'username' => 'username',
                'password' => 'password',
            )
        ),
    );
