<?php
require_once 'allokotos\lw2\src\ChocolateFactory.php';
use src\ChocolateFactory;

class Chocolat extends ChocolateFactory 
{
    public string $name = "chokolat";
    public array $toppings = ['honey', 'nats'];
    public string $chokolate = "honey"; 
}
