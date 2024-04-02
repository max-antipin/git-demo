<?php

namespace MaxAntipin;

class VoidValue implements \Countable
{
    final public function count(): int
    {
        return 0;
    }

    final public function __toString(): string
    {
        return '';
    }
}
