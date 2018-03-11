<?php namespace Tennis;

class Player
{
    private $name;
    private $score;

    public function __construct($name)
    {
        $this->name  = $name;
        $this->score = 0;
    }

    public function setScore($score = 0)
    {
        return $this->score = $score;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function getName()
    {
        return $this->name;
    }
}
