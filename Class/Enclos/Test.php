
<?php

class Animal2 {
    protected $age;
    protected $species;

    public function __construct($age, $species)
    {
        $this->age = $age;
        $this->species = $species;
    }


    public function info() {
        echo "Mon animal est un $this->species et à : $this->age ans";
    }
}


class Cat extends Animal2 {
    
}

$cat = new Cat(2, 'chat');
$cat->info();

