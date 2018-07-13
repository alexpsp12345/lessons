<table>
<form method="post">
    Количество строк
    <input type="text" name="rows">
    Количество столбцов
    <input type="text" name="cols">
    <input type="submit" value="Нарисовать таблицу Пифагора">
</form>

<?php
require_once "lib/functions.php";
$tr = $_POST["rows"];
$td = $_POST["cols"];



pifagor($td,$tr);
pifagor(3,3);

?>

</table>