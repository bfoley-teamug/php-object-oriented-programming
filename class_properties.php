<?php

class Student {

    var $first_name;
    var $last_name;
    var $country = 'Canada';

}

$student1 = new Student;
$student1->first_name = 'Dale';
$student1->last_name= 'Foley';


$student2 = new Student;
$student2->first_name = 'Edward';
$student2->last_name= 'Switzer';

echo $student1->first_name . " " . $student1->last_name;

$class_vars = get_class_vars('Student');
echo "Class vars: <br />";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

$object_vars = get_object_vars($student1);
echo "Object vars: <br />";
echo "<pre>";
print_r($object_vars);
echo "</pre>";

if(property_exists('Student', 'first_name')) {
    echo "Yes!!!";
} else {
    echo "No!!!"; 
}


?>
