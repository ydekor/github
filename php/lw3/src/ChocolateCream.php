<?php
require_once __DIR__.'/../vendor/autoload.php';

use Allokotos\lw3\Snack;

class ChocolateCream extends Snack 
{
    public string $name = "cream";
    public array $toppings = ['chocolateCraced', 'iceCream', 'gratedNats'];
    public string $chokolate = "white"; 
}
