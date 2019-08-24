<?php
    class superHero{
        public $day2code;
        public $name;
        public $power;
        public $size;

        public function giveName($name){
           $this->name = $name;
            echo "Super Hero name set to: " .$this->name;
            echo "<br>";

        }

        public function giveMagic($power){
            $this->power = $power;
            echo " His power is set to: " . $this->power;
            echo "<br>";

        }
    }

    $superHero = new superHero();
    $superHero->giveName('Superman');
    $superHero->giveMagic('Fire');
