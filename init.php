<?php defined('SYSPATH') OR die('No direct access allowed.');

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
            $config['frozen'],
            $config['auto_set_encoding']
        );
    } elseif (!in_array($alias, array('debug', 'strict_typing', 'beautiful_column_names'))) {
        R::addDatabase(
            $alias,
            $config['database']['dsn'],
            $config['database']['username'],
            $config['database']['password'],
            $config['frozen'],
            $config['auto_set_encoding']
        );
    }
}


if (isset($cfg['debug']) && $cfg['debug'] === true) {
    R::debug(true);
}

if (isset($cfg['strict_typing']) && $cfg['strict_typing'] === false) {
    R::setStrictTyping(false);
}

if (isset($cfg['beautiful_column_names']) && $cfg['beautiful_column_names'] === false) {
    RedBean_OODBBean::setFlagBeautifulColumnNames(false);
}




