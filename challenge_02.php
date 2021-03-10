<?php

//inherit, extend, and override propoeties and methods

class Food {

    var $ingredients;
    var $dish;
    var $meal;
    var $is_delicious = false;
    var $is_green = false;

    function hungry() {
        return $this->$ingredients . ", " . $this->dish . ", " . $this->meal;
    }

}

class Veggies extends Food {
    var $is_green = true;
    var $is_delicious = true;
    var $comes_from_the_ground = true;
    var $ideal_servings = 3;
    var $wash_it_down_with_a_beverage;

    function servings() {
        if ($this->is_delicious) {
            return floatval($this->ideal_servings) * 2;
        }
        return floatval($this->ideal_servings);
    }
}

class Eggplant extends Veggies {
    var $is_green = false;
    var $is_delicious = false;
}

$veggies = new Veggies;
$eggplant = new Eggplant;

echo 'The veggies are delicious. Would you like seconds? I will actually have ' .  $veggies->servings() . " more servings!<br />";
echo 'Did you like the eggplant? ' . ($eggplant->is_delicious ? 'yes' : 'no, not enough pepper!') ;
