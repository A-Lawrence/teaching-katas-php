<?php namespace Tennis;

class TennisGame
{
    private $player1;
    private $player2;

    private $lookup = [
        0 => "Love",
        1 => "Fifteen",
        2 => "Thirty",
        3 => "Forty",
    ];

    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }

    public function score()
    {
        if ($this->hasWinner()) {
            return "Win for " . $this->getLeader()->getName();
        }

        if ($this->hasAdvantage()) {
            return "Advantage " . $this->getLeader()->getName();
        }

        if ($this->isDeuce()) {
            return "Deuce";
        }

        if ($this->isTied()) {
            return $this->lookup[$this->player1->getScore()] . "-All";
        }

        return $this->standardScore();
    }

    public function isTied()
    {
        return $this->player1->getScore() == $this->player2->getScore();
    }

    public function isInWinningPlay()
    {
        $total = $this->player1->getScore() - 3;
        $total += $this->player2->getScore() - 3;

        return $total >= 0;
    }

    public function isDeuce()
    {
        return $this->isTied() && $this->isInWinningPlay();
    }

    public function hasAdvantage()
    {
        return $this->isInWinningPlay() && $this->isLeadingBy(1);
    }

    public function isLeadingBy($lead)
    {
        return abs($this->player1->getScore() - $this->player2->getScore()) == $lead;
    }

    public function getLeader()
    {
        if ($this->player1->getScore() > $this->player2->getScore()) {
            return $this->player1;
        }

        return $this->player2;
    }

    public function hasWinner()
    {
        return $this->isInWinningPlay() && $this->isLeadingBy(2);
    }

    public function standardScore()
    {
        $player1Score = $this->lookup[$this->player1->getScore()];
        $player2Score = $this->lookup[$this->player2->getScore()];

        return $player1Score . "-" . $player2Score;
    }
}