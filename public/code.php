<?php include('lib/header.inc.php'); ?>
<hr>

<?php
echo 'This is the echo';

$number = 7+2;
$subtract = 9-1;
$multiple = 2*2;
$divide = 2/2;
$age = 6;
$bio = "I started PHP!";
$software = "My software I am using is PHPStorm!";
$first_name = "Ilyas";
$last_name = "Aslam";
$vom = "Mac Sierra 10.23.80"
?>
<br>
<?php echo $number;?>
<br>

<?php echo $subtract;?>
<br>
<?php echo $multiple;?>
<br>
<?php echo $divide;?>
<h1>
    My name is  Ilyas, My age is <?php echo $age;?>
</h1>
<h1>
    <?php echo $bio;?>
</h1>
<h1>
    <?php echo $software;?>
</h1>
<hr>
<br>
<?php echo $first_name . " " . $last_name;?>
<br>
<?php echo $number + $subtract;?>
<br>
<?php echo $number + $multiple;?>
<br>
<?php echo $number + $divide;?>
<br>
<?php echo $subtract + $multiple;?>
<br>
<?php echo $subtract + $divide;?>
<br>
<?php echo $multiple + $divide;?>
<br>
<?php echo 'My macintosh version is $vom';?>


