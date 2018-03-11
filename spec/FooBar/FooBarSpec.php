<?php

namespace spec\FooBar;

use FooBar\FooBar;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FooBarSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FooBar::class);
    }

    public function it_should_output_1_for_1()
    {
        $this->single(1)->shouldReturn(1);
    }

    public function it_should_output_foo_for_2()
    {
        $this->single(2)->shouldReturn("Foo");
    }

    public function it_should_output_bar_for_5()
    {
        $this->single(5)->shouldReturn("Bar");
    }

    public function it_should_output_foo_bar_for_10()
    {
        $this->single(10)->shouldReturn("FooBar");
    }

    public function it_should_output_1_foo_3_foo_bar_for_sequence_1_to_5()
    {
        $this->sequence(1, 5)->shouldReturn([1, "Foo", 3, "Foo", "Bar"]);
    }

    public function it_should_output_foobar_11_foo_13_foo_bar_for_sequence_10_to_15()
    {
        $this->sequence(10, 15)->shouldReturn(["FooBar", 11, "Foo", 13, "Foo", "Bar"]);
    }
}
