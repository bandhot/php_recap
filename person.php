<?php

class Person
{
    public $name;
    public $age;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function __toString()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        if ($age < 18) {
            exit("Youre are not allowed");
        }
        $this->age = $age;
    }
}

$john = new Person($argv[1]);
$john->setAge($argv[2]);
echo "Your name " .$john." and your age is " .$john->getAge();