<?php

namespace spec\Tennis;

use PhpSpec\ObjectBehavior;
use Tennis\Player;
use Tennis\TennisGame;
use Prophecy\Argument;

class TennisGameSpec extends ObjectBehavior
{
    private $elon;
    private $ada;

    function it_is_initializable()
    {
        $this->shouldHaveType(TennisGame::class);
    }

    public function let()
    {
        $this->elon = new Player('Elon Musk');
        $this->ada  = new Player('Ada Lovelace');

        $this->beConstructedWith($this->elon, $this->ada);
    }

    /** @test */
    public function it_should_return_love_all_for_0_0()
    {
        $this->elon->setScore(0);
        $this->ada->setScore(0);

        $this->score()->shouldReturn("Love-All");
    }

    public function it_should_return_fifteen_love_for_1_0()
    {
        $this->elon->setScore(1);
        $this->ada->setScore(0);

        $this->score()->shouldReturn("Fifteen-Love");
    }

    public function it_should_return_thirty_love_for_2_0()
    {
        $this->elon->setScore(2);
        $this->ada->setScore(0);

        $this->score()->shouldReturn("Thirty-Love");
    }

    public function it_should_return_thirty_all_for_2_2()
    {
        $this->elon->setScore(2);
        $this->ada->setScore(2);

        $this->score()->shouldReturn("Thirty-All");
    }

    public function it_should_return_forty_love_for_3_0()
    {
        $this->elon->setScore(3);
        $this->ada->setScore(0);

        $this->score()->shouldReturn("Forty-Love");
    }

    public function it_should_return_deuce_for_3_3()
    {
        $this->elon->setScore(3);
        $this->ada->setScore(3);

        $this->score()->shouldReturn("Deuce");
    }

    public function it_should_return_an_advantage_for_4_3()
    {
        $this->elon->setScore(4);
        $this->ada->setScore(3);

        $this->score()->shouldReturn("Advantage Elon Musk");
    }

    public function it_should_return_and_advantage_for_3_4()
    {
        $this->elon->setScore(3);
        $this->ada->setScore(4);

        $this->score()->shouldReturn("Advantage Ada Lovelace");
    }

    public function it_should_return_deuce_for_4_4()
    {
        $this->elon->setScore(4);
        $this->ada->setScore(4);

        $this->score()->shouldReturn("Deuce");
    }

    public function it_should_return_a_win_for_5_3()
    {
        $this->elon->setScore(5);
        $this->ada->setScore(3);

        $this->score()->shouldReturn("Win for Elon Musk");
    }

    public function it_should_return_deuce_for_7_7()
    {
        $this->elon->setScore(7);
        $this->ada->setScore(7);

        $this->score()->shouldReturn("Deuce");
    }

    public function it_should_return_a_win_for_7_9()
    {
        $this->elon->setScore(7);
        $this->ada->setScore(9);

        $this->score()->shouldReturn("Win for Ada Lovelace");
    }
}
