<table>
<form method="post">
    Количество строк
    <input type="text" name="rows">
    Количество столбцов
    <input type="text" name="cols">
    <input type="submit" value="Нарисовать таблицу Пифагора">
</form>

<?php
$tr = $_POST["rows"];
$td = $_POST["cols"];

for ($j=1;$j<=$tr;$j++)
{
    echo "<tr>";
    if($j==1)
    {
        for ($i=1; $i<=$td; $i++)
        {
            echo "<td>" . $i . "</td>";
        }
    }
    else
    {
        for ($i=1; $i<=$td; $i++)
        {
            echo "<td>".$i*$j."</td>";
        }
    }
    echo "</tr>";

}


?>

</table>