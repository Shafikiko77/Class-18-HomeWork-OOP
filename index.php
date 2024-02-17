<?php

class Car{
    //*PROPERTY
    //*ACCESS MODIFIER



    //* Magic METHRODS
    //* CONSTRUCT METHROD
    function __construct(
        public $carName,
        public $speed,
        public $type,
        protected $color
    ){
        
    }
    function goingForward()
    {
        echo "The $this->carName is going $this->speed forward <br>";
    }
    function goingBackward()
    {
        echo "The $this->carName is going backward <br>";
    }
    function getCarType()
    {
        echo "This $this->carName is $this->type <br>";
    }
}

class SuperCar extends Car{
    function getCarColor(){
        echo "$this->color";
    }
}

$ferrari= new SuperCar(
    'Ferrari',
    'very very fast',
    'Super Car',
    'White'
);
$ferrari->getCarColor()
// $tesla= new Car('Tesla x20', 'Very Fast', 'Electric Car','red');


// $tesla -> goingForward('tesla');
// $tesla -> goingBackward('tesla');
// $tesla -> getCarType();

// $toyota= new Car;
// $toyota -> carName='Toyota 500';

// $toyota -> goingForward('nissan','Slow');


    
?>