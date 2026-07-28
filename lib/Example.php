<?php

declare(strict_types=1);

namespace Application;

class Example
{
    private int|float $number = 0;

    /**
     * @throws \InvalidArgumentException if either argument is not numeric.
     */
    public function add(mixed $x, mixed $y): int|float
    {
        if (!is_numeric($x) || !is_numeric($y)) {
            throw new \InvalidArgumentException('Both arguments must be numeric.');
        }

        $this->number = $x + $y;

        return $this->number;
    }
}
