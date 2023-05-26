<?php

declare(strict_types=1);

namespace Tilhom\MyPackage;

class StringProcessor
{
    public function getLength(string $s): int
    {
        return strlen($s);
    }
}