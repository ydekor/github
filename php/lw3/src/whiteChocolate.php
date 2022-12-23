<?php
require_once __DIR__.'/../vendor/autoload.php';

use Allokotos\lw3\Snack;

class WhiteChocolat extends Snack 
{
    public string $name = "chokolat";
    public array $toppings = ['gratedBlackChocolate', 'banana', 'nats', 'cacaobobs'];
    public string $chokolate = "white"; 
}
