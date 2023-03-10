<?php

require_once __DIR__.'/../vendor/autoload.php';

use Allokotos\lw3\Snack;
use Allokotos\Lw3\ChocolateFactory;

class ChocolateEgg extends Snack
{
    public array $toppings;
    public string $chocolate; 

    public function createSnack(string $name, string $choc, array $top)
    {
        $this->name = $name;
        $this->chocolate = $choc;
        $this->toppings = $top;
    }

    public function prepareSnack(): void
    {
        echo "Началось создание яйца {$this->name}";
        echo "Добавляется шоколад {$this->chocolate}";
        echo "Добавлены начинки:";
        for ($i = 0; $i < count($this->toppings); $i++) {
            echo "{$this->toppings[$i]}";
        }
    }
}