<?php

class car{

    public $numberOfWheels;
    public $numberOfSeats;
    public $numberOfDoors;
    public $color;
    public $model;
    public $make;
    public $numberOfPassengers;
    public $mph = 0;

    public function __construct($numberOfWheels,$numberOfSeats,$numberOfDoors,$make,$model)
    {
       $this->numberOfWheels = $numberOfWheels;
       $this->numberOfSeats = $numberOfSeats;
       $this->numberOfDoors = $numberOfDoors;
       $this->make = $make;
       $this->model = $model;
       $this->numberOfPassengers = 0;

       echo "a new car has been made<br>";
    }

    public function paintCar($color){

        $this->color = $color;

    }

    public function drive(){

        echo'The car is driving<br>';
    }

    public function getCarInfo(){

        echo "<h2>Car info</h2>";
        echo "Wheels: " . $this->numberOfWheels . "<br>";
        echo "Seats: " . $this->numberOfSeats . "<br>";
        echo "Doors: " . $this->numberOfDoors . "<br>";
        echo "Make: " .  $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Color: "  . $this->color . "<br>";
    }

    public function stop(){

        echo 'The car stopped in traffic'  . "<br>";;

    }
    public function pickUpPassenger($numberOfPassengers){

        if ($this->numberOfSeats === $this->numberOfPassengers ){

            echo "The car is full and can't pick-up anymore passengers <br>";

        }
        else {

            $this->numberOfPassengers += $numberOfPassengers;
            echo 'The car picked up a passenger<br>';
        }

        echo 'The total of passengers is ' . $this->numberOfPassengers . '<br>';

    }
    public function dropOffPassenger($droppedOffPassengers){
        $this->numberOfPassengers -= $droppedOffPassengers;
        echo 'The driver dropped off '. $droppedOffPassengers . ' passengers<br>';
        echo 'The total of passengers is ' . $this->numberOfPassengers . '<br>';


    }

}

$Car = new Car(4,4,10,"BMW","Limo");
$Car->paintCar("Blue");
$Car->getCarInfo();
$Car->drive();
$Car->stop();
$Car->pickUpPassenger(2);
$Car->drive();
$Car->stop();
$Car->pickUpPassenger(2);
$Car->dropOffPassenger(3);


