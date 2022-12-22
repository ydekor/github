<?php

namespace lw2\src;

use lw2\src\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type)
    {
        $piz = $this->createPizza($type);
        $piz->prepare();
        $piz->cut();
    }
    public abstract function createPizza(string $type): Pizza;
}
