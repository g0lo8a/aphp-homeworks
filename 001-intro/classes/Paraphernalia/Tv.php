<?php


namespace Paraphernalia;


class Tv
{
    public string $model;
    public string $diagonal;
    public string $price;

    public function __construct(string $model, string $diagonal, string $price)
    {
        $this->model = $model;
        $this->diagonal = $diagonal;
        $this->price = $price;
    }

    public function showInfo(): string
    {
        return (
        "<tr>
             <td>$this->model</td>
             <td>$this->diagonal</td>
             <td>$this->price</td>
             </tr>"
        );
    }

    public function giveDiscount()
    {

    }
}