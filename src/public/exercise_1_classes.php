<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class Beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/


class Bevrage
{

    public $color;
    public $price;
    public $temperature;


    public function __construct($color, $price, $temperature)
    {

        $this->color = $color;

        if (!is_float($price)) {
            exit;
        } else {
            $this->price = $price;
        }


        if (!empty($temperature)) {
            $this->temperature = $temperature;
        } else {

            $this->temperature = "cold";
        }
    }

    public function getinfo()
    {
        echo "This bevrage is $this->temperature and $this->color";
    }
}

$cola = new Bevrage("black", 2.0, "");

$cola->getinfo();

echo "<br>" . $cola->temperature;

echo "<br>" . $cola->price;
