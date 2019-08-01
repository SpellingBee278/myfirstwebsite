<?php include('lib/header.inc.php'); ?>


<?php
echo 'This is save.php, if you pressed the submit button in mix.php you will get to this page';

$connection = mysqli_connect('localhost', 'root', 'root', 'scotchbox');




$sql = "INSERT into users (name,age,class,bio,favourite_book,software,favourite_color,location) values 
('{$_POST['name']}','{$_POST['age']}','{$_POST['class']}','{$_POST['bio']}','{$_POST['favourite_book']}','{$_POST['software']}','{$_POST['favourite_color']}','{$_POST['location']}')";


$query = mysqli_query($connection,$sql);
