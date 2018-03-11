<?php

namespace Bowling;

use InvalidArgumentException;

class BowlingScores
{
    protected $rolls = [];

    public function roll($pins)
    {
        $this->guardAgainstInvalidRoll($pins);

        $this->rolls[] = $pins;
    }

    public function isRollAStrike($roll)
    {
        return $this->rolls[$roll] == 10;
    }

    public function isRollASpare($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }

    public function defaultFrameScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    public function strikeBonus($roll)
    {
        $nextFrameRolls   = [];
        $nextFrameRolls[] = $this->rolls[$roll + 1];
        $nextFrameRolls[] = $this->rolls[$roll + 2];

        return array_sum($nextFrameRolls);
    }

    public function spareBonus($roll)
    {
        return $this->rolls[$roll + 2];
    }

    public function score()
    {
        $score = 0;
        $roll  = 0;

        for ($frame = 1; $frame <= 10; $frame++) {
            if ($this->isRollAStrike($roll)) {
                $score += 10 + $this->strikeBonus($roll);
                $roll += 1;
            } elseif ($this->isRollASpare($roll)) {
                $score += 10 + $this->spareBonus($roll);
                $roll += 2;
            } else {
                $score += $this->defaultFrameScore($roll);
                $roll += 2;
            }
        }

        return $score;
    }

    private function guardAgainstInvalidRoll($pins)
    {
        if ($pins < 0 || $pins > 10) {
            throw new InvalidArgumentException();
        }
    }
}
