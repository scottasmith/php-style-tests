<?php

declare(strict_types=1);

namespace Scottsmith\PhpStyleTests;

class Baz
{
    private int $age;

    public function getCallableo(
        int $age
    ): callable {
        return fn () => $age;
    }
}

