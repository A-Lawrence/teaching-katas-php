<?php namespace PrimeFactors;

class PrimeFactors
{
    public function generate($number)
    {
        $factors = [];


        for ($possibility = 2; $number > 1; $possibility++) {
            for (; $number % $possibility == 0; $number /= $possibility) {
                $factors[] = $possibility;
            }
        }

        return $factors;
    }
}
