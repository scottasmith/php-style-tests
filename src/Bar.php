<?php

declare(strict_types=1);

namespace Scottsmith\PhpStyleTests;

readonly final class Bar
{
    private int $age;

    public function setAge(
        int $age
    ): self {
        $this->age = $age;
        return $this;
    }
}

