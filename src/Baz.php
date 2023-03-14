<?php

declare(strict_types=1);

namespace Scottsmith\PhpStyleTests;

class Baz
{
    private int $age;

    public function getCallableo(
        int $age
    ): callable
    {
        return fn () => $age;
    }

     private function pick(
         ?bool $cheapest = null,
         ?bool $mostExpensive = null
     ): callable
     {
         return function () use ($cheapest, $mostExpensive) {
             return match (true) {
                 $cheapest === null => 1,
                 $mostExpensive === null => 2,
                 default
                 => 3
             };
         };
     }
}
