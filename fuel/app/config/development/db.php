<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
		'type'           => 'mysqli',
        'connection'     => array(
            'hostname'       => 'localhost',
            'port'           => '3306',
            'database'       => 'nhlapr2v_laptop24',
            'username'       => 'root',
            'password'       => 'root',
            'persistent'     => false,
            'compress'       => false,
        ),
        'identifier'     => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
        'readonly'       => false,
	),
);
// return array(
// 	'default' => array(
// 		'connection'  => array(
// 			'dsn'        => 'mysql:host=localhost;dbname=nhlapr2v_laptop24',
// 			'username'   => 'nhlap_laptop24',
// 			'password'   => 'Rglo5$87',
// 		),
// 	),
// );
