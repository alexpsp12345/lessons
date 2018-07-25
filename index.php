<?php
require_once "lib/functions.php";
require_once "header.php";


kosti();
require_once "menu.php";

if($_GET["page"])
{
$sql = "SELECT content FROM pages WHERE id='{$_GET['page']}'";
$content= db($sql);
$data = mysqli_fetch_assoc($content);
echo $data['content']." ";
}

require_once "Auto.php";

$car1 = new Auto();
$car1->color = "чёрный";
$car1->doors = 4;
$car1->model = "Benz";
$car1->speed = 220;

$car2 = new Auto();
$car2->color = "красный";
$car2->doors = 2;
$car2->model = "Porche";
$car2->speed = 220;

echo $car1->model;
$car1->go();


require_once "footer.php";




