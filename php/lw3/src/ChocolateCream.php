<?php
require_once 'allokotos\lw2\src\ChocolateFactory.php';
use src\ChocolateFactory;

class ChocolateCream extends ChocolateFactory 
{
    public string $name = "cream";
    public array $toppings = ['chocolateCraced', 'iceCream', 'gratedNats'];
    public string $chokolate = "white"; 
}
