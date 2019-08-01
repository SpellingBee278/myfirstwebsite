<?php include('lib/header.inc.php'); ?>
<hr>

<?php


class Animal {

public function Move() {

    echo " the animal is walking";


}

}
class Fish extends Animal {

    public function Move() {

        echo " the fish is swimming";
    }

}

class Dog extends Animal {


}
$Animal = new Animal();
$Animal->Move();

$Fish = new Fish();
$Fish->Move();

$Dog =  new Dog();
$Dog->Move();


