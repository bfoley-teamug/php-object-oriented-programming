<?php

class Student {  

    var $first_name;
    var $last_name;
    var $country = 'USA';

    function say_hello() {
        return 'Hello world!';
    }

//refer to an instance
    function full_name() {
        return $this->first_name . " " . $this->last_name;
    }

}

$student1 = new Student;
$student1->first_name = 'Joe';
$student1->last_name= 'Montana';


$student2 = new Student;
$student2->first_name = 'Steve';
$student2->last_name= 'Young';

echo $student1->full_name() . "<br />";
echo $student2->full_name() . "<br />";

echo $student1->first_name . " " . $student1->last_name;

echo $student1->say_hello() . "<br />";
echo $student2->say_hello() . "<br />";

$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . " <br />";


if(method_exists('Student', 'say_hello')) {
    echo "Yes!!!";
} else {
    echo "No!!!";
}


?>
