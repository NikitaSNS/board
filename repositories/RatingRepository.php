<?php

/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 1/4/2017
 * Time: 3:08 PM
 */
class RatingRepository extends Repository
{
    /**
     * @return Rating[]
     */
    public function getAllRatings()
    {
        return $this->db
            ->query('SELECT * FROM rating')
            ->fetchAll(PDO::FETCH_CLASS, Rating::class);
    }
}