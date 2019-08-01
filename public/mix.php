<?php
?>
<hr>
<?php

echo 'This is a php website with Javascript code too';
ob_clean();
?>
<form method="post" action="save.php">
     Name:<br>
    <input type="text" name="name"><br>
    Age:<br>
    <input type="text" name="age">

<br>

    Class:<br>
    <input type="text" name="class"><br>
    Bio:<br>
    <textarea name="bio" rows="10" cols="30"></textarea>

<br>

    Favourite_book:<br>
    <input type="text" name="favourite_book"><br>
    Software:<br>
    <input type="text" name="software">

<br>

    Favourite_color:<br>
    <input type="text" name="favourite_color"><br>
    Location:<br>
    <input type="text" name="location">
    <br>
    <button type="submit" value="Submit">Submit</button>
</form>
