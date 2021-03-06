<?php namespace spec\PrimeFactors;

use PrimeFactors\PrimeFactors;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(PrimeFactors::class);
    }

    function it_returns_an_empty_array_for_1(){
        $this->generate(1)->shouldReturn(array());
    }

    function it_returns_2_for_2(){
        $this->generate(2)->shouldReturn(array(2));
    }

    function it_returns_3_for_3(){
        $this->generate(3)->shouldReturn(array(3));
    }

    function it_returns_2_2_for_4(){
        $this->generate(4)->shouldReturn(array(2,2));
    }

    function it_returns_5_for_5(){
        $this->generate(5)->shouldReturn(array(5));
    }

    function it_returns_2_3_for_6(){
        $this->generate(6)->shouldReturn(array(2,3));
    }

    function it_returns_2_5_for_10(){
        $this->generate(10)->shouldReturn(array(2,5));
    }

    function it_returns_2_5_5_for_50(){
        $this->generate(50)->shouldReturn(array(2,5,5));
    }

    function it_returns_2_2_5_5_for_100(){
        $this->generate(100)->shouldReturn(array(2,2,5,5));
    }
}
