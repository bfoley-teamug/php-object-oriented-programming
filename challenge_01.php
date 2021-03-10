
<?php

    class Bike {
        var $brand;
        var $model;
        var $year;
        var $description = 'used';
        var $cost = 0.00;

        function name() {
            return $this->brand . " " . $this->model . " (" . $this->year . ")";
        }

        function cost_usd() {
            return floatval($this->cost) * 1.25;
        }
    } 


    $hey = new Bike;
    $hey->brand = 'Cool bike';
    $hey->model = 'vintage';
    $hey->year = '1985';
    $hey->cost = 50.00;

    $yo = new Bike;
    $yo->brand = 'Rad bike';
    $yo->model = 'newish!';
    $yo->year = '2009';
    $yo->cost = 200.00;

    echo $hey->name() . '<br />';
    echo $yo->name() . '<br />';

    echo $hey->cost . "<br />";
    echo $hey->cost_usd() . "<br />";

    echo $yo->cost . "<br />";
    echo $yo->cost_usd() . "<br />";
