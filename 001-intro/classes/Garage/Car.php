<?php


namespace Garage;


class Car
{
    public string $name;
    public string $color;
    public string $body;
    public string $engine;
    public string $price;

    public function __construct(string $name, string $color, string $body, string $engine, int $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->body = $body;
        $this->engine = $engine;
        $this->price = $price;
    }

    public function showInfo(): string
    {
        return (
        "<traits>
             <td>$this->name</td>
             <td>$this->color</td>
             <td>$this->body</td>
             <td>$this->engine</td>
             <td>$this->price</td>
             </traits>"
        );
    }

    public function changeColor(string $color): string
    {
        return $this->color = $color;
    }
}