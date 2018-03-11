<?php namespace RomanNumerals;

class RomanNumerals
{
    protected $conversions = [
        1000 => "M",
        900 => "CM",
        500 => "D",
        400 => "CD",
        100 => "C",
        90 => "XC",
        50 => "L",
        40 => "XL",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
        1 => "I",
    ];

    public function convert($denary)
    {
        $numerals = "";

        foreach ($this->conversions as $value => $letter) {
            while ($denary >= $value) {
                $numerals .= $letter;
                $denary -= $value;
            }
        }

        return $numerals;
    }
}
