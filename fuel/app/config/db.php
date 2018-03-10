<?php
/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
    'development' => array(
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

    // a PDO driver configuration, using PostgreSQL
    'production' => array(
        'type'           => 'pdo',
        'connection'     => array(
            'dsn'            => 'pgsql:host=ec2-54-235-66-24.compute-1.amazonaws.com;dbname=df9emr4qm3oqmq',
            'username'       => 'eodqjezxgqmzkz',
            'password'       => 'ac92bb43bae7e2a4e4b320d3514418b74c39309fdfd77290e2bdae5664e7739a',
            'persistent'     => false,
            'compress'       => false,
        ),
        'identifier'     => '"',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
        'readonly'       => array('slave1', 'slave2', 'slave3'),
    ),

);
