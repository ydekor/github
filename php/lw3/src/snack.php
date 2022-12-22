<?php
require_once 'allokotos\lw2\src\Snack.php';
use src\ChocolateFactory;

class Snack extends Snack 
{
    public string $name;
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
        echo "Началось создание снэка {$this->name}";
        echo "Добавляется шоколад {$this->chocolate}";
        echo "Добавлены начинки:";
        for ($i = 0; $i < count($this->toppings); $i++) {
            echo "{$this->toppings[$i]}";
        }
    }
}
