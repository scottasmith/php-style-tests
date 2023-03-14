<?php

declare(strict_types=1);

namespace Scottsmith\PhpStyleTests;

final readonly class Foo
{
    private string $name;

    public function setName(
        string $name
    ): self {
        $this->name = $name;
        return $this;
    }
}

