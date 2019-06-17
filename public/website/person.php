<?php

class Person
{
    public function sayGoodbye(){
        return 'Hello';

    }
     public function sayHello()



    {



    }


}

$person = new Person();
echo $person->sayGoodbye() . "<br>";;
echo $person->sayHello() . "<br>";;
echo 'The person has said Hello' . "<br>";;
echo $person->sayHello() . "<br>";;
echo 'Now the person has said Goodbye';