<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors by using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Bevrage
{

    private $color;
    private $price;
    private $temperature;


    public function __construct($color, $price, $temperature)
    {

        $this->color = $color;

        if (!is_float($price)) {
            exit;
        } else {
            $this->price = $price . " €";
        }


        if (!empty($temperature)) {
            $this->temperature = $temperature;
        } else {

            $this->temperature = "cold";
        }
    }

    public function getinfo()
    {
        return "This bevrage is $this->temperature and $this->color";
    }

    public function setPrice($price)
    {
        $this->price = $price . " €";
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;
    }

    public function getTemperature()
    {
        return $this->temperature;
    }
}

$cola = new Bevrage("black", 2.0, "");

echo $cola->getinfo();

echo "<br>" . $cola->getTemperature();

echo "<br>" . $cola->getPrice();

$cola->setPrice(3.5);

echo "<br>" . $cola->getPrice();
