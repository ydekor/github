<?php

require_once __DIR__.'/../vendor/autoload.php';

use Allokotos\lw3\Snack;

class Chocolat extends Snack
{
    public string $name = "chokolat";
    public array $toppings = ['honey', 'nats'];
    public string $chokolate = "honey"; 
}
