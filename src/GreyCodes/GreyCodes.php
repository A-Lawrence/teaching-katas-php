<?php namespace GreyCodes;

class GreyCodes
{
    public function nGenerate($n)
    {
        if ($n == 0) {
            return [];
        }

        $terms = $this->determineRange($n)->map(function ($term) {
            return $this->generate($term);
        });

        return $terms->toArray();
    }

    public function determineRange($n)
    {
        $nth = pow(2, $n);

        return collect(range($nth - $n, $nth - 1));
    }

    public function generate($nth)
    {
        $half_nth = $nth >> 1;

        return decbin($nth ^ $half_nth);
    }
}
