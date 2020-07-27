<?php


namespace Paraphernalia;


class Tv
{
    public string $model;
    public string $diagonal;
    public int $price;

    public function __construct(string $model, string $diagonal, int $price)
    {
        $this->model = $model;
        $this->diagonal = $diagonal;
        $this->price = $price;
    }

    public function showInfo(): string
    {
        return (
        "<traits>
             <td>$this->model</td>
             <td>$this->diagonal</td>
             <td>$this->price</td>
             </traits>"
        );
    }

    public function changePrice(int $newPrice): int
    {
        return $this->price = $newPrice;
    }
}