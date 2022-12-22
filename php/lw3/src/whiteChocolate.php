<?php
require_once 'allokotos\lw2\src\ChocolateFactory.php';
use src\ChocolateFactory;

class WhiteChocolat extends ChocolateFactory 
{
    public string $name = "chokolat";
    public array $toppings = ['gratedBlackChocolate', 'banana', 'nats', 'cacaobobs'];
    public string $chokolate = "white"; 
}
