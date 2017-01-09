<?php

class DB
{
    /**
     * @return PDO
     */
    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $db_params = include($paramsPath);

        $dsn = 'mysql:host=' . $db_params['host'] . ';dbname=' . $db_params['dbName'];

        $db = new PDO($dsn, $db_params['user'], $db_params['password']);

        $db->exec('set names utf8');

        return $db;
    }
}