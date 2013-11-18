<?php
defined('SYSPATH') OR die('No direct access allowed.');

// require redbean
$sep = DIRECTORY_SEPARATOR;
require_once(dirname(__FILE__).$sep.'vendor'.$sep.'redbean'.$sep.'RedBean'.$sep.'redbean.inc'.EXT);

// kickstart it
$cfg = Kohana::$config->load('redbean');

foreach ($cfg as $alias => $config) {

    if ($alias == 'default') {
        R::setup(
            $config['database']['dsn'],
            $config['database']['username'],
            $config['database']['password'],
            $config['frozen']
        );
    } elseif (!in_array($alias, array('debug'))) {
        R::addDatabase(
            $alias,
            $config['database']['dsn'],
            $config['database']['username'],
            $config['database']['password'],
            $config['frozen']
        );
    }
}

if (isset($cfg['debug']) && $cfg['debug'] === true) {
    R::debug(true);
}

