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
require_once "Truck.php";
require_once "Bus.php";

$car1 = new Auto(4,"Benz","чёрный",220);
$car2 = new Auto(2,"Porche","красный",220);
$car3 = new Truck(2,"Volvo","Синий",180,5);
$car4 = new Truck(2,"Man","Серый",180,4);
$car5 = new Bus(4,"Scania","Коричневый",190,60);

echo "<br>Автомобилей: ".Auto::$col;
echo "<br>Грузовиков: ".Truck::$col;
echo "<br>Автобусов: ".Bus::$col;

require_once "footer.php";




