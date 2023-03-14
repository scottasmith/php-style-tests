<?php

declare(strict_types=1);

namespace Scottsmith\PhpStyleTests;

class Bar
{
    private int $age;

    public function setAge2(
        int $age
    ): self {
        $this->age = $age;
        return $this;
    }
}
