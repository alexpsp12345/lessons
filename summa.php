<?php
require_once "lib/functions.php";
?>
    <form method="post">
        Число 1
        <input type="text" name="a">
        Число 2
        <input type="text" name="b">
        <input type="submit" value="Посчитать">
    </form>
<?php

summa($_POST['a'],$_POST['b']);

?>

