<?php
    class superHero{
        public $day2code;
        public $name;
        public $power;
        public $size;
        public $favorite_color;

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
    $superHero = new superHero();{
    $superHero->giveName('Superman');
    $superHero->giveMagic('Fire');
}


    public function giveSize($size)
{
    $this->size = $size;
    echo "His size is set to:   " . $this->size;
    echo "<br>";


}



public function giveColor($favorite_color){
  $this->favorite_Color = $favorite_color;
  echo "His favorite color is set to:     "  . $this->favorite_Color;
  echo "<br>";
}






