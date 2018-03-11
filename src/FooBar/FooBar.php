<?php namespace FooBar;

class FooBar
{
    public function single($number)
    {
        if ($number % 10 == 0) {
            return "FooBar";
        }

        if ($number % 2 == 0) {
            return "Foo";
        }

        if ($number % 5 == 0) {
            return "Bar";
        }

        return $number;
    }

    public function sequence($start, $end)
    {
        $output = array();

        for ($i = $start; $i <= $end; $i++) {
            $output[] = $this->single($i);
        }

        return $output;
    }
}
