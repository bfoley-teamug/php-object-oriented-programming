<?php

class User {

  var $is_admin = false;

  var $first_name;
  var $last_name;
  var $username;

  function full_name() {
    return $this->first_name . " " . $this->last_name;
  }

}

//sub-class
 
class Customer extends User {

    var $city;
    var $state;
    var $country;

    function location() {
        return $this->city . ", " . $this->state . ", " . $this->country;
    }

}

//override Class
class AdminUser extends User {
    var $is_admin = true;

    function location() {
        return $this->city . ", " . $this->state . ", " . $this->country . " (admin!)";
    }

}

//

$d = new User;
$d->first_name = 'Duke';
$d->last_name = 'Ellinton';
$d->username = 'dellington';

$m = new Customer;
$m->first_name = 'Miles';
$m->last_name = 'Davis';
$m->username = 'mdavis';

// extend class
$m->city = 'Santa Monica';
$m->state = 'CA';
$m->country = 'USA';

$m->location() . '<br />';

//

echo $d->full_name() . '<br />';
echo $m->full_name() . '<br />';

echo get_parent_class($d) . '<br />';
echo get_parent_class($m) . '<br />';

if(is_subclass_of($m, 'User')) {
    echo "Hi, I am a subclass of user! <br />";
}

$parents = class_parents($m);

echo implode(', ', $parents) . '<br />';

?>
