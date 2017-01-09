<?php

/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 1/4/2017
 * Time: 3:08 PM
 */
abstract class Repository
{
    /**
     * @var PDO
     */
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}