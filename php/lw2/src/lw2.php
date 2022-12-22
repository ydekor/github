<?php
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

abstract class Pizza
{
    public string $name;
    public string $sauce;
    public array $toppings;

    public function __construct(string $name, string $sus, array $top)
    {
        $this->name = $name;
        $this->sauce = $sus;
        $this->toppings = $top;
    }

    public function cut(): string
    {
        $cutType = "по диагонали";
        return $cutType;
    }

    public function prepare(): void
    {
        echo "началась готовка пиццы {$this->name}";
        echo "Добавлен соус {$this->sauce}";
        echo "Добавлены топики: ";
        for ($i = 0; $i < count($this->toppings); $i++) {
            echo "{$this->toppings[$i]}";
        }
    }
}
