<?php defined('SYSPATH') OR die('No direct access allowed.');

return
    array(
        'debug'     => false,

        'default'   => array(
            'frozen'   => false,
            'database' => array(
                'dsn'      => 'mysql:host=localhost;dbname=dbname',
                'username' => 'username',
                'password' => 'password',
            )
        ),
        'alternate' => array(
            'frozen'   => true,
            'database' => array(
                'dsn'      => 'mysql:host=localhost;dbname=dbname',
                'username' => 'username',
                'password' => 'password',
            )
        ),
    );
