<?php

namespace Allokotos\Lw3;

use Allokotos\Lw3\Snack;

abstract class ChocolateFactory
{
    public function orderSnack(string $type)
    {
        $yummie = $this->createSnack($type);
        $yummie->prepare();
        $yummie->cutType();
    }

    public abstract function createSnack(string $type): Snack;
}