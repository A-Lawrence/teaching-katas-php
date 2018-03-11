<?php

namespace spec;

use GreyCodes\GreyCodes;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreyCodesSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(GreyCodes::class);
    }

    public function it_should_return_0_for_0()
    {
        $this->nGenerate(0)->shouldReturn([]);
    }

    public function it_should_return_the_correct_codes_for_1()
    {
        $this->nGenerate(1)->shouldReturn(["1"]);
    }

    public function it_should_return_the_correct_codes_for_2()
    {
        $this->nGenerate(2)->shouldReturn(["11", "10"]);
    }

    public function it_should_return_the_correct_codes_for_3()
    {
        $this->nGenerate(3)->shouldReturn(["111", "101", "100"]);
    }
}
