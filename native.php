<?php

class  Sample{
    public $boom = 0;
}

class Person
{
    private $first_name;
    private $last_name;
    private $age;

    public function __construct($first_name, $last_name, $age , $sample)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $sample->boom;
    }

    public function get_fullname()
    {
        return $this->first_name. ' '. $this->last_name;
    }

    public function set_last_name($new_last_name)
    {
        $this->last_name = $new_last_name;
    }

    public function set_new_age()
    {
       return $this->age ;
    }
}

$sample = new Sample;

$person1 = new Person('Rose','magango','19' , $sample);

echo $person1->get_fullname();
// echo "<br>";
echo $person1->set_last_name('gernale');
// echo "<br>";
// echo $person1->set_new_age();
?>

