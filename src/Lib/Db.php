<?php

if (! function_exists('init_db_connection')) {
    function init_db_connection(
        array $config
    ): PDO
    {
        return new PDO(
            sprintf(
                '%s:host=%s;dbname=%s',
                $config['driver'],
                $config['host'],
                $config['name']
            ),
            $config['user'],
            $config['password']
        );
    }
}
