<?php
?>

<?php include('lib/header.inc.php'); ?>
<hr>
<?php
class Person
{
    public function sayGoodbye()
    {
        return 'Hello';

    }

    public function sayHello()
    {

        return 'Goodbye';


    }

    public function walk()
    {
        return 'Walking past bye';


    }


    public function adopt()
    {

        return 'Adopted a fish';

    }

    public function buy()
    {
        return 'Bought fish food';

    }

    public function run()
    {
        return 'The person ran';

    }
}

$person = new Person();
echo 'A new person has been made'  . "<br>";;
echo '<h2>Person info</h2>';
echo $person->sayGoodbye() . "<br>";;
echo 'The person has said Hello' . "<br>";;
echo $person->sayHello() . "<br>";;
echo 'Now the person has said Goodbye'  . "<br>";;
echo $person->walk()  . "<br>";;
echo 'The person is walking past a shop man near a sign'  . "<br>";;
echo $person->adopt()  . "<br>";;
echo 'The person has adopted a fish'  . "<br>";;
echo $person->buy()  . "<br>";;
echo 'The person has bought fish food from a pet shop'  . "<br>";;
echo $person->run() . "<br>";;
echo 'The person is running again' . "<br>";;
