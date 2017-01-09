<?php

/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 1/9/2017
 * Time: 9:25 PM
 */
class Rating
{
    /**
     * @var string Name
     */
    private $name;

    /**
     * @var int Points
     */
    private $points;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Rating
     */
    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @param int $points
     * @return Rating
     */
    public function setPoints(int $points)
    {
        $this->points = $points;
        return $this;
    }


}