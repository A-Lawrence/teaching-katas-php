<?php

namespace spec\Bowling;

use Bowling\BowlingScores;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BowlingScoresSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(BowlingScores::class);
    }

    protected function rollNumber($times, $score)
    {
        for ($i = 0; $i < $times; $i++) {
            $this->roll($score);
        }
    }

    protected function rollSpare()
    {
        $this->roll(1);
        $this->roll(9);
    }

    protected function rollStrike()
    {
        $this->roll(10);
    }

    public function it_scores_a_gutter_game_as_0()
    {
        $this->rollNumber(20, 0);

        $this->score()->shouldReturn(0);
    }

    public function it_scores_the_sum_of_all_knocked_down_pins_for_a_game()
    {
        $this->rollNumber(20, 1);

        $this->score()->shouldReturn(20);
    }

    public function it_awards_an_extra_roll_for_achieving_a_spare()
    {
        $this->rollSpare();

        $this->roll(1);

        $this->rollNumber(17, 0);

        $this->score()->shouldReturn(12);
    }

    public function it_awards_an_extra_two_rolls_for_achieving_a_strike()
    {
        $this->rollStrike();

        $this->roll(5);
        $this->roll(4);

        $this->rollNumber(16, 0);

        $this->score()->shouldReturn(28);
    }

    public function it_scores_a_perfect_game()
    {
        for ($i = 0; $i < 12; $i++) {
            $this->rollStrike();
        }

        $this->score()->shouldReturn(300);
    }

    public function it_raises_an_exception_when_attempting_to_use_negative_roll()
    {
        $this->shouldThrow("InvalidArgumentException")->duringRoll(-10);
    }

    public function it_raises_an_exception_when_attempting_to_use_excessive_roll()
    {
        $this->shouldThrow("InvalidArgumentException")->duringRoll(11);
    }
}
